<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>后台管理 | 范松伟</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="/thinkphpwechat/Public/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="/thinkphpwechat/Public/css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="/thinkphpwechat/Public/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="/thinkphpwechat/Public/css/font.css" type="text/css"/>
    <link rel="stylesheet" href="/thinkphpwechat/Public/js/calendar/bootstrap_calendar.css" type="text/css"/>
    <link rel="stylesheet" href="/thinkphpwechat/Public/js/jvectormap/jquery-jvectormap-1.2.2.css" type="text/css"/>
    <link rel="stylesheet" href="/thinkphpwechat/Public/css/app.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="/js/ie/html5shiv.js"></script>
    <script src="/js/ie/respond.min.js"></script>
    <script src="/js/ie/excanvas.js"></script>
    <![endif]-->
    <script>
        //配置后台地址
        var hdjs = {
            'base': '/thinkphpwechat/node_modules/hdjs',
            'ueditor': '',
            'uploader': '/admin/Component/uploader',
            'filesLists': '/admin/Component/filesLists',
            'removeImage': '删除图片后台地址'
        };
    </script>
    <!--<script src="/node_modules/hdjs/app/util.js"></script>-->
    <script src="/thinkphpwechat/node_modules/hdjs/require.js"></script>
    <script src="/thinkphpwechat/node_modules/hdjs/config.js"></script>
</head>

<style>
    .ng-cloak {
        display: none;
    }
</style>

