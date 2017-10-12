<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"/www/wwwroot/blog/public/../application/index/view/cate/cate.html";i:1507753100;s:69:"/www/wwwroot/blog/public/../application/index/view/common/header.html";i:1507809656;s:68:"/www/wwwroot/blog/public/../application/index/view/common/right.html";i:1507722252;s:67:"/www/wwwroot/blog/public/../application/index/view/common/foot.html";i:1507764332;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
    <title>EG-Blog管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="EG-Blog管理系统"/>
    <meta name="description" content="EG-Blog管理系统"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>
    <link href="__PUBLIC__/style/lady.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
    <script type='text/javascript' src='images/js/ismobile.js'></script>
</head>

<body>
<!--引入头部-->
<!--头部分离-->
<div class="ladytop">
    <div class="nav">
        <div class="left"><a href="<?php echo url('index/index'); ?>"><img src="__PUBLIC__/images/logo.png" ></a></div>
        <div class="right">
            <div class="box">
                <a href="<?php echo url('index/index'); ?>"  rel='dropmenu209'>首页</a>
                <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <a href="<?php echo url('cate/index', array('cateid'=>$vo['id'])); ?>"  rel='dropmenu209'><?php echo $vo['catename']; ?></a>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="hotmenu">
    <div class="con">热门标签：<?php if(is_array($tagres) || $tagres instanceof \think\Collection || $tagres instanceof \think\Paginator): $i = 0; $__LIST__ = $tagres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href='/index.php/index/search/index?keywords=<?php echo $vo['tagname']; ?>'><?php echo $vo['tagname']; ?></a><?php endforeach; endif; else: echo "" ;endif; ?></div>
</div>
<!--顶部通栏-->
<div class="position"><a href='<?php echo url(' index/index'); ?>'>主页</a> > <a href="<?php echo url('cate/index', array('cateid'=>$cates['id'])); ?>"><?php echo $cates['catename']; ?></a> ></div>

<div class="overall">

    <div class="left">
        <?php if(is_array($articleres) || $articleres instanceof \think\Collection || $articleres instanceof \think\Paginator): $i = 0; $__LIST__ = $articleres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="xnews2">
            <div class="pic">
                <a target="_blank" href="<?php echo url('article/index', array('arid'=>$vo['id'])); ?>"><img src="<?php if($vo['pic'] != ''): ?>__IMG__<?php echo $vo['pic']; else: ?>__PUBLIC__/images/error.png<?php endif; ?>" alt=""/></a></div>
            <div class="dec">
                <h3><a target="_blank" href="<?php echo url('article/index', array('arid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a></h3>
                <div class="time">发布时间:<?php echo date("Y-m-d",$vo['time']); ?></div>
                <p>
                    <?php echo $vo['desc']; ?>
                </p>
                <div class="time">
                    <?php
                        $arr = explode(',', $vo['keywords']);
                        foreach ($arr as $k=>$v) {
                            echo "<a href='/index.php/index/search/index?keywords=$v'>$v</a>";
                        }
                    ?>
                </div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>

        <div class="pages">
            <div class="plist">
                <?php echo $articleres->render(); ?>
            </div>
        </div>
    </div>

    <!--引入右侧-->
    <div class="right">
    <!--右侧各种广告-->
    <!--猜你喜欢-->
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div class="hm-t-container" style="width: 298px;">
                <div class="hm-t-main">
                    <div class="hm-t-header">热门点击</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">
                            <?php if(is_array($clickres) || $clickres instanceof \think\Collection || $clickres instanceof \think\Paginator): $i = 0; $__LIST__ = $clickres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img"><a data-pos="0" title="<?php echo $vo['title']; ?>" target="_blank"
                                                                   href="<?php echo url('article/index', array('arid'=>$vo['id'])); ?>"
                                                                   class="hm-t-img-title"
                                                                   style="visibility: visible;"><span><?php echo $vo['title']; ?></span></a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>
    <div id="hm_t_57953">
        <div style="display: block; margin: 0px; padding: 0px; float: none; clear: none; overflow: hidden; position: relative; border: 0px none; background: transparent none repeat scroll 0% 0%; max-width: none; max-height: none; border-radius: 0px; box-shadow: none; transition: none 0s ease 0s ; text-align: left; box-sizing: content-box; width: 300px;">
            <div style="width: 298px;" class="hm-t-container">
                <div class="hm-t-main">
                    <div class="hm-t-header">推荐阅读</div>
                    <div class="hm-t-body">
                        <ul class="hm-t-list hm-t-list-img">
                            <?php if(is_array($tjres) || $tjres instanceof \think\Collection || $tjres instanceof \think\Paginator): $i = 0; $__LIST__ = $tjres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                            <li class="hm-t-item hm-t-item-img"><a style="visibility: visible;" class="hm-t-img-title"
                                                                   href="<?php echo url('article/index', array('arid'=>$vo['id'])); ?>"
                                                                   target="_blank" title="<?php echo $vo['title']; ?>"
                                                                   data-pos="0"><span><?php echo $vo['title']; ?></span></a></li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div style="height:15px"></div>

    <div id="bdcs">
        <div class="bdcs-container">
            <meta content="IE=9" http-equiv="x-ua-compatible">   <!-- 嵌入式 -->
            <div id="default-searchbox" class="bdcs-main bdcs-clearfix">
                <div id="bdcs-search-inline" class="bdcs-search bdcs-clearfix">
                    <form id="bdcs-search-form" autocomplete="off" class="bdcs-search-form" target="_blank" method="get"
                          action="<?php echo url('Search/index'); ?>">
                        <input type="text" placeholder="请输入关键词" id="bdcs-search-form-input" class="bdcs-search-form-input" name="keywords" autocomplete="off" style="line-height: 30px; width:220px;">
                        <input type="submit" value="搜索" id="bdcs-search-form-submit" class="bdcs-search-form-submit bdcs-search-form-submit-magnifier">
                    </form>
                </div>
                <div id="bdcs-search-sug" class="bdcs-search-sug" style="top: 552px; width: 239px;">
                    <ul id="bdcs-search-sug-list" class="bdcs-search-sug-list"></ul>
                </div>
            </div>
        </div>
    </div>

    <div style="height:15px"></div>


</div>

</div>
<!--引入尾部-->
<!--底部分离-->
<div class="footerd">
    <ul>
        <li>Copyright &#169; 2017-<?php echo date('Y');?> all rights reserved 版权所有<a href="https://github.com/phoenixhu/blog" target="_blank" rel="nofollow">开源地址</a></li>
    </ul>
</div>
</body>
</html>