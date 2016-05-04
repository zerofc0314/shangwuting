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
    </head>
    <body>
         <?php include template("content","header"); ?>
          </div>
          <div class="mid" style="min-height:555px;margin:0 auto;">
             <div class="ui_layout_right list_width">
                 <div class="site">
                     <div class="site_img"></div>
                     <div class="site_write">
                         您的位置：<a href="<?php echo siteurl($siteid);?>">频道首页</a> >
                            <?php echo catpos($catid);?>
                     </div>
                     <input name="" type="text" id="" style="display: none;" class="dlyhid" value="-1" />
                     <div class="clear"></div>
                 </div>
                 
                 <div class="ui_list_zcfg">
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=83e86dbe8e634be99f241427bdc4f45f&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                     <ul class="LIST_cont_law">
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                         <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                             <a href="<?php echo $r['url'];?>" target="_blank" <?php echo title_style($r[style]);?>><img src="<?php echo IMG_PATH;?>new1/icon_1_07.gif" /><?php echo $r['title'];?></a>
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
                     <div class="ui_zccx_nav"></div>
                     <div class="ui_lay_cont">
                         <div class="ui_check"></div>
                        <form method="get" action="./index.php?m=search&c=index&a=init&siteid=1&typeid=1">
                        <input type="hidden" name="m" value="search"/>
                        <input type="hidden" name="c" value="index"/>
                        <input type="hidden" name="a" value="init"/>
                        <input type="hidden" name="typeid" value="1" id="typeid"/>
                        <input type="hidden" name="siteid" value="1" id="siteid"/>
                         <div class="formcont sr_frm_box">
                             <div class="sr_frmipt">
                                 <label for="q">
                                     标题：</label><input type="text" class="gjz ipt" name="q" id="q" /> </div>
                             <div class="sr_frmipt">
                                 <label for="q">
                                     关键字：</label><input name="keywords" type="text" id="q" class="gjz ipt" /></div>
                                     
                             <div class="btn">
                                 <input type="submit" class="ss_btn btnzccx_2" value=""/></div>
                         </div>
                        </form>
                     </div>
                 </div>
                 <!--以上是政策查询-->
             </div>
             <div class="clear"></div>
         </div>

         <?php include template("content","footer"); ?>
    </body>
</html>
