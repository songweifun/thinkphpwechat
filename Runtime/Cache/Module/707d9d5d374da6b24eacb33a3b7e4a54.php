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
    <li><a href="#">基本设置</a></li>
    <li><a href="#">菜单管理</a></li>
</ul>
<div class="m-b-md">
    <h3 class="m-b-none">菜单管理</h3>
</div>
<div class="row">
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading font-bold">数据设置</header>
            <div class="panel-body">
                <style>
                    .mobile {
                        border  : solid 1px #999999;
                        height  : 500px;
                        display : flex;
                    }

                    .mobile dl {
                        margin         : 0px;
                        padding        : 0px;
                        display        : flex;
                        flex           : 1;
                        flex-direction : column-reverse;
                    }

                    .mobile dl dt {
                        background  : #999999;
                        color       : #ffffff;
                        height      : 30px;
                        text-align  : center;
                        border      : solid 1px #f3f3f3;
                        cursor      : pointer;
                        line-height : 2em;
                    }

                    .mobile dl dd {
                        display        : flex;
                        flex-direction : column;
                    }

                    .mobile dl dd a {
                        border          : solid 1px #f3f3f3;
                        text-align      : center;
                        padding         : 6px;
                        text-decoration : none;
                    }

                    .top-menu, .sub-menu {
                        position : relative;
                    }

                    .top-menu .top-fa, .sub-menu .sub-fa {
                        position : absolute;
                        right    : -10px;
                        top      : -10px;
                        color    : #999999;
                        cursor   : pointer;
                        display  : none;
                    }

                    .top-menu:hover .top-fa, .sub-menu:hover .sub-fa {
                        display : block;
                    }
                </style>
                <div>
                    <form action="" method="post" class="form-horizontal" role="form">

                        <div class="container">
                            <div class="row">
                                <div class="col-xs-4" class="app">
                                    <div class="mobile">
                                        <dl ng-repeat="v in data.button">
                                            <dt ng-bind="v.name"></dt>
                                            <dd>
                                                <a href="" ng-repeat="d in v.sub_button" ng-bind="d.name"></a>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">编辑</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label">菜单名称</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="title" class="form-control" value="<?php echo ($field['title']); ?>">
                                                </div>
                                            </div>
                                            <!--一级菜单开始-->
                                            <div class="panel panel-default top-menu" ng-repeat="v in data.button">
                                                <i class="fa fa-times-circle top-fa fa-lg" ng-click="removeTopMenu(v)"></i>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">标题</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" ng-model="v.name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" ng-hide="v.sub_button">
                                                        <label class="col-sm-2 control-label">类型</label>
                                                        <div class="col-sm-10">
                                                            <label class="radio-inline">
                                                                <input type="radio" ng-model="v.type" value="click"> 关键词
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" ng-model="v.type" value="view"> 网址
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" ng-if="v.type=='click' && !v.sub_button">
                                                        <label class="col-sm-2 control-label">关键词</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" ng-model="v.key">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" ng-if="v.type=='view' && !v.sub_button">
                                                        <label class="col-sm-2 control-label">链接</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" ng-model="v.url">
                                                        </div>
                                                    </div>
                                                    <!--二级菜单-->
                                                    <div class="panel panel-default sub-menu" ng-repeat="d in v.sub_button">
                                                        <i class="fa fa-times-circle sub-fa fa-lg" ng-click="removeSubMenu(v,d)"></i>
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label">标题</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" ng-model="d.name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-2 control-label">类型</label>
                                                                <div class="col-sm-10">
                                                                    <label class="radio-inline">
                                                                        <input type="radio" ng-model="d.type" value="click"> 关键词
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                        <input type="radio" ng-model="d.type" value="view"> 网址
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group" ng-if="d.type=='click'">
                                                                <label class="col-sm-2 control-label">关键词</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" ng-model="d.key">
                                                                </div>
                                                            </div>
                                                            <div class="form-group" ng-if="d.type=='view'">
                                                                <label class="col-sm-2 control-label">链接</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" ng-model="d.url">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--二级菜单 end-->
                                                    <button type="button" class="btn btn-info" ng-click="addSubButton(v)">添加菜单</button>
                                                </div>
                                            </div>
                                            <!--一级菜单结束-->
                                            <button type="button" class="btn btn-success" ng-click="addTopButton()">添加一级菜单</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="data" value="{{data}}" >
                            <button class="btn btn-primary form-control">保存</button>
                        </div>

                    </form>
                </div>
                <script>
                    function controller($scope, $, _) {
                        $scope.data = <?php echo $field['data'];?>;

                        //删除一级菜单
                        $scope.removeTopMenu = function (item) {
                            $scope.data.button = _.without($scope.data.button, item);
                        }
                        //删除二级菜单
                        $scope.removeSubMenu = function (topMenu, subMenu) {
                            topMenu.sub_button = _.without(topMenu.sub_button, subMenu);
                        }
                        //添加一级菜单
                        $scope.addTopButton = function () {
                            var menu = {
                                "type": "view",
                                "name": "",
                                "key": ""
                            };
                            if ($scope.data.button.length == 3) {
                                alert('一级菜单最多为三个');
                            } else {
                                $scope.data.button.push(menu);
                            }
                        }
                        //添加二级菜单   houdunren.com
                        $scope.addSubButton = function (item) {
                            var menu = {
                                "type": "view",
                                "name": "",
                                "key": ""
                            };
                            if (!item.sub_button) {
                                item.sub_button = [];
                            }
                            if (item.sub_button.length == 5) {
                                alert('二级菜单最多为五个');
                            } else {
                                item.sub_button.push(menu);
                            }
                        }
                    };
                </script>
            </div>
        </section>
    </div>
</div>












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