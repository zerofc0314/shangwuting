<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <?php include template("content","header1_inclub"); ?>
    </head>
    <body>
        
        <?php include template("content","header_gjh"); ?>
       <div class="ex_click clear">
           <div class="gjh_list">
             <div class="nav_gjh_list clear">
               <div class="nav_gjh_l"></div>
               <div class="nav_gjh_m"><?php echo $catname;?></div>
               <div class="nav_gjh_r"></div>
             </div>
               <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=83e86dbe8e634be99f241427bdc4f45f&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <ul>
                             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><span><?php echo date('Y-m-d',$r[inputtime]);?></span>
                                <font class="word_red">&middot;【<?php echo $catname;?>】</font>
                                <a href="<?php echo $r['url'];?>"  target="_blank"><?php echo $r['title'];?></a>
                            </li>
                             <?php $n++;}unset($n); ?>
                        </ul>
                 <div class="link_more">
                     <?php echo $pages;?>
                 </div>
           </div>
           <div class="detail_exhi_g">
                 <div class="DT_tjjg_g">
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />酒店预订</a></div>
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />交通指引</a></div>
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />特装天地</a></div>
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />产品设计与贸易促进中心</a></div>
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />知识产权保护和贸易纠纷解决</a></div>
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />广交会会刊</a></div>
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />广交会驻香港客商服务中心</a></div>
                   <div class="gz_list"><a target="_blank" href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />境外合作伙伴</a></div>
                 </div>
                 <!-- 以上是组织机构 -->
                 <div class="DT_tjjg_g_1">
                   <div class="DT_tjjg_nav_1 clear">
                      <div class="DT_cur DT_cur_check"><a href="#">当前天气</a></div>
                   </div>
                   <div class="DT_tjjg_info">
                    <iframe style="color:#9b0101; filter: Chroma(Color=white);" width="245px"; height="100px;" frameborder="0"  marginheight="0" marginwidth="0" scrolling="no" src="<?php echo IMG_PATH;?>new1/ZHmeather.html"></iframe>
                   </div>
                 </div>
               </div>
         </div>

       <!--以上是中间内容部分-->

        <?php include template("content","foot1"); ?>
    </body>
</html>
