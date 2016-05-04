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
        <script src="<?php echo JS_PATH;?>new/PostionHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/StringHelper.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/getURLparameters.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/OpenWindow.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/FormCheck.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/CDPTPF.js" type="text/javascript"></script>
        <script src="<?php echo JS_PATH;?>new/picScrollByStep.js" type="text/javascript"></script>
        <link href="<?php echo CSS_PATH;?>new/law.css" rel="stylesheet" type="text/css"/>
        <style>
            .mid{
            width:994px;
            margin:0 auto;}
        </style>
    </head>
    
    <body>
      <?php include template("content","header"); ?>
    </div>
    <div class="mid" style="min-height:570px;">
          <div class="ui_layout_left">
              <div class="ui_lay_zccx">
                  <div class="ui_zccx_nav"></div>
                  
                  <form action="#" method="post" id="searchForm">
                  <div class="ui_lay_cont">
                      <div class="ui_check">
                          <label>
                              <input type="radio" name="classify" class="rdozcfg" checked="ckecked" value="21"/>政策法规</label>
                          <label>
                              <input type="radio" name="classify" class="rdofczc" value="22" />扶持政策</label>
                      </div>
                      
                      <div class="formcont">
                          <div>
                              <label for="title">
                                  标题：</label><input type="text" class="zcbt" name="title" id="zcbt" /></div>
                          <div>
                              <label for="title">
                                  文号：</label><input type="text" name="fileNumb" class="zcwh" id="zcwh" /></div>
                          <div>
                              <label for="title">
                                  关键字：</label><input type="text" name="keywords" class="gjz" id="gjz" /></div>
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
                  <a href="<?php echo $CATEGORYS['21']['url'];?>" target="_blank">
                      <img src="<?php echo IMG_PATH;?>new/Policy_zcfg_10.gif" alt="政策法规" /></a>
              </div>
              <div class="ui_but">
                  <a href="<?php echo $CATEGORYS['22']['url'];?>" target="_blank"> 
                      <img src="<?php echo IMG_PATH;?>new/Policy_fczc_12.gif" alt="扶持政策" /></a>  
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
                          <li><img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><a  href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],54,'……');?></a></li>
                        <?php $n++;}unset($n); ?>  
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </ul>
                  </div>
              </div>
              
              <div class="ui_import" >
                  <div class="ui_import_nav">
                      重要扶持政策推荐</div>
                  <div class="ui_import_cont">
                      <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c7aede6d37643b22b57e44cdac44538&action=position&posid=19&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder DESC','limit'=>'7',));}?>
        	 	<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?> 
                          <li><img src="<?php echo IMG_PATH;?>new/icon_13.gif" />
                              <a  href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],54,'……');?></a>
                          </li>
                        <?php $n++;}unset($n); ?>  
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </ul>
                  </div>
              </div>
          </div>
          <style>
              .ui_import_nav{text-indent:72px;}
          </style>
          
          <div class="ui_layout_right">
              <div class="ui_list_zcfg">
                  <div class="ui_list_nav">
                      <a target="_blank" href="<?php echo $CATEGORYS['21']['url'];?>">更多>></a>
                      <img src="<?php echo IMG_PATH;?>new/Policy_icon_06.png" />政策法规
                  </div>
                  <div class="ui_list_cont">
                      <div class="ui_list_current">
                          <ul>
                              <li class="list_check lxnone" zcvl="zcvl1"><a href="#">商务</a></li>
                              <li class="list_none lxnone" zcvl="zcvl2"><a href="#">国税</a></li>
                              <li class="list_none lxnone" zcvl="zcvl3"><a href="#">外管</a></li>
                              <li class="list_none lxnone" zcvl="zcvl4"><a href="#">海关</a></li>
                              <li class="list_none lxnone" zcvl="zcvl5"><a href="#">商检</a></li>
                              <li class="list_none lxnone" zcvl="zcvl6"><a href="#">其他</a></li>
                          </ul>
                      </div>
                      <!--政策法规的”商务“-->
                      
                      <ul class="LIST_cont zxvl_1" id="zcvl1">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d374fafcb222e781a569b9ca2fa6537d&action=hits&catid=57&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'57','order'=>'monthviews DESC',)).'d374fafcb222e781a569b9ca2fa6537d');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'57','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                           <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </ul>
                      <!--政策法规的”商务“结束-->
                      
                      <!--政策法规的”国税”-->
                      <ul class="LIST_cont zxvl_1" style="display: none;" id="zcvl2">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8399c47838ea283718ff648e73408f25&action=hits&catid=58&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'58','order'=>'monthviews DESC',)).'8399c47838ea283718ff648e73408f25');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'58','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                          <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          
                      </ul>
                      <!--政策法规的”国税“结束-->
                      
                         <!--政策法规的”外管“-->
                      <ul class="LIST_cont zxvl_1" style="display: none;" id="zcvl3">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4c75f8a05fafca2f6395d0f2e68c80a0&action=hits&catid=59&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'59','order'=>'monthviews DESC',)).'4c75f8a05fafca2f6395d0f2e68c80a0');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'59','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                          <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          
                      </ul>
                      <!--政策法规的”外管“结束-->   
                         
                       <!--政策法规的”海关“开始-->
                      <ul class="LIST_cont zxvl_1" style="display: none;" id="zcvl4">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7d3df6483fdb7423869efc95116b1a3f&action=hits&catid=60&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'60','order'=>'monthviews DESC',)).'7d3df6483fdb7423869efc95116b1a3f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'60','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                           <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </ul>
                       <!--政策法规的”海关“结束-->
                     
                        <!--政策法规的”商检“-->
                      <ul class="LIST_cont zxvl_1" style="display: none;" id="zcvl5">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3abf85fa0ddddd64df88d765ae16e87a&action=hits&catid=61&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'61','order'=>'monthviews DESC',)).'3abf85fa0ddddd64df88d765ae16e87a');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'61','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          
                      </ul>
                         <!--政策法规的”商检“结束-->
                         
                       <!--政策法规的”其他“-->
                      <ul class="LIST_cont zxvl_1" style="display: none;" id="zcvl6">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bc9dbce4682fde50d437670440ceb23b&action=hits&catid=62&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'62','order'=>'monthviews DESC',)).'bc9dbce4682fde50d437670440ceb23b');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'62','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                        <?php $n++;}unset($n); ?>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          
                      </ul>
                        <!--政策法规的”其他“结束-->
                      
                      <div class="clear"></div>
                      <script type="text/javascript">
                          //控制点击更换下面列表
                          $(".lxnone").click(function () {
                              var topbtli = this;
                              $(".lxnone").each(function () {
                                  if (this == topbtli) {
                                      if ($(this).hasClass("list_none")) {
                                          $(this).removeClass("list_none");
                                          $(this).addClass("list_check");
                                      }
                                  } else {
                                      if ($(this).hasClass("list_check")) {
                                          $(this).removeClass("list_check");
                                          $(this).addClass("list_none");
                                      }
                                  }
                              });
                              $(".zxvl_1").hide();
                              $("#" + $(topbtli).attr("zcvl")).show();
                              return false;
                          });
                      </script>
                  </div>
              </div>
              <div class="ui_list_zcfg">
                  <div class="ui_list_nav">
                      <a target="_blank" href="<?php echo $CATEGORYS['22']['url'];?>">更多>></a>
                      <img src="<?php echo IMG_PATH;?>new/Policy_icon_06.png" />扶持政策
                  </div>
                  <div class="ui_list_cont">
                      <div class="ui_list_current">
                          <ul>
                              <li class="list_check jdnone" jdvl="jdvl1" id="jd_kb"><a href="#">商务</a></li>
                              <li class="list_none jdnone" jdvl="jdvl2"><a href="#">经委</a></li>
                              <li class="list_none jdnone" jdvl="jdvl3"><a href="#">农委</a></li>
                              <li class="list_none jdnone" jdvl="jdvl4"><a href="#">科技</a></li>
                              <li class="list_none jdnone" jdvl="jdvl5"><a href="#">其他</a></li>
                          </ul>
                      </div>
                       <!--扶持政策的”商务“-->
                      <ul class="LIST_cont jd_fljd" id="jdvl1">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a5aadb47e4b052a16fc4e6917cf2bebe&action=hits&catid=63&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'63','order'=>'monthviews DESC',)).'a5aadb47e4b052a16fc4e6917cf2bebe');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'63','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                            <?php $n++;}unset($n); ?>
                          <div style='clear:both;'></div>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          
                      </ul>
                        <!--政策法规的”商务“结束-->
                      
                         <!--政策法规的”经委“-->
                      <ul class="LIST_cont jd_fljd" style="display: none;" id="jdvl2">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a92f73007386ba24d23ad68f8f848156&action=hits&catid=64&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'64','order'=>'monthviews DESC',)).'a92f73007386ba24d23ad68f8f848156');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'64','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                           <?php $n++;}unset($n); ?>
                          <div style='clear:both;'></div>
                           <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </ul>
                      <!--政策法规的”经委“结束-->
                      
                       <!--政策法规的”农委“-->
                      <ul class="LIST_cont jd_fljd" style="display: none;" id="jdvl3">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f5912c1b4957703f1e027cc090cf7999&action=hits&catid=65&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'65','order'=>'monthviews DESC',)).'f5912c1b4957703f1e027cc090cf7999');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'65','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                         <?php $n++;}unset($n); ?>
                          <div style='clear:both;'></div>
                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                      </ul>
                        <!--政策法规的”农委“结束-->
                       
                         <!--政策法规的”科技“-->
                      <ul class="LIST_cont jd_fljd" style="display: none;" id="jdvl4">
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dd1148de957320950a40a0c3d4d35afc&action=hits&catid=66&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'66','order'=>'monthviews DESC',)).'dd1148de957320950a40a0c3d4d35afc');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'66','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                            <?php $n++;}unset($n); ?>
                          <div style='clear:both;'></div>
                             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                          
                      </ul>
                      <!--政策法规的”科技“结束-->   
                      
                       <!--政策法规的”其他“-->
                      <ul class="LIST_cont jd_fljd" style="display: none;" id="jdvl5">
                           <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ac64ece76f8720980bc94e5b5c8c8688&action=hits&catid=67&num=11&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'67','order'=>'monthviews DESC',)).'ac64ece76f8720980bc94e5b5c8c8688');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'67','order'=>'monthviews DESC','limit'=>'11',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                          <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                              <a  href="<?php echo $r['url'];?>" target="_blank">
                                  <img src="<?php echo IMG_PATH;?>new/icon_13.gif" /><?php echo str_cut($r[title], 100);?>
                              </a>
                          </li>
                             <?php $n++;}unset($n); ?>
                          <div style='clear:both;'></div>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                      </ul>
                        <!--政策法规的”其他“结束-->
                      <script type="text/javascript">
                          //控制点击更换下面列表
                          $(".jdnone").click(function () {
                              var topbtli = this;
                              $(".jdnone").each(function () {
                                  if (this == topbtli) {
                                      if ($(this).hasClass("list_none")) {
                                          $(this).removeClass("list_none");
                                          $(this).addClass("list_check");
                                      }
                                  } else {
                                      if ($(this).hasClass("list_check")) {
                                          $(this).removeClass("list_check");
                                          $(this).addClass("list_none");
                                      }
                                  }
                              });
                              $(".jd_fljd").hide();
                              $("#" + $(topbtli).attr("jdvl")).show();
                              return false;
                          });
                      </script>
                  </div>
              </div>
          </div>
      </div>
      <div class="clear">
      </div>
      <!--以上是中间内容部分--> 
      <?php include template("content","footer"); ?>
    </body>
</html>
