<!--导航开始-->
@include('home.index.common.top')
{{--<link rel="stylesheet" type="text/css" href="/home/navigate/css/basic.css">--}}
<link href="/home/navigate/css/font.css" rel="stylesheet" type="text/css">
<link href="/home/navigate/css/font-ie7.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/home/navigate/css/css.css">
<link href="http://qdgu.cn/Public/Skins/favicon.ico" rel="shortcut icon">
<script type="text/javascript" src="/home/navigate/js/jquery.min.js"></script>
<script type="text/javascript" src="/home/navigate/js/common.js"></script>
<style>
    @media(max-width:960px)
    {
        /* 网页全屏显示 */
        body {width:100%;}
    }
    .time-list li{height:32px;}
    .mysection {
        width: 100% !important;
        min-height: 80%;
        float: left;
    }
    .section {
        width: 97% !important;
        float: left;
        margin-top: 15px;
        padding:15px 0px;
    }
    .searchBtn {
        border: none;
        box-shadow:none;
        margin-right: 1em;
    }
    .wrap {
        width: 100% !important;
        min-width: 50%
    }
</style>
<!--导航结束-->

<!--主题框架开始-->
<div class="container">
    <!--左侧开始-->
    <section class="mysection">
        <h4 class="index-title">
            <a href="/"><i class="el el-home"></i>首页 &nbsp;> </a>
            {{--@if(!empty(request('keywords')))--}}
            {{--<span class="orange-text">{{ reqeust('keywords') }}</span>--}}
            {{--@else--}}
            <span class="orange-text">{{ $title }}</span>
            {{--@endif--}}
            <span style="float:right;">
                <form action="/url_search" method="get">
                    <input name="keywords" type="text"  placeholder="请输入关键字" onfocus="this.placeholder=''" onblur="this.placeholder='请输入关键字'" />
                    <button style="cursor: pointer;" type="button" class="searchBtn"><i class="el-search"></i></button>
                </form>
            </span>
        </h4>
        <div class="article-content bg-color">
            <div id="container" class="wrap">
                @foreach($twoCategory as $k => $v)
                <div class="section mtop" id="zonghe">
                    <h2 class="title">
                        <i class="icon-"></i>{{ $v->category_name }}
                        <span class="sub-category">
                            @foreach($v->childCategory as $kk => $vv)
                                <a href="/toolsCategory/{{ $vv->id }}/catename/{{ $vv->category_name }}" @if($kk == 0)) class="current" @endif>{{ $vv->category_name }}</a> |
                            @endforeach
                        </span>
                        {{--<a href="/toolsCategory/{{ $v->id }}" class="more">更多&gt;&gt;</a>--}}
                    </h2>
                    <div class="content">
                        <ul class="time-list clearfix">
                            @foreach($v->childUrls as $k1 => $v2)
                            <li>
                                <a href="{{ $v2->tools_url }}" target="_blank" rel="nofollow">{{ $v2->tools_name }}</a>
                                {{--<p>帮助读者快速了解掌握Web相关开发技术。</p>--}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
            </div><!--#container-->
        </div>
    </section>
    <!--左侧结束-->
</div>
<!--主题框架结束-->
<!---底部开始-->
@include('home.index.common.footer')
<!---底部结束-->
<script>
    $(function () {
        // $.ajax({
        //     type: 'get',
        //     url: '/admin/notice/getNotice?id=' + id,
        //     dataType: 'json',
        //     cache: false,
        //     success: function (data) {
        //         if(data.code === 0) {
        //             console.log(data);
        //             $('textarea[name=notice_content]').val(data.data.notice_content);
        //             $('input[name=notice_title]').val(data.data.notice_title);
        //             $('input[name=id]').val(data.data.id);
        //         }else{
        //             layer.msg(data.msg);
        //         }
        //     }
        // });
    });
</script>
