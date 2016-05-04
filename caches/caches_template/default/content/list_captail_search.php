<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        <link href="<?php echo CSS_PATH;?>new/public.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo JS_PATH;?>/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/WdatePicker.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/PostionHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/StringHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/getURLparameters.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/OpenWindow.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/FormCheck.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/CDPTPF.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/picScrollByStep.js" type="text/javascript"></script>
        <link href="<?php echo CSS_PATH;?>new/money.css" rel="stylesheet" type="text/css"/>
        <style>
            .content{        
                width:994px;
                margin:auto;
            }
        </style>
    </head>
    <body>
      <?php include template("content","header"); ?>
    </div>   <!--为了避免乱布局使用的-->
    
    <div class="content">
        <div class="main">
            <div class="zcrd">
                <div class="title">
                    <h2>资金拨付公示</h2>
                </div>
                <table border="0" cellpadding="0" cellspacing="1" bgcolor="#e2e1e0" style="margin-top: 10px;">
                    <tr bgcolor="#ccc">
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            申报单位
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            所属区(市)县
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            项目名称
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            所属行业
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            批复支持金额（万）
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            项目补助金额（万）
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            年度
                        </th>
                    </tr>
                    
                <?php 
                  if($title && ($hide_area_id==0)) { 
                   $where =" title LIKE '%$title%' AND industry = $hide_industry_id AND unit='$unit'";
                   }

                   if($title && $hide_area_id) { 
                   $where =" title LIKE '%$title%' AND year = $hide_area_id AND industry = $hide_industry_id AND unit='$unit' ";
                   }
                   ?> 
                           
                   
                  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=334b4d32d51a33c41d3cd63f8a13980a&action=lists&catid=200&num=20&order=id+DESC&page=%24page&where=%24where\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'200','order'=>'id DESC','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'200','order'=>'id DESC','where'=>$where,'limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>     
                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                    <tr bgcolor="#ccc" style="font-weight:normal;color: #0066ff;">
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            <?php echo $r['unit'];?>
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            <?php echo $r['county'];?>
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                           <?php echo $r['title'];?>
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                          <?php echo get_linkage($r[industry],3439,2);?> 
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            <?php echo $r['support'];?>
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                            <?php echo $r['sidy_capital'];?>
                        </th>
                        <th align="center" valign="middle" bgcolor="#FFFFFF">
                          <?php echo get_linkage($r[year],3416,2);?> 
                        </th>
                    </tr>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                </table>
                <div>
                     <?php echo $pages;?>
                </div>
            </div>
        </div>
        <div class="side">
            
              <?php include template("content","zjsb_search"); ?>  <!--拨付公告公共的搜索框-->  
            
            
            <div class="lianxi">
                <img src="<?php echo IMG_PATH;?>new1/money_zx_31.jpg" alt="" />
            </div>
            <div class="new new2">
                   <div class="sidetitle">
                       <h4>最新扶持政策</h4>
                   </div>
                   <ul>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=127ea86e65c87006f8623eb3d86e8de3&action=lists&catid=22&order=updatetime+DESC&num=9&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'22','order'=>'updatetime DESC','limit'=>'9',));}?>
                     <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                       <li>
                         <a href="<?php echo $v['url'];?>" target="_blank" class="lala" <?php echo title_style($v[style]);?>>&middot;<?php echo str_cut($v['title'],50,'……');?></a>
                       </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
                  </ul>
               </div>

        </div>
    </div>
     <?php include template("content","footer"); ?>
    </body>
</html>
