<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <link href="<?php echo CSS_PATH;?>new/public.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo CSS_PATH;?>new/wmzd.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo CSS_PATH;?>new/wmzd_ej_index.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo JS_PATH;?>/jquery-1.4.4.min.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/WdatePicker.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/PostionHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/StringHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/getURLparameters.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/OpenWindow.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/FormCheck.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/CDPTPF.js" type="text/javascript"></script>
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
       <?php include template("content","header4"); ?>
      </div>
        
      <div class="wmzd_mid" style="min-height:566px;">
        <div class="wmzd_cont_left">
            <div class="qbfl">
                <div class="qbfl_nav">
                    <img src="<?php echo IMG_PATH;?>new1/ej_know_img_nav_06.jpg" /><a href="<?php echo siteurl($siteid);?>">频道首页</a>
                    >  <?php echo catpos($catid);?>
                </div>
                <ul>
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=cd609b7b9ac4fadeb42b5e7f97a5f535&action=category&catid=%24catid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>   
                     <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <a href="<?php echo $r['url'];?>"><img src="<?php echo IMG_PATH;?>new1/ej_know_d_09.jpg"/><?php echo $r['catname'];?></a>
                     <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="qbfl_jiejue">
                <!--<div class="qbfl_jiejue_nav">
                    <a href="WMZDList.aspx?"
                       id="all">所有(628)</a> <a href="WMZDList.aspx?WTZT=2&"
                       id="DJJ">待解决问题(213)</a> <a href="WMZDList.aspx?WTZT=1&"
                       id="YJJ">已解决(415)</a>

                    <a href="WMZDList.aspx?WTYXJ=999&" id="TJWT">
                        推荐问题(2)</a>
                </div>-->
                <div class="qbfl_jiejue_cont">
                    <div class="title">
                        <span class="bt">标题</span> <span class="sl">回答数</span> <span class="sj">提问时间</span>
                    </div>
                    <div class="fl_xx">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=472ab8bfbbbb727988da88b3bb6649d5&action=lists&catid=%24parentid&num=18&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 18;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$parentid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$parentid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><a  target="_blank"  style="color:#a41401;" href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a> 
                                <p>2</p>  <span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                            </li>
                             <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                    <?php echo $pages;?>
                </div>
            </div>
        </div>
        <div class="wmzd_gg">
            <div class="zdpm">
                <div class="zdpm_title">
                    <span>本周知道之星</span>
                    <!-- <div class="clear"></div> -->
                </div>
                <div class="zdpm_cont">
                    <ul>
                    </ul>
                </div>
            </div>
            <!-- <div class="clear"></div> -->
            <div class="zdpm">
                <div class="zdpm_title">
                    <span>本周积分排名</span>
                    <!-- <div class="clear"></div> -->
                </div>
                <div class="zdpm_cont">
                    <ul>
                    </ul>
                </div>
            </div>
            <!-- <div class="clear"></div> -->
            <div class="zdpm">
                <div class="zdpm_title">
                    <span>总积分排名</span>
                    <div class="clear">
                    </div>
                </div>
                <div class="zdpm_cont">
                    <ul>
                        <li><span>114</span>
                            <a href="OneWMZDList.aspx?AYH=1&YHID=8163" target="_blank">侯德均</a>
                        </li>
                        <li><span>64</span><a href="OneWMZDList.aspx?AYH=1&YHID=1" target="_blank">系统管理员</a></li>
                        <li><span>25</span><a href="OneWMZDList.aspx?AYH=1&YHID=9314" target="_blank">求石</a></li>
                        <li><span>20</span><a href="OneWMZDList.aspx?AYH=1&YHID=10142" target="_blank">34553639@qq.com</a></li>
                        <li><span>14</span><a href="OneWMZDList.aspx?AYH=1&YHID=9574" target="_blank">fire</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!--以上是外贸知道中间部分-->

    <?php include template("content","footer1"); ?>
     <script src="<?php echo JS_PATH;?>new/WMZDSS.js" type="text/javascript"></script>

    </body>
</html>
