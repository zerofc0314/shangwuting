<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <?php include template("content","header1_inclub"); ?>
        <link href="<?php echo CSS_PATH;?>new/jquery-ui.css" type="text/css" rel="stylesheet" />
        <script src="<?php echo JS_PATH;?>new/jquery-ui.min.js" type="text/javascript"></script>
        <style>
            .cont_2{margin-bottom: 30px;}    //这是自己添加的测试样式
            .maincont{border:red 1px solid;}
            .ZH_area_cont ul {
                margin: 5px 0px;
            }
        </style>
    </head>
    <body>
        <?php include template("content","header1"); ?>
         <div class="maincont">
       <div class="kong"></div>
         <div class="cont_1">
           <div class="LEFT_cont_1">
             <div class="kong"></div>
             <p class="ZH_zj" style="text-align:center">2014年平台共指导67家企业 完成补贴申报</p>
            
             <div class="ZH_zj_list">
               <ul>
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7245062c4100a1b55d340bfdffc20c17&action=lists&catid=92&order=updatetime+DESC&num=6&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'92','order'=>'updatetime DESC','limit'=>'6',));}?>
                 <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                 <li><?php echo str_cut($v['title'],100);?></li>
                 <?php $n++;}unset($n); ?>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                 
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=df00b28961789d7ce212a28f037573ff&action=lists&catid=93&order=updatetime+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'93','order'=>'updatetime DESC','limit'=>'1',));}?>
                 <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                 <li><a href="<?php echo $v['url'];?>">>>更多<a></li>
                 <?php $n++;}unset($n); ?>
                 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                 
               </ul>
             </div>
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=85f9615de7755a6bbd2803a7f1d8a08b&action=lists&catid=87&order=updatetime+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'87','order'=>'updatetime DESC','limit'=>'1',));}?>
            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
             <div class="ZH_but"><a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],225,30);?>" /></a></div>
              <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
             
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8ae6939bf593ed752f185278ed36e990&action=lists&catid=88&order=updatetime+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'88','order'=>'updatetime DESC','limit'=>'1',));}?>
            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
             <div class="ZH_but"><a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],225,30);?>" /></a></div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            
           </div>
           <div class="MID_cont_1">
             <div class="MID_ZH_nav">
               <div class="MID_current">最新展会</div>
             </div>
             <div class="MID_ZH_ul">
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c267a2bd6c726366dbdaeadaff33647&action=lists&catid=94&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'94','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                  <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo thumb($v[thumb],280,120);?>" /></a>
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                  
               <ul>
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=15cf7fd64ed4d4c5a76da34824a6418d&action=lists&catid=94&order=updatetime+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'94','order'=>'updatetime DESC','limit'=>'4',));}?>
                 <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                 <li><span><?php echo date('Y-m-d',$v[inputtime]);?></span><a target="_blank" href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],76);?></a></li>
                  <?php $n++;}unset($n); ?>
                  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </ul>
               <div class="MID_more"><a href="<?php echo $CATEGORYS['52']['url'];?>">更多>></a></div>
               <div class="clear"></div>
             </div>  
           </div>
           <div class="RIGHT_cont_1">
             <div class="RIGHT_ct1_nav">
               <div class="RIGHT_current zhzx RIGHT_check" contentid="zhzx1"><a href="<?php echo $CATEGORYS['91']['url'];?>">展会资讯</a></div>
               <div class="RIGHT_current zhzx zhzs" contentid="zhzs1"><a href="<?php echo $CATEGORYS['54']['url'];?>">展会知识</a></div>
             </div>
             <script type="text/javascript" language="javascript">
                 //控制点击更换下面列表
                 $(".zhzx").click(function () {
                     var zhzx = this;
                     $(".zhzx").each(function () {
                         if (this == zhzx) {
                             if ($(this).hasClass("zhzs")) {
                                 $(this).removeClass("zhzs");
                                 $(this).addClass("RIGHT_check");
                             }
                         } else {
                             if ($(this).hasClass("RIGHT_check")) {
                                 $(this).removeClass("RIGHT_check");
                                 $(this).addClass("zhzs");
                             }
                         }
                     });
                     $(".RIGHT_ZH_ul").hide();
                     $("#" + $(zhzx).attr("contentid")).show();
                     return false;
                 });
               </script>
             <div class="RIGHT_ZH_ul" id="zhzx1">
               <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5a8afe38fb34f2e4b2801862d3f5d86d&action=hits&catid=91&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'91','order'=>'monthviews DESC',)).'5a8afe38fb34f2e4b2801862d3f5d86d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'91','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                 <li><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" /><a  target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],52);?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                 
               </ul>
               <div class="MID_more"><a href="<?php echo $CATEGORYS['91']['url'];?>">更多>></a></div>
               <div class="clear"></div>
             </div>
               
             <div class="RIGHT_ZH_ul" style=" display:none" id="zhzs1">
                <ul>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=449b7743f70ea753f2c7050d51cf8194&action=hits&catid=54&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'54','order'=>'monthviews DESC',)).'449b7743f70ea753f2c7050d51cf8194');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'54','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
              
               
                 <li><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" /><a  target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 60, '……');?></a></li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </ul>
               <div class="MID_more"><a href="<?php echo $CATEGORYS['54']['url'];?>">更多>></a></div>
               <div class="clear"></div> 
             </div>
           </div>  
           <div class="clear"></div>
         </div>
       
         <div class="cont_2">
           <div class="LEFT_ct2">
               
           <form action="./index.php?m=content&c=index&a=lists&catid=52" method="post" >
             <div class="ZH_cx">
           <div class="JZ_polling">
                 <label>展会名称:</label><input name="title" type="text" class="zhname" onblur="need(event);"/>
            </div>
                 <div class="JZ_polling">
                   <label>展会行业:</label> <div style="width:150px;float:right;margin-right:270px;margin-top:6px;*margin-top:-24px;"><?php echo menu_linkage(3390,'L_3390');?></div>
                   <input type="hidden" value="" id="hide_area_id" name="hide_area_id" />  
               </div>
               <div class="MH_polling">
                 <label>展会地区:</label>
                   <div class="polling_2">
                    <input type="radio" value="1" name="item" checked='true'/>中国境内
                    <input type="radio" value="2" name="item" />亚洲其他
                    <input type="radio" value="3" name="item" />非洲
                    <input type="radio" value="4" name="item" />欧洲
                    <input type="radio" value="5" name="item" />美洲
                    <input type="radio" value="6" name="item" />大洋洲
                   </div> 
                   <div class="clear"></div>
               </div>
               <div class="MH_polling">
                 <label>展会时间:</label>从
                 <input name="start_time" type="text" style=" width:88px" class="datapiker" id="datepicker" />到
                 <input name="end_time" type="text" style=" width:88px" class="datapiker"/>
               </div>
               <div class="polling_but">
                   <input type="submit" value="" style="width:75px;height:27px;background:url(./statics/images/new/ct2_but_18.gif) 0 0 no-repeat;" onclick="beforeSearch();">
                </div>
             </div>
           </form>
               
            <script>
                 function beforeSearch(){
                    var catid=$("#L_3390 input").val();
                     $("#hide_area_id").val(catid);
                     
                     var radio_val=$("input[name='item']:checked").val();
                     
                     var start_time=$("input[name='start_time']").val();
                     var end_time=$("input[name='end_time']").val();
                 }
            </script>
               
             <div class="ZH_area">
               <div class="ZH_area_nav">
                 <div class="nav1 jnzhq MID_current" contentid="jnzh1"><a target="_blank" href="<?php echo $CATEGORYS['94']['url'];?>">境内展会</a></div>
                  <div class="nav1 jnzhq jwzhcunt"  contentid="jwzh1"><a  target="_blank" href="<?php echo $CATEGORYS['95']['url'];?>">境外展会</a></div>
                 <div class="clear"></div>
                 <script type="text/javascript" language="javascript">
                     //控制点击更换下面列表
                     $(".jnzhq").click(function () {
                         var jnzhq = this;
                         $(".jnzhq").each(function () {
                             if (this == jnzhq) {
                                 if ($(this).hasClass("jwzhcunt")) {
                                     $(this).removeClass("jwzhcunt");
                                     $(this).addClass("MID_current");
                                 }
                             } else {
                                 if ($(this).hasClass("MID_current")) {
                                     $(this).removeClass("MID_current");
                                     $(this).addClass("jwzhcunt");
                                 }
                             }
                         });
                         $(".ZH_area_cont").hide();
                         $("#" + $(jnzhq).attr("contentid")).show();
                         return false;
                     });
                     
                      $(".datapiker").datepicker();
                        jQuery(function($){  
                             $.datepicker.regional['zh-CN'] = {  
                                 monthNames: ['一月','二月','三月','四月','五月','六月',  
                                 '七月','八月','九月','十月','十一月','十二月'],  
                                 dayNamesMin: ['日','一','二','三','四','五','六'],  
                                 weekHeader: '周',  
                                 dateFormat: 'yy-mm-dd',  
                                 firstDay: 1,  
                                 isRTL: false,  
                                 showMonthAfterYear: true,  
                                 yearSuffix: '年'};  
                             $.datepicker.setDefaults($.datepicker.regional['zh-CN']);  
                         });
                </script>
               </div>
                 <div class="ZH_area_cont" id="jnzh1">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=21f0f102c3c41add11fcc426f5ea966a&action=category&catid=94&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'94','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                     <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                   <div class="area_left">        
                     <a target="_blank" href="<?php echo $r['url'];?>">   
                         <h5 class="h5_title"><?php echo $r['catname'];?></h5>
                     </a>
                   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c7e2b002cdb758eb105863735e3bf579&action=lists&catid=%24k&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                   <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                   <ul>
                       <li><a target="_blank" href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],50);?></a></li>
                     </ul>
                     <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                   </div>
                   <?php $n++;}unset($n); ?>
                   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </div> 
                 
                 <!--这个是境外展会的还没开始做-->
                <div class="ZH_area_cont" id="jwzh1" style=" display:none">
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9ce7d0adabbcc600f04a640eb99098a7&action=category&catid=95&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'95','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                     <?php $n=1; if(is_array($data)) foreach($data AS $k => $r) { ?>
                      <div class="area_left">
                          <a target="_blank" href="<?php echo $r['url'];?>"><h5 class="h5_title"><?php echo $r['catname'];?></h5></a>
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c7e2b002cdb758eb105863735e3bf579&action=lists&catid=%24k&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$k,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                          <ul>
                              <li><a target="_blank" href="<?php echo $v['url'];?>"><?php echo str_cut($v['title'],50);?></a></li>
                          </ul>
                          <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </div>  
                     <?php $n++;}unset($n); ?>
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
               </div>
                 <!--这个是境外展会的还没开始做-->
             </div>
               <style>
             .area_left{
             border-bottom:#999999 1px dashed; box-sizing:  border-box;padding-top:10px;padding-bottom:5px;
             }
             </style> 
           </div>
           <div class="RIGHT_ct2">
             <div class="ZH_recent">
               <div class="ZH_recent_nav">
                 <div class="nav1 MID_current">推荐展会</div>
                 <div class="clear"></div>
               </div>
               <div class="ZH_recent_cont">
                 <ul>
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97ff5c4138746fcc504ad343d48e90c0&action=position&posid=22&order=listorder+DESC&num=8\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder DESC','limit'=>'8',));}?>
                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                     <li>
                         <a class="tjzh_lbz" href="<?php echo $CATEGORYS[$r['catid']]['url'];?>">[<?php echo $CATEGORYS[$r['catid']]['catname'];?>]</a> 
                         <span>
                             <a  target="_blank" class="tjzh_lb" href="<?php echo $r['url'];?>">
                                 <img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" /><?php echo str_cut($r[title],54,'……');?>
                         </span>
                         </a>
                     </li>
                     <?php $n++;}unset($n); ?>  
                     <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
               </ul>
                <div class="clear"></div>
               </div>
               
             </div>
             <!--以上是  ZH_recent-->
             <div class="A_bit">
               <div class="A_bit_nav">
                 <div class="RIGHT_current RIGHT_check"><a href="#">展会一点通</a></div>
               
               </div>
               <div class="A_bit_cont">
                 <div class="but_bit">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_1_06.gif" /></a>
                 </div>
                 <div class="but_bit">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_2_06 (2).gif" /></a>
                 </div>
                 <div class="but_bit3">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_3_06.gif" /></a>
                 </div>
                 <div class="but_bit">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_4_06.gif" /></a>
                 </div>
                 <div class="but_bit">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/but_5_06.gif"/></a>
                 </div>
                 <div class="but_bit3">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_6_06.gif"/></a>
                 </div>
                 <div class="but_bit bit_bt">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/BUT_7_06.gif"/></a>
                 </div>
                 <div class="but_bit bit_bt">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/but_8_06.gif" /></a>
                 </div>
                 <div class="but_bit4">
                   <a href="#"><img src="<?php echo IMG_PATH;?>new/but_9_06.gif" /></a>
                 </div>
                 <div class="clear"></div>
               </div>
             </div>
             <!--以上是 A_bit-->
             <div class="V_introduciton">
               <div class="V_id_nav">场馆介绍</div>
               <div class="V_id_cont">
                 <div class="V_nav">
                   <div class="jnwcg  RIGHT_check RIGHT_current" contentid="jncg1"><a href="<?php echo $CATEGORYS['89']['url'];?>">境内场馆</a></div>
                   <div class="jnwcg jw RIGHT_current" contentid="jwcg2"><a href="#">境外场馆</a></div>
                 </div>
                 <script type="text/javascript" language="javascript">
                     //控制点击更换下面列表
                     $(".jnwcg").click(function () {
                         var jnwcg = this;
                         $(".jnwcg").each(function () {
                             if (this == jnwcg) {
                                 if ($(this).hasClass("jw")) {
                                     $(this).removeClass("jw");
                                     $(this).addClass("RIGHT_check");
                                 }
                             } else {
                                 if ($(this).hasClass("RIGHT_check")) {
                                     $(this).removeClass("RIGHT_check");
                                     $(this).addClass("jw");
                                 }
                             }
                         });
                         $(".V_ul").hide();
                         $("#" + $(jnwcg).attr("contentid")).show();
                         return false;
                     });
                     $(".baoming").click(function () {
                         var ZHID = $(".baoming").attr("zhid").toString();
                         window.top.createDIV(window, "/ZHZL/Baoming.aspx?PKID="+ZHID, "展会报名", 750, 600);
                     });
                        </script>
                 <div class="V_ul" id="jncg1">
                   <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8237e740e70c20d800ee3b8a886577d5&action=hits&catid=89&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'89','order'=>'monthviews DESC',)).'8237e740e70c20d800ee3b8a886577d5');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'89','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <li><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" />
                         <a target="_blank" href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title], 50, '……');?></a>
                     </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                   </ul>
                   <div class="MID_more"><a href="<?php echo $CATEGORYS['89']['url'];?>">更多>></a></div>
                   <div class="clear"></div>
                 </div>
                        
                 <div class="V_ul" id="jwcg2" style="display:none;">
                   <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a9218033044d9efe10fce031425acd83&action=hits&catid=90&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'90','order'=>'monthviews DESC',)).'a9218033044d9efe10fce031425acd83');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'90','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <li><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" />
                         <a target="_blank" href="<?php echo $r['url'];?>"><?php echo str_cut($r[title], 50, '……');?></a>
                     </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      
                   </ul>
                   <div class="MID_more"><a href="<?php echo $CATEGORYS['90']['url'];?>">更多>></a></div>
                   <div class="clear"></div>
                 </div>
               </div>
             </div>
             <!--以上是V_introduction-->
             <div class="A_bit">
               <div class="A_bit_nav">
                 <div class="RIGHT_current RIGHT_check"><a href="<?php echo $CATEGORYS['18']['url'];?>">推荐机构</a></div>
               </div>
                 
               <div class="A_bit_cont">
                 <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=221c64488e106c608433f1691eff0949&action=hits&catid=18&num=8&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'18','order'=>'monthviews DESC',)).'221c64488e106c608433f1691eff0949');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'18','order'=>'monthviews DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                    <li>
                        <a target="_blank" href="<?php echo $r['url'];?>">▪&nbsp;<?php echo str_cut($r[title], 54, '……');?></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                 </ul>
                 <div class="MID_more"><a href="<?php echo $CATEGORYS['18']['url'];?>">更多>></a></div>
                 <div class="clear"></div>
               </div>
             </div>
           </div>
           <div class="clear"></div>
         </div>
       </div>
       <div class="clear"></div>

       <!--以上是中间内容部分-->
      <?php include template("content","foot1"); ?>
    </body>
</html>
