<?php

namespace App\Models;

use function request;
use Carbon\Carbon;

class Article extends Base
{
    protected $table = 'articles';
    /**
     * 添加文章
     *
     * @param array $data
     * @return bool|mixed
     */
    public function storeData($data)
    {
        // 如果没有描述;则截取文章内容的前200字作为描述
        if (empty($data['description'])) {
            $description = preg_replace(array('/[~*>#-]*/', '/!?\[.*\]\(.*\)/', '/\[.*\]/'), '', $data['markdown']);
            $data['description'] = re_substr($description, 0, 250, true);
        }

        // 给文章的插图添加水印;并取第一张图片作为封面图
        $data['cover'] = $this->getCover($data['markdown']);
        // 把markdown转html
        $data['html'] = markdown_to_html($data['markdown']);
        $tag_ids = $data['tag_ids'];
        unset($data['tag_ids']);

        //添加数据
        $result=$this->create($data)->id;
        if ($result) {
//            session()->flash('alert-message','添加成功');
//            session()->flash('alert-class','alert-success');

            // 给文章添加标签
            $articleTag = new ArticleTag();
            $articleTag->addTagIds($result, $tag_ids);

            return $result;
        }else{
            return false;
        }
    }

    /**
     * 给文章的插图添加水印;并取第一张图片作为封面图
     *
     * @param $content        markdown格式的文章内容
     * @param array $except   忽略加水印的图片
     * @return string
     */
    public function getCover($content, $except = [])
    {
        // 获取文章中的全部图片
        preg_match_all('/!\[.*\]\((\S*).*\)/i', $content, $images);
        if (empty($images[1])) {
            $cover = '/uploads/article/default.jpg';
        } else {
            // 循环给图片添加水印
            foreach ($images[1] as $k => $v) {
                $image = explode(' ', $v);
                $file = public_path().$image[0];
                if (file_exists($file) && !in_array($v, $except)) {
                    Add_text_water($file, config('blog.text_water'));
                }

                // 取第一张图片作为封面图
                if ($k == 0) {
                    $cover = $image[0];
                }
            }
        }
        return $cover;
    }

    /**
     * 后台文章列表
     *
     * @return mixed
     */
    public function articleList($where = [], $pageSize = 15)
    {
        $query = $this;
        $where['title'] = request()->input('title', '');
        $where['start_time'] = request()->input('start_time', '');
        $where['stop_time'] = request()->input('stop_time', '');
        if(!empty($where['title'])) {
            $query = $query->where('articles.title', 'like', '%' . $where['title'] . '%');
        }

        if (!empty($where['start_time'])) {
            $query = $query->where('articles.created_at', '>=', $where['start_time']);
        }

        if (!empty($where['stop_time'])) {
            $query = $query->where('articles.created_at', '<=', $where['stop_time']);
        }

        if (!empty($where['start_time']) && !empty($where['stop_time'])) {
            $query = $query->whereBetween('articles.created_at', [$where['start_time'], $where['stop_time']]);
        }
        $articles = $query
            ->select('articles.*', 'c.category_name')
            ->join('categories as c', 'articles.category_id', 'c.id')
            ->orderBy('id', 'desc')
            ->withTrashed()
            ->paginate($pageSize);
        return $articles;
    }

//    public function getCategoryNameById(int $id)
//    {
//        return app('db')->table('categories')->where('id', intval($id))->value('name');
//    }

    /**
     * 获取前台文章列表
     *
     * @return mixed
     */
    public function getHomeList($map = [])
    {

        // 获取文章分页
        $data = $this
            ->whereMap($map)
            ->select('articles.id', 'articles.type', 'articles.title', 'articles.click', 'articles.cover', 'articles.author', 'articles.description', 'articles.category_id', 'articles.created_at', 'c.category_name')
            ->join('categories as c', 'articles.category_id', 'c.id')
            ->orderBy('articles.created_at', 'desc')
            ->paginate(14);
        // 提取文章id组成一个数组
        $dataArray = $data->toArray();
        $article_id = array_column($dataArray['data'], 'id');
        // 传递文章id数组获取标签数据
        $articleTagModel = new ArticleTag();
        $tag = $articleTagModel->getTagNameByArticleIds($article_id);
        foreach ($data as $k => $v) {
            $data[$k]->commentCount = self::getCommentsByArticleId($v->id);
            $data[$k]->tag = isset($tag[$v->id]) ? $tag[$v->id] : [];
            $dt = Carbon::parse($v->created_at);
            $data[$k]->month = $dt->month;
            $data[$k]->day = $dt->day;
        }
        return $data;
    }

    public function newArticle()
    {
        $page = intval(request('page', 1));
        $perPage = 9;
        $offset = ($page-1)*$perPage;
        $data = $this
            ->select('articles.id', 'articles.type', 'articles.title', 'articles.click', 'articles.cover', 'articles.author', 'articles.description', 'articles.category_id', 'articles.created_at', 'c.category_name')
            ->join('categories as c', 'articles.category_id', 'c.id')
            ->orderBy('articles.created_at', 'desc')
            ->offset($offset)
            ->limit($perPage)
            ->get();
        $total = $this
            ->select('articles.id', 'articles.type', 'articles.title', 'articles.click', 'articles.cover', 'articles.author', 'articles.description', 'articles.category_id', 'articles.created_at', 'c.category_name')
            ->join('categories as c', 'articles.category_id', 'c.id')
            ->count();
        $dataArray = $data->toArray();
        // 提取文章id组成一个数组
        $article_id = array_column($dataArray, 'id');
        // 传递文章id数组获取标签数据
        $articleTagModel = new ArticleTag();
        $tag = $articleTagModel->getTagNameByArticleIds($article_id);
        // 传递文章id数组获取标签数据
        foreach ($data as $k => &$v) {
            $v->tag = isset($tag[$v->id]) ? $tag[$v->id] : [];
            $dt = Carbon::parse($v->created_at);
            $v->month = $dt->month;
            $v->day = $dt->day;
        }
        $totalList = ['data' => $data, 'total' => $total];
        return $totalList;
    }

    /**
     * 通过文章id获取数据
     *
     * @param $id
     * @return mixed
     */
    public function getDataById($id)
    {
        $data = $this->select('articles.*', 'c.category_name')
            ->join('categories as c', 'articles.category_id', 'c.id')
            ->where('articles.id', $id)
            ->withTrashed()
            ->first();
        $articleTag = new ArticleTag();
        $tag = $articleTag->getTagNameByArticleIds([$id]);
        // 处理标签可能为空的情况
        $data['tag'] = empty($tag) ? [] : current($tag);
        $data['commentCount'] = self::getCommentsByArticleId($data->id);
        return $data;
    }

    private static function getCommentsByArticleId(int $article_id)
    {
        return app('db')->table('comments')->where('article_id', $article_id)->count();
    }

    public static function getColumnValue(int $id, string $column)
    {
        return self::where('id', intval($id))->value($column);
    }

}
