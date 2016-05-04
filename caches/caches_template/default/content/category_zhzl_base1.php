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
    </head>
    <body>
       <?php include template("content","header1"); ?>
       
       <div class="maincont">
           <div class="kong"></div>
           <div class="cont_2_sj">
               <div class="LEFT_ct2">
                   <div class="ZH_area">
                       <div class="ZH_area_nav">
                           <div class="nav1 MID_current" style="width:500px">
                              <?php echo $catname;?>
                               </span></div>
                           <div class="clear"></div>
                       </div>
                       <div class="ZH_area_cont"> 
                          <ul>  
                        <?php
                        if(!$title){
                        $where = "business = $hide_area_id AND region = $item"; 
                        
                       if($start_time && $end_time) { 
                        $where ="start_time LIKE '$start_time%' AND end_time LIKE '$end_time%' ";
                        }
                        }

                        
                        if($title){
                           $where = "title LIKE '%$title%' AND region = $item"; 
                            if($start_time && $end_time) { 
                            $where ="title LIKE '%$title%' AND business = $hide_area_id AND region = $item AND start_time LIKE '$start_time%' AND end_time LIKE '$end_time%' ";
                            }
                        }
                        ?>
     
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b4b19c2f0b305567d5211dc9d752cc68&action=lists&catid=52&order=id+DESC&page=%24page&where=%24where\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'52','order'=>'id DESC','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'52','order'=>'id DESC','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                           <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?> 
                               <li><font class="word_color">&middot;</font>
                                   <a class="zxzh" href="<?php echo $v['url'];?>" target="_blank">
                                       <span class="type">[<?php echo $CATEGORYS[$v['catid']]['catname'];?>]</span><span class="zh_xx"><?php echo str_cut($v['title'],36);?> </span>
                                   </a>
                                   
                                   <span><?php echo $v['start_time'];?></span>
                               </li>
                        <?php $n++;}unset($n); ?>
                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          </ul>
                           
                       </div>
                       <div>
                          <?php echo $content;?>
                       </div>
                   </div>

               </div>
               <div class="RIGHT_ct2"> 
                    <?php include template("content","zhzl_search"); ?>   <!--展会的搜索公用框部分-->    
                    <script>
                     function need(event){
                    if($("input[name='title']").val()=="")
                      {
                    alert('请必须输入展会名称！');
                     event.preventDefault();  
                      }
                }
                
                 function beforeSearch(){
                    var catid=$("#L_3390 input").val();
                     $("#hide_area_id").val(catid);
                     
                     var radio_val=$("input[name='item']:checked").val();
                     
                     var start_time=$("input[name='start_time']").val();
                     var end_time=$("input[name='end_time']").val();
                  
                 }
                        
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

                   <!--以上是V_introduction-->
                   <div class="A_bit">
                       <div class="A_bit_nav">
                           <div class="RIGHT_current RIGHT_check"><a href="<?php echo $CATEGORYS['54']['url'];?>">展会知识</a></div>
                       </div>
                       <div class="A_bit_cont">
                           <ul>
                               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=449b7743f70ea753f2c7050d51cf8194&action=hits&catid=54&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'54','order'=>'monthviews DESC',)).'449b7743f70ea753f2c7050d51cf8194');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'54','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                               <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>  
                               <li>
                                   <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                   <a target="_blank" href="<?php echo $r['url'];?>">▪&nbsp;<?php echo str_cut($r[title], 60, '……');?></a>
                               </li>
                               <?php $n++;}unset($n); ?>
                              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                           </ul>
                           <div class="MID_more"><a href="<?php echo $CATEGORYS['54']['url'];?>" target="_blank">更多>></a></div>
                           <div class="clear"></div>
                       </div>
                   </div>
               </div>
               <div class="clear"></div>
           </div>
       </div>


       <!--以上是中间内容部分-->

       
        <?php include template("content","foot1"); ?>
    </body>
</html>
