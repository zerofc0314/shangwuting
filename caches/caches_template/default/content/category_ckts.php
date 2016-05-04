<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <?php include template("content","header1_inclub"); ?>
        <!--[if !IE]><!--<script>  
        if (/*@cc_on!@*/false) {  
            document.documentElement.className+=' ie10';  
        }  
        </script><!--<![endif]-->

        <link href="<?php echo CSS_PATH;?>new/CKTS.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <?php include template("content","header3"); ?>
         
        <script src="<?php echo JS_PATH;?>new/CDPTPF.js" type="text/javascript"></script>
        <div class="maincont">
            <div class="kong"></div>
            <div class="main_1_2_3">
                <a target="_blank" href="/Manage/MainFrame1/index.aspx">
                    <img src="<?php echo IMG_PATH;?>new1/temp_banner2.jpg" /></a>
            </div>
            <div class="main_1_2 clear">
                <div class="sideimg">
                    <script language="javascript" type="text/javascript">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=08e43334754fc355638b6b7a9f080347&action=position&posid=25&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'25','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                            //注：图片只能为长宽大于等于360*257
                            var pic_width = 299;
                            var pic_height = 227;
                            var text_height = 30;
                            var config='3|0xffffff|0x0099ff|50|0xffffff|0x0099ff|0x000000';
                                    //-- config 参数设置 -- 自动播放时间(秒)|文字颜色|文字背景色|文字背景透明度|按键数字颜色|当前按键颜色|普通按键色彩 --
                                    var pics='<?php $num = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
                                    <?php echo $r['thumb'];?>
                                    <?php if($num%5!=0) { ?>|<?php } ?>
                                    <?php $num++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var links='<?php $num2 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $v) { ?>
                                    <?php echo $v['url'];?>
                                    <?php if($num2%5!=0) { ?>|<?php } ?>
                                    <?php $num2++?>
                                    <?php $n++;}unset($n); ?>';
                                        
                                    var texts='<?php $num3 = 1?>
                                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $k) { ?>
                                    <?php echo $k['title'];?>
                                    <?php if($num3%5!=0) { ?>|<?php } ?>
                                    <?php $num3++?>
                                    <?php $n++;}unset($n); ?>';      
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </script>
                    <script src="<?php echo JS_PATH;?>new/FlashPic.js" type="text/javascript"></script>
                </div>
                
                <div class="sidetext">
                    <div class="main_1_nav clear">
                        <div class="AT_nav_left clear">
                            <span class="AT_current AT_cur_check" contentid="sidetext_info1">通知公告</span> 
                            <span class="AT_current NO_cur_check" contentid="sidetext_info2">相关下载</span>
                        </div>
                        <div class="AT_nav_right">
                            <a target="_blank" class="gdclass" href="<?php echo $CATEGORYS['25']['url'];?>">更多>></a>
                        </div>
                    </div>
                    
                    <div class="sidetext_info" id="sidetext_info1">
                        <ul>
                             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b47f367de1a220b562ab4826eefd4ca&action=hits&catid=25&num=9&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'25','order'=>'monthviews DESC',)).'8b47f367de1a220b562ab4826eefd4ca');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'25','order'=>'monthviews DESC','limit'=>'9',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>
                                <a href="<?php echo $r['url'];?>" target="_blank" >&middot;<?php echo str_cut($r[title], 70, '……');?>.</a>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                    
                    <div class="sidetext_info" id="sidetext_info2" style="display: none;">
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=28744b5408f847e456447177af80bcda&action=hits&catid=28&num=9&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'28','order'=>'monthviews DESC',)).'28744b5408f847e456447177af80bcda');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'28','order'=>'monthviews DESC','limit'=>'9',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>
                                <a href="<?php echo $r['url'];?>" target="_blank" >&middot;企业年报（海关）报送指南图示</a>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </ul>
                    </div>
                </div>
                <script type="text/javascript" language="javascript">
                    //控制点击更换下面列表
                    $(".AT_current").click(function () {
                        var topbtli = this;
                        $(".AT_current").each(function () {
                                if (this == topbtli) {
                                    if ($(this).hasClass("NO_cur_check")) {
                                        $(this).removeClass("NO_cur_check");
                                        $(this).addClass("AT_cur_check");

                                    }
                                } else {
                                    if ($(this).hasClass("AT_cur_check")) {
                                        $(this).removeClass("AT_cur_check");
                                        $(this).addClass("NO_cur_check");
                                    }
                                }
                            });
                            $(".sidetext_info").hide();
                            if ($(topbtli).attr("contentid") == "sidetext_info1") {
                                $(".gdclass").attr("href", "<?php echo $CATEGORYS['25']['url'];?>");
                            } else if ($(topbtli).attr("contentid") == "sidetext_info2") {
                                $(".gdclass").attr("href", "<?php echo $CATEGORYS['28']['url'];?>");
                            }
                            $("#" + $(topbtli).attr("contentid")).show();
                            return false;
                        });
                </script>
                <div class="sidelink">
                    <a href="#">
                        <img src="<?php echo IMG_PATH;?>new1/tspt_dh.jpg" /></a> <a href="#" class="tpsp_jl">
                        <img src="<?php echo IMG_PATH;?>new1/tspt_wt.jpg" /></a> <a href="#">
                        <img src="<?php echo IMG_PATH;?>new1/tspt_lj.jpg" /></a>
                </div>
            </div>
            <!--以上是 main_1-->
            <div class="main_1 clear">
                <div class="AT_hl">
                    <div class="AT_hl_nav">
                        <a target="_blank" href="<?php echo $CATEGORYS['29']['url'];?>">更多>></a>常见问题
                    </div>
                    <div class="AT_hl_cont">
                        <ul>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=184&LMBH=0101"target="_blank" >&middot;进口机电产品办事流程？</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=1&LMBH=0301"target="_blank" >&middot;录入进料加工手册中有多个复出口商品...</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=712&LMBH=0302"target="_blank" >&middot;三证合一后，原纳税人识别号开具的发...</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=711&LMBH=0302"target="_blank" >&middot;被关注商品的界限有哪些</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=710&LMBH=0301"target="_blank" >&middot;老企业变更经营范围后税号变为社会信...</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=709&LMBH=0301"target="_blank" >&middot;打印到excel提示“ole错误”...</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=708&LMBH=0301"target="_blank" >&middot;出口货物报关单出口金额打错了，如何...</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=707&LMBH=0301"target="_blank" >&middot;如何将申报系统的报表数据导出到ex...</a></li>
                            <li><a href="/WMZD/WMZDDetail.aspx?PKID=706&LMBH=0301"target="_blank" >&middot;生产企业申报系统用户提出找不到生成...</a></li>
                        </ul>
                    </div>
                </div>
                <div class="ckts_zcfg">
                    <div class="AT_m2_nav">
                        <a target="_blank" href="/ZCFG/ZCFGList.aspx">更多>></a>政策法规
                    </div>
                    <div class="ckts_zcfg_c">
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9b07d963d0abe674506e68209fd32760&action=lists&catid=21&order=updatetime+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'21','order'=>'updatetime DESC','limit'=>'1',));}?>
                         <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <h5><a  href="<?php echo $v['url'];?>" target="_blank" <?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],70,'……');?></a></h5>
                        <p> <?php echo str_cut($v['description'],160,'……');?>
                            <a  href="<?php echo $v['url'];?>" target="_blank">[详细]</a>
                        </p>
                         <?php $n++;}unset($n); ?>
                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                         
                          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=180a98ac90012527f8bdd32cf510968a&action=lists&catid=21&num=6&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'21','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'21','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <ul>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                                <a  href="<?php echo $r['url'];?>" target="_blank">&middot;<?php echo $r['title'];?></a>
                            </li>
                            <?php $n++;}unset($n); ?>
                        </ul>
                       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
            <div class="main_1 clear" style="margin-top: -10px;">
                <div class="AT_hl">
                    <div class="AT_hl_nav">
                        <a target="_blank" href="<?php echo $CATEGORYS['26']['url'];?>">更多>></a>退税资讯
                    </div>
                    <div class="AT_hl_cont">
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b70edc262cb656887f432a0153319d5&action=lists&catid=26&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'26','order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
                          <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <a href="<?php echo $v['url'];?>" target="_blank" ><img src="<?php echo thumb($v[thumb],280,120);?>"/></a>
                         <?php $n++;}unset($n); ?>
                       <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>        
                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c68a3fc646c341a305e4189af6e981b&action=lists&catid=26&num=7&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'26','order'=>'id DESC','limit'=>'7',));}?>
                        <ul>
                             <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li>
                                <a href="<?php echo $v['url'];?>" target="_blank" title="{$v['title']">&middot;<?php echo str_cut($v['title'],70,'……');?></a>
                            </li>   
                             <?php $n++;}unset($n); ?>
                        </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
                
                <div class="ckts_zcfg">
                    <div class="AT_m2_nav">
                        <a target="_blank" href="<?php echo $CATEGORYS['27']['url'];?>">更多>></a>退税知识
                    </div>
                    <div class="ckts_zcfg_c">
                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=69f8e080e1f00c5887ba627b0352e03d&action=lists&catid=27&order=updatetime+DESC&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'27','order'=>'updatetime DESC','limit'=>'1',));}?>
                         <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                        <h5><a href="<?php echo $v['url'];?>" target="_blank" <?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],100,'……');?></a></h5>
                        <p><?php echo str_cut($v['description'],160,'……');?>
                            <a href="<?php echo $v['url'];?>" target="_blank" >[详细]</a>
                        </p>
                         <?php $n++;}unset($n); ?>
                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>      
                         
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7fae7c5c34bc1986595b2469396b2035&action=lists&catid=27&num=7&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 7;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'27','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'27','order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                        <ul>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span>
                                <a href="<?php echo $r['url'];?>" target="_blank" >&middot;<?php echo $r['title'];?></a>
                            </li>
                            <?php $n++;}unset($n); ?>
                            
                        </ul>
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                    </div>
                </div>
            </div>
        </div>

        <!--以上是中间内容部分-->

        <?php include template("content","foot1"); ?>
    </body>
</html>