<body ng-cloak class="ng-cloak" ng-controller="ctrl">
<section class="vbox">
    <header class="bg-black dk header navbar navbar-fixed-top-xs">
        <div class="navbar-header aside-md">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="/thinkphpwechat/Public/images/logo.png"
                                                                           class="m-r-sm"><?php echo c('system.name');?></a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                <i class="fa fa-cog"></i>
            </a>
        </div>
        <ul class="nav navbar-nav hidden-xs">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                    <i class="fa fa-wordpress"></i>
                    <span class="font-bold"> 文章管理</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                    <i class="fa fa-paper-plane"></i>
                    <span class="font-bold"> 文章管理</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
                    <i class="fa fa-building-o"></i>
                    <span class="font-bold"> 配置管理</span>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
            <li class="hidden-xs">
                <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
                </a>
                <section class="dropdown-menu aside-xl">
                    <section class="panel bg-white">
                        <header class="panel-heading b-light bg-light">
                            <strong>You have <span class="count">2</span> notifications</strong>
                        </header>
                        <div class="list-group list-group-alt animated fadeInRight">
                            <a href="#" class="media list-group-item">
                  <span class="pull-left thumb-sm">
                    <img src="/thinkphpwechat/Public/images/avatar.jpg" alt="John said" class="img-circle">
                  </span>
                                <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                            </a>
                            <a href="#" class="media list-group-item">
                  <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                            </a>
                        </div>
                        <footer class="panel-footer text-sm">
                            <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                            <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
                        </footer>
                    </section>
                </section>
            </li>
            <li class="dropdown hidden-xs">
                <a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
                <section class="dropdown-menu aside-xl animated fadeInUp">
                    <section class="panel bg-white">
                        <form role="search">
                            <div class="form-group wrapper m-b-none">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
                    </span>
                                </div>
                            </div>
                        </form>
                    </section>
                </section>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="/thinkphpwechat/Public/images/avatar.jpg">
            </span>
                    范松伟 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <span class="arrow top"></span>
                    <li>
                        <a href="#">我的资料</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="modal.lockme.html" data-toggle="ajaxModal">退出</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-light lter b-r aside-md hidden-print hidden-xs" id="nav">
                <section class="vbox">
                    <header class="header bg-primary lter text-center clearfix">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i
                                    class="fa fa-plus"></i></button>
                            <div class="btn-group hidden-nav-xs">
                                <button type="button" class="btn btn-sm btn-primary dropdown-toggle"
                                        data-toggle="dropdown">
                                    快捷导航
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu text-left">
                                    <li><a href="#">网站配置</a></li>
                                    <li><a href="#">公众号设置</a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                             data-size="5px" data-color="#333333">

                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="index.html" class="active">
                                            <i class="fa fa-dashboard icon">
                                                <b class="bg-danger"></b>
                                            </i>
                                            <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                                            <span>基本设置</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li>
                                                <a href="<?php echo U('Admin/config/set');?>">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>网站配置</span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="<?php echo U('Admin/Wechat/set');?>" class="active">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>公众号配置</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li>
                                        <a href="#uikit">
                                            <i class="fa fa-flask icon">
                                                <b class="bg-success"></b>
                                            </i>
                                            <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                                            <span>模块</span>
                                        </a>
                                        <ul class="nav lt">
                                            <li>
                                                <a href="<?php echo u('module/manage/lists');?>">
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>模块管理</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo u('module/manage/design');?>">
                                                    <b class="badge bg-info pull-right">369</b>
                                                    <i class="fa fa-angle-right"></i>
                                                    <span>设计模块</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <?php if(is_array($_modules)): $i = 0; $__LIST__ = $_modules;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><li>
                                            <a href="#uikit">
                                                <i class="fa fa-flask icon">
                                                    <b class="bg-success"></b>
                                                </i>
                                                <span class="pull-right">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                             </span>
                                                <span><?php echo ($m['title']); ?></span>
                                            </a>
                                            <ul class="nav lt">
                                                <?php if(is_array($m["actions"])): $i = 0; $__LIST__ = $m["actions"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><li>
                                                        <a href="<?php echo site_url($m['name'].'.'.$d['name']);?>">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span><?php echo ($d['title']); ?></span>
                                                        </a>
                                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                                <?php if($m['message'] == 1): ?><li>
                                                        <a href="<?php echo U('Module/Keyword/lists',['mo'=>$m['name']]);?>">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span>关键词</span>
                                                        </a>
                                                    </li><?php endif; ?>

                                            </ul>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>

                    <footer class="footer lt hidden-xs b-t b-light">
                        <div id="chat" class="dropup">
                            <section class="dropdown-menu on aside-md m-l-n">
                                <section class="panel bg-white">
                                    <header class="panel-heading b-b b-light">Active chats</header>
                                    <div class="panel-body animated fadeInRight">
                                        <p class="text-sm">No active chats.</p>
                                        <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                                    </div>
                                </section>
                            </section>
                        </div>
                        <div id="invite" class="dropup">
                            <section class="dropdown-menu on aside-md m-l-n">
                                <section class="panel bg-white">
                                    <header class="panel-heading b-b b-light">
                                        John <i class="fa fa-circle text-success"></i>
                                    </header>
                                    <div class="panel-body animated fadeInRight">
                                        <p class="text-sm">No contacts in your lists.</p>
                                        <p><a href="#" class="btn btn-sm btn-facebook"><i
                                                class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                                    </div>
                                </section>
                            </section>
                        </div>
                        <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-light btn-icon">
                            <i class="fa fa-angle-left text"></i>
                            <i class="fa fa-angle-right text-active"></i>
                        </a>
                        <div class="btn-group hidden-nav-xs">
                            <i class="fa fa-user-md"></i> 客服: <?php echo c("system.tel");?>
                            <!--<button type="button" title="Chats" class="btn btn-icon btn-sm btn-light" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>-->
                            <!--<button type="button" title="Contacts" class="btn btn-icon btn-sm btn-light" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>-->
                        </div>
                    </footer>
                </section>
            </aside>
            <!-- /.aside -->

            <section id="content">
                <section class="vbox">
                    <section class="scrollable padder">
                        
            <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">UI kit</a></li>
                <li><a href="#">Form</a></li>
                <li class="active">Elements</li>
            </ul>
            <div class="m-b-md">
                <h3 class="m-b-none">Elements</h3>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel panel-default">
                        <header class="panel-heading font-bold">Basic form</header>
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out </label>
                                </div>
                                <button type="submit" class="btn btn-sm btn-default">Submit</button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

<script>
    function controller($scope,$,_) {

    }
</script>

                    </section>
                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open"
                   data-target="#nav,html"></a>
            </section>
        </section>
    </section>
</section>
<script>
    require(['util', 'underscore'], function ($, _) {
        require(['/thinkphpwechat/Public/js/app.js', 'css!/thinkphpwechat/Public/css/app.css']);

        require(['angular', 'jquery'], function (angular,$) {
            angular.module('app', []).controller('ctrl', ['$scope', function ($scope) {
                if (angular.isFunction(controller)) {
                    controller($scope, $, _);
                }
            }]);
            angular.bootstrap(document.getElementsByTagName('body'), ['app']);
        });
    });
</script>
<!--<script src="/thinkphpwechat/Public/js/bootstrap.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/app.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/slimscroll/jquery.slimscroll.min.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/charts/sparkline/jquery.sparkline.min.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/charts/flot/jquery.flot.min.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/charts/flot/jquery.flot.tooltip.min.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/charts/flot/jquery.flot.resize.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/charts/flot/jquery.flot.grow.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/charts/flot/demo.js"></script>-->

<!--<script src="/thinkphpwechat/Public/js/calendar/bootstrap_calendar.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/calendar/demo.js"></script>-->

<!--<script src="/thinkphpwechat/Public/js/sortable/jquery.sortable.js"></script>-->

<!--<script src="/thinkphpwechat/Public/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/jvectormap/demo.js"></script>-->
<!--<script src="/thinkphpwechat/Public/js/app.plugin.js"></script>-->
</body>
</html>