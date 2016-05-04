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
    </div>
       <div class="content">
           <div class="main">
               <div class="scroll">
                   <script language="javascript" type="text/javascript">
                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=121049262863443a09dad357ff824e34&action=position&posid=24&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'24','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                           //注：图片只能为长宽大于等于360*257
                            var pic_width = 709;
                            var pic_height = 197;
                            var text_height = 0;
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
               
                <form name="aspnetForm" method="post" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=18&siteid=1" name="myform" id="myform">  
               <div class="zjxm"> 
                   <div class="title">
                       <h2>
                           资金项目申请
                       </h2>
                   </div>
                   
                   <p>
                       项目基本情况请写清楚项目投资额，项目完成时间等信息；对不清楚项目基本情况的，请简单填写企业基本情况，我们会及时与你们联系，对你们项目进行分析。
                       <?php
                       $userid = param::get_cookie('_userid');//获取用户id
                       ?>
                       <?php if($userid) { ?>
                       <font color="green">[<?php echo get_nickname();?>,您好,请填写并提交。]</font>
                       <?php } else { ?>
                       <font color="red">请您先[<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode(get_url());?>&siteid=<?php echo $siteid;?>" class="login" style="color:red">登录</a> | <a target="_blank" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" class="reg" style="padding:0px;color:red">注册</a>]</font>
                       <?php } ?>
                   </p>
                   
                   <div class="mainform">
                       <div class="formtop">
                       </div>
                       <div class="formcenter">
                           <div>
                               <label for="name">*公司名称：</label>
                               <input name="info[verchar]" type="text" id="verchar" class="input-text"/>
                               <input name="ctl00$ContentPlaceHolder1$gsmc_id" type="text" id="ctl00_ContentPlaceHolder1_gsmc_id" style="display: none;" class="gsmc_id" />
                                
                                <label for="contact">*联系人：</label>
                                <input name="info[chart]" id="chart" value=""  class="input-text" />
                           </div>
                           <div>
                               <label for="tel">*联系电话：</label>
                               <input name="info[phone]" id="phone"  value=""  class="input-text"/>
                               <label for="qq">QQ：</label>
                               <input name="info[tenxun]" id="tenxun"  value=""  class="input-text"/>
                           </div>
                           <div>
                               <label for="xiangmu"> *项目名称：</label>
                               <input type="text" name="info[text]" id="text" size="50" value=""  class="input-text" />
                               <span style="font-size: 11px; color: #666;">(备注：如中小企业资金)</span>
                           </div>
                           <div class="area">
                               <label for=""> *项目基本情况：</label>
                               <textarea name='info[info]' id='info' ></textarea>
                               <input name="ctl00$ContentPlaceHolder1$zc_id" type="text" id="ctl00_ContentPlaceHolder1_zc_id" style="display: none;" class="zc_id" />
                               <input name="ctl00$ContentPlaceHolder1$dlyhid" type="text" id="ctl00_ContentPlaceHolder1_dlyhid" style="display: none;" class="dlyhid" value="-1" />
                               <input type="submit" name="dosubmit" class="btn_insert" id="dosubmit" value=" 提交 "/>
                               <input type="submit" name="ctl00$ContentPlaceHolder1$btnnonetj" value="Button" id="ctl00_ContentPlaceHolder1_btnnonetj" class="btnnonetj" style="display: none;" />
                           </div>
                       </div>
                       <style>
                           .sideform div input{width:145px;}
                           .sideform div label{width:82px;}
                       </style>
                       <div class="formbtm"></div>
                   </div>
               </div>
            </form>

               <div class="zcrd">
                   <div class="title">
                       <h2>
                           政策热点新闻</h2>
                        <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1c77285f6314060385ab8d44517e78ca&action=position&posid=20&order=listorder+DESC&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder DESC','limit'=>'6',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>   
                           <li><span><?php echo date('Y-m-d H:i:s',$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" target="_blank">&middot;<?php echo str_cut($r[title],100,'……');?></a></li>
                           <?php $n++;}unset($n); ?>  
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                       </ul>
                   </div>
               </div>
           </div>
           
           
             <div class="side">   
                <?php include template("content","zjsb_search"); ?>  <!--拨付公告公共的搜索框-->  
               <div class="lianxi">
                   <a href="#">
                       <img src="<?php echo IMG_PATH;?>new1/money_zx_31.jpg" alt="" />
                   </a>
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
