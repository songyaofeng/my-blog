@extends('layouts.home')

@section('content')
    <section class="mysection">
        @if(request()->has('wd'))
            <h4 class="search-title bg-color"><i class="el-search-alt"></i>您查询的关键字： <span style="color:#DC4900">{{ $title }}</span></h4>
        @endif
        @if(!empty($tagName))
            <h4 class="search-title bg-color"><i class="el-search-alt"></i>您查询的标签： <span style="color:#DC4900;">{{ $tagName }}</span></h4>
        @endif
        @if($url == $host)
        <div class="swiper-container">
            <ul class="slides swiper-wrapper">
                @foreach($banners as $k => $banner)
                <li class="swiper-slide">
                {{--<li class="swiper-slide img_loading">--}}
                    <a href="#" title="宋耀锋博客全新改版上线">
                        <img src="{{ $banner->banner_path }}" alt="{{ $banner->banner_title }}" title="{{ $banner->banner_title }}"/>
                    </a>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    {{--<span class="silde-title" style="display:none;">宋耀锋博客全新改版上线</span>--}}
                </li>
                @endforeach
            </ul>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        @endif
        <div class="arclist">
            <h4 class="index-title homeh4"><a href=""><i class="el-certificate"></i>最新文章<small>New Article</small></a> </h4>
            <!--列表开始-->
            <ul id="newArticleList">
                @foreach($article as $k => $v)
                    <li class="img-loading">
                        {{--<div class="arcimg" id="">--}}
                        <div class="arcimg">
                            <img src="{{ $v->cover }}"  alt="{{ $v->title }}" title="{{ $v->title }}"/>
                        </div>
                        <div class="arc-right">
                            <h4 class="blue-text">
                                <a href="/article/{{ $v->id }}" title="{{ $v->title }}" target="_blank">{{ $v->title }}</a>
                            </h4>
                            <p>{{ $v->description }}</p>
                            <ul>
                                <li><a title="{{ $v->author }}{{ $v->created_at }}发表"><i class="el-time"></i>{{ $v->created_at }}</a></li>
                                <li><a target="_blank" href="#" title="作者： {{ $v->author }}"><i class="el-user"></i>{{ $v->author }}</a></li>
                                <li><a href="javascript: void(0);" title="已有 {{ $v->commentCount }} 条评论"><i class="el-comment"></i>{{ $v->commentCount }}</a></li>
                                <li><a title="已有 {{ $v->click }} 次浏览"><i class="el-eye-open"></i>{{ $v->click }}</a></li>
                                <li><a href="/category/{{ $v->category_id }}" title="查看分类"><i class="el-th-list"></i>{{ $v->category_name }}</a></li>
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>

            <div class="page">
                {{ $pageString }}
            </div>
            <!--列表结束-->
            {{--<div class="sucailist mob-hidden">--}}
            {{--<h4 class="index-title"><a href=""><i class="el-certificate"></i>最新素材<small>New sucai</small></a></h4>--}}
            {{--<!--列表开始-->--}}
            {{--<ul class="su">--}}
            {{--<li class="su-li">--}}
            {{--<!-- <li class="su-li"id="Hot"> -->--}}
            {{--<a href="/downdetail/24.html" title="个人博客模板分享下载">--}}
            {{--<div class="sucaiimg img_loading">--}}
            {{--<img  src="/home/images/2017091259b7b3b11f910.jpg" alt="个人博客模板分享下载"/>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--<div class="sucai-right">--}}
            {{--<h4 class="blue-text"><a href="/downdetail/24.html" title="个人博客模板分享下载">个人博客模板分享下载</a></h4>--}}
            {{--<ul>--}}
            {{--<li><a title="个人博客模板分享下载2017-09-12发表 "><i class="el-time"></i>2017-09-12</a></li>--}}
            {{--<li class="mob-hidden">--}}
            {{--<i class="el-download-alt"></i>--}}
            {{--<a href="javascript::void(0);">7</a>&nbsp;--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}

            {{--</li>--}}
            {{--<li class="su-li">--}}
            {{--<!-- <li class="su-li"id="Hot"> -->--}}
            {{--<a href="/downdetail/23.html" title="珠宝首饰微商城wap网站模板下载">--}}
            {{--<div class="sucaiimg img_loading">--}}
            {{--<img  src="/home/images/2017083159a7d848689a8.png" alt="珠宝首饰微商城wap网站模板下载"/>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--<div class="sucai-right">--}}
            {{--<h4 class="blue-text"><a href="/downdetail/23.html" title="珠宝首饰微商城wap网站模板下载">珠宝首饰微商城wap网站模板下载</a></h4>--}}
            {{--<ul>--}}
            {{--<li><a title="珠宝首饰微商城wap网站模板下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>--}}
            {{--<li class="mob-hidden">--}}
            {{--<i class="el-download-alt"></i>--}}
            {{--<a href="javascript::void(0);">2</a>&nbsp;--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li class="su-li">--}}
            {{--<!-- <li class="su-li"id="Hot"> -->--}}

            {{--<a href="/downdetail/22.html" title="美食餐饮公司微店网站模板下载">--}}

            {{--<div class="sucaiimg img_loading">--}}

            {{--<img  src="/home/images/2017083159a7d236c70b2.jpg" alt="美食餐饮公司微店网站模板下载"/>--}}

            {{--</div>--}}

            {{--</a>--}}

            {{--<div class="sucai-right">--}}

            {{--<h4 class="blue-text"><a href="/downdetail/22.html" title="美食餐饮公司微店网站模板下载">美食餐饮公司微店网站模板下载</a></h4>--}}

            {{--<ul>--}}

            {{--<li><a title="美食餐饮公司微店网站模板下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>--}}

            {{--<li class="mob-hidden">--}}

            {{--<i class="el-download-alt"></i>--}}

            {{--<a href="javascript::void(0);">9</a>&nbsp;--}}

            {{--</li>--}}

            {{--</ul>--}}

            {{--</div>--}}

            {{--</li>--}}
            {{--<li class="su-li">--}}
            {{--<!-- <li class="su-li"id="Hot"> -->--}}

            {{--<a href="/downdetail/21.html" title="韩国手机导购网站主页免费分享下载">--}}

            {{--<div class="sucaiimg img_loading">--}}

            {{--<img  src="/home/images/2017083159a7c5cb5262e.png" alt="韩国手机导购网站主页免费分享下载"/>--}}

            {{--</div>--}}

            {{--</a>--}}

            {{--<div class="sucai-right">--}}

            {{--<h4 class="blue-text"><a href="/downdetail/21.html" title="韩国手机导购网站主页免费分享下载">韩国手机导购网站主页免费分享下载</a></h4>--}}

            {{--<ul>--}}

            {{--<li><a title="韩国手机导购网站主页免费分享下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>--}}

            {{--<li class="mob-hidden">--}}

            {{--<i class="el-download-alt"></i>--}}

            {{--<a href="javascript::void(0);">9</a>&nbsp;--}}

            {{--</li>--}}

            {{--</ul>--}}

            {{--</div>--}}

            {{--</li>--}}
            {{--<li class="su-li">--}}
            {{--<!-- <li class="su-li"id="Hot"> -->--}}

            {{--<a href="/downdetail/20.html" title="带背景音乐的手机网站模板下载">--}}
            {{--<div class="sucaiimg img_loading">--}}
            {{--<img  src="/home/images/2017083159a7c0dab39fd.jpg" alt="带背景音乐的手机网站模板下载"/>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--<div class="sucai-right">--}}
            {{--<h4 class="blue-text"><a href="/downdetail/20.html" title="带背景音乐的手机网站模板下载">带背景音乐的手机网站模板下载</a></h4>--}}
            {{--<ul>--}}
            {{--<li><a title="带背景音乐的手机网站模板下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>--}}
            {{--<li class="mob-hidden">--}}
            {{--<i class="el-download-alt"></i>--}}
            {{--<a href="javascript:void(0);">0</a>&nbsp;--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--<li class="su-li">--}}
            {{--<!-- <li class="su-li"id="Hot"> -->--}}
            {{--<a href="/downdetail/19.html" title="wap端微官网手机模板分享下载">--}}
            {{--<div class="sucaiimg img_loading">--}}
            {{--<img  src="/home/images/2017083159a7bc72bb166.jpg" alt="wap端微官网手机模板分享下载"/>--}}
            {{--</div>--}}
            {{--</a>--}}
            {{--<div class="sucai-right">--}}
            {{--<h4 class="blue-text"><a href="/downdetail/19.html" title="wap端微官网手机模板分享下载">wap端微官网手机模板分享下载</a></h4>--}}
            {{--<ul>--}}
            {{--<li><a title="wap端微官网手机模板分享下载2017-08-31发表 "><i class="el-time"></i>2017-08-31</a></li>--}}
            {{--<li class="mob-hidden">--}}
            {{--<i class="el-download-alt"></i>--}}
            {{--<a href="javascript:void(0);">8</a>&nbsp;--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<!--列表结束-->--}}
            {{--</div>--}}
        </div>
    </section>
@endsection