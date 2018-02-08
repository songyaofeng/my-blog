
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/home/css/font-icon.css"/>
    <style type="text/css">
        body{
            margin:0;
        }
        .area {
            margin-bottom: 0;
            width: 100%;
            background-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
            overflow: hidden;
            font-size: 12px;
        }
        .area .page-wrapper {
            margin-left: 0;
            box-shadow: none;
            /*border-left: 1px solid #e5e5e5;*/
        }
        .area .page-wrapper .dashboard-main {
            padding: 20px 30px;
            min-height: 760px;
        }
        .area li{
            list-style: none;
        }
        .sub-title {
            font-size: 16px;
            margin-bottom: 3px;
            color: #8A8A8A;
        }
        .tip {
            color: #999;
            margin-bottom: 20px;
        }
        .dashboard-wrapper {
            margin: 20px auto;
        }
        .briefly {
            height: auto;
            overflow: hidden;
            margin-left: -1.35%;
        }
        .briefly ul{
            padding: 0;
        }
        .briefly ul li {
            width: 22.65%;
            float: left;
            margin-left: 1.35%;
            background-color: #0bacd3;
            color: #FFF;
            box-sizing: border-box;
            list-style: none;
        }
        .briefly ul li.photo {
            background-color: #ea4c89;
        }
        .briefly ul li.credit {
            background-color: #ffb848;
        }
        .briefly ul li.comments {
            background-color: #00c3b6;
        }
        .briefly ul li .visual {
            float: left;
            font-size: 40px;
            margin: 15px;
            line-height: 1.5;
        }
        .briefly ul li .number {
            float: right;
            margin: 15px;
            font-size: 30px;
            text-align: right;
            line-height: 1.5;
        }
        .briefly ul li .number span {
            display: block;
            font-size: 12px;
            color: rgba(255,255,255,.85);
        }
        .briefly ul li .more {
            clear: both;
        }
        .briefly ul li .more a {
            display: block;
            color: rgba(255,255,255,.85);
            background-color: rgba(0,0,0,.15);
            padding: 5px 15px;
        }
        .summary {
            margin-top: 20px;
            height: auto;
            overflow: hidden;
        }
        .summary .box {
            width: 50%;
            float: left;
            padding-right: 10px;
            box-sizing: border-box;
        }
        .summary .box .title {
            font-size: 14px;
            margin-bottom: 15px;
        }
        .area .fast-navigation {
            margin-top: 20px;
        }
        .area .fast-navigation ul {
            padding: 10px 0;
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
            margin-top: 10px;
            height: auto;
            overflow: hidden;
        }
        .fast-navigation ul li {
            margin-bottom: 0;
            float: left;
            border-right: 1px solid #e5e5e5;
            position: relative;
            list-style: none;
        }
        .fast-navigation ul li a {
            display: inline-block;
            width: 100px;
            padding: 15px 0;
            text-align: center;
            list-style: none;
        }
        .area a {
            color: #00c8c9;
            outline: none;
            cursor: pointer;
            transition: all 0.3s ease-out;
            text-decoration: none;
        }
        .fast-navigation ul li a i {
            display: block;
            font-size: 26px;
            margin-top: 10px;
            text-align: center;
        }

        .prompt{
            marign-top:20px;
            width:100%;
            height:200px;
        }
        .prompt ul{
            padding: 0;
            color:red;
        }
        .prompt ul li{
            margin-top:5px;
        }
    </style>
</head>
<body>
<div class="area">
    <div class="page-wrapper">
        <div class="dashboard-main">
            <div class="dashboard-header">
                <p class="sub-title">用户中心</p>
                <p class="tip">欢迎光临，您最后登录本站为（时间：2018-02-03 16:48:00&nbsp;&nbsp;地点：杭州&nbsp;&nbsp;ip：115.197.176.150）</p>
            </div>
            <div class="dashboard-wrapper select-index">
                <div class="briefly">
                    <ul>
                        <li class="post">
                            <div class="visual"><i class="el el-adjust"></i></div>
                            <div class="number">0<span>我的金币</span></div>
                            <div class="more"><a href="http://www.100txy.com/author/1/?tab=post">查看更多<i class="el el-circle-arrow-right"></i></a></div>
                        </li>
                        <li class="photo">
                            <div class="visual"><i class="el el-credit-card"></i></div>
                            <div class="number">0<span>我的积分</span></div>
                            <div class="more"><a href="http://www.100txy.com/author/1/?tab=collect">查看更多<i class="el el-circle-arrow-right"></i></a></div>
                        </li>
                        <li class="credit">
                            <div class="visual"><i class="el el-shopping-cart"></i></div>
                            <div class="number">0<span>我的消费</span></div>
                            <div class="more"><a href="http://www.100txy.com/author/1/?tab=credit">查看更多<i class="el el-circle-arrow-right"></i></a></div>
                        </li>
                        <li class="comments">
                            <div class="visual"><i class="el el-comment-alt"></i></div>
                            <div class="number">0<span>评论留言</span></div>
                            <div class="more"><a href="http://www.100txy.com/author/1/?tab=comment">查看更多<i class="el el-circle-arrow-right"></i></a></div>
                        </li>
                    </ul>
                </div>
                <div class="summary">
                    <div class="box">
                        <div class="title">我的最近发布</div>
                        <ul>
                            <li><a href="http://www.100txy.com/132.html" target="_blank">干货-给想自学编程又无从下手的小白一些建议</a></li>
                            <li><a href="http://www.100txy.com/64.html" target="_blank">雷小天博客-专注分享全面优质的免费IT视频教程资源</a></li>
                            <li><a href="http://www.100txy.com/40.html" target="_blank">windows快捷工具推荐 让你的操作无与伦比</a></li>
                            <li><a href="http://www.100txy.com/11.html" target="_blank">雷小天博客-专注分享全面优质的免费IT视频教程资源</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <div class="title">我的最近评论</div>
                        <ul>
                            <li>暂无未发布任何评论。</li>
                        </ul>
                    </div>
                </div>
                <div class="fast-navigation">
                    <div class="nav-title">快捷菜单</div>
                    <ul>
                        <li><a target="_blank" href="javascript:void(0)"><i class="el el-music"></i>娱乐频道</a></li>
                        <li><a target="_blank" href="javascript:void(0)"><i class="el el-shopping-cart"></i>积分商城</a></li>
                        <li><a target="_blank" href="javascript:void(0)"><i class="el el-group"></i>升级会员</a></li>
                        <li><a target="_blank" href="javascript:void(0)"><i class="el el-plane"></i>智能科技</a></li>
                    </ul>
                </div>
                <div class="prompt">
                    <div class="nav-title">温馨提示</div>
                    <ul>
                        <li><span>1.本站金币：获得方式有两种，一种充值方式1元=1金币，另外一种是通过积分兑换10积分=1金币，金币可用于本站部分收费资源的下载；</span></li>
                        <li><span>2.本站积分：积分可通过在线签到方式获得，连续签到3天后（第四天）每天签到一次获得1积分，中途未连续签到将清零签到的天数，需重新再来。积分可以兑换成金币，也可在积分商城（暂未开通）中消费；</span></li>
                        <li><span>3.消费积分：消费积分是用户在本站通过金币消费后产生的，同时也是体现用户对本站支持的力度指数。1金币=10消费积分=10积分，消费积分越高的用户，可以获得更优惠的项目资源、更实在技术支持；</span></li>
                        <li><span>4.积分兑换：个人资料中的积分兑换功能是把现有的积分兑换成金币，且兑换时必须以10的倍数兑换；</span></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>