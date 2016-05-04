<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />

        <?php include template("content","header_inclub"); ?>
        <link href="<?php echo CSS_PATH;?>new/law.css" rel="stylesheet" type="text/css"/>
        <style type="text/css">
            .page
            {
                float: left;
            }
            .pagenum
            {
                float: right;
                margin-right: 10px;
            }
        </style>

    </head>
    <body>
        <?php include template("content","header"); ?>
    </div>

    <div class="mid">
        <div class="ui_layout_right list_width" >
            <div class="site">
                <div class="site_img"> </div>
                <div class="site_write">
                    您的位置：<a target="_blank" href="<?php echo $CATEGORYS['4']['url'];?>">政策首页</a> >> <?php echo catpos($catid);?>
               </div>
                <div class="clear"></div>
            </div>
            <div class="ui_list_zcfg">
                
                <?php
                if($title && !$keywords) { $where = " title LIKE '%$title%'";}
                if(!$title && $keywords) { $where = " keywords LIKE '%$keywords%'";}
                
                if ($fileName){$where = " ($fileName = $fileName)";}   
                
                if($title && $keywords) { $where = " title LIKE '%$title%' AND keywords LIKE '%$keywords%'";}
                ?>
                
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6b961feba6451b581f619b21c14c3735&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page&where=%24where\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                <ul class="LIST_cont_law">
                  <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                        <a target="_blank" href="<?php echo $r['url'];?>" target="_blank">
                            <img src="<?php echo IMG_PATH;?>new1/icon_1_07.gif" /><?php echo $r['title'];?>
                        </a>
                    </li> 
                  <?php $n++;}unset($n); ?>
                </ul>
                <div class="link_more">
                    <?php echo $pages;?>
                </div>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <!--以上是列表-->
        <div class="ui_layout_left">
            <div class="ui_lay_zccx">
                <div class="ui_zccx_nav">
                </div>
                
               <form action="#" method="post" id="searchForm">
                <div class="ui_lay_cont">
                    <div class="ui_check">
                        <label>
                            <input value="21" name="classify" type="radio" id="ctl00_ContentPlaceHolder1_rdozcfg" class="rdozcfg" checked="checked" />政策法规</label>
                        <label>
                            <input value="22" name="classify" type="radio" id="ctl00_ContentPlaceHolder1_rdofczc" class="rdofczc" />扶持政策</label>
                    </div>
                    
                    <div class="formcont">
                            <div>
                                <label for="title">
                                    标题：</label><input name="title" type="text" id="" class="zcbt" value="<?php echo $title;?>" /></div>
                            <div>  
                                <label for="title">
                                    文号：</label><input name="fileName" type="text" id="" class="zcwh" /></div>
                            <div>
                                <label for="title">
                                    关键字：</label><input name="keywords" type="text" id="" class="gjz" value="<?php echo $keywords;?>"/></div>
                            <div class="btn">
                               <input type="submit" class="btnzccx_1" value="" onclick="beforeSubmit();"/></div>       
                    </div>
                </div>
              </form>
                  <script>
                        function beforeSubmit(){
                            var catid=$("input[name='classify']:checked").val();
                            var url="./index.php?m=content&c=index&a=lists&catid="+catid;
                            $("#searchForm").attr("action",url);
                        }
                      </script>
                
            </div>
            <!--以上是政策查询-->
            <div class="ui_but">
                <a href="#" target="_blank">
                    <img src="<?php echo IMG_PATH;?>new/Policy_zcfg_10.gif" alt="政策法规" />
                </a>
            </div>
            <div class="ui_but">
                <a href="#" target="_blank">
                    <img src="<?php echo IMG_PATH;?>new/Policy_fczc_12.gif" alt="扶持政策" />
                </a>
            </div>
            <!--以上是图片链接-->
            <div class="ui_import">
                <div class="ui_import_nav">
                    重要政策法规推荐
                </div>
                <div class="ui_import_cont">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d92e9a197075d3d833a1208ad27cf86f&action=position&posid=18&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder DESC','limit'=>'7',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
                        <li>
                            <img src="<?php echo IMG_PATH;?>new/icon_13.gif" />
                            <a  href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],54,'……');?></a>
                        </li>
                        <?php $n++;}unset($n); ?>  
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
            <div class="ui_import ui_import_ie7">
                <div class="ui_import_nav">
                    重要扶持政策推荐</div>
                <div class="ui_import_cont">
                    <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c7aede6d37643b22b57e44cdac44538&action=position&posid=19&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'7',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                        <li>
                            <img src="<?php echo IMG_PATH;?>new/icon_13.gif" />
                            <a  href="ZCFGDetail.aspx?ZCLX=2&PKID=649" target="_blank">成都市商务委员会关于组织开展2...</a>
                        </li>
                        <?php $n++;}unset($n); ?>  
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
            </div>
            <style>
                .ui_import_nav{text-indent: 70px;}
            </style>
        </div>
        <div class="clear"></div>
    </div>
    <script type="text/javascript">
        //先判断是否登录 再进行跳转报名
        $(".zxxxbm").click(function () {
            if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
                var Button = $(this).attr("id");
                var yhid = $(".dlyhid").attr("id");
                window.top.createDIV(window, "/Themes/cdweb/htm/Login.aspx?Controls=" + yhid + "&Button=" + Button, "用户登录", 450, 265, window, "", "", true);
                return false;
            } else {
                window.top.createDIV(window, '/ZJSB/ZJBM.aspx?ZCID=" + $(this).attr("zxxxbmid") + "&YHID=" + $(".dlyhid").val()', "资金项目申请", 700, 405);
            }
            return false;
        });
    </script>

    <?php include template("content","footer"); ?>
</body>
</html>
