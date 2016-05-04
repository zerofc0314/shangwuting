<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>"/>
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>"/>
        <link href="<?php echo CSS_PATH;?>new/lanrenzhijia.css" type="text/css" rel="stylesheet" />
        <?php include template("content","header1_inclub"); ?>
        <script>
            jQuery(document).ready(function($) {
                    $('.theme-login').click(function(){
                            $('.theme-popover-mask').fadeIn(100);
                            $('.theme-popover').slideDown(200);
                    })
                    $('.theme-poptit .close').click(function(){
                            $('.theme-popover-mask').fadeOut(100);
                            $('.theme-popover').slideUp(200);
                    })
            })
        </script>
    </head>
    <body>
       <?php include template("content","header_gjh"); ?> 
       <div class="ex_click clear" style="margin-bottom:15px;">
           <div class="click_side">
               <div class="jz_time">
                   <span>-330天</span>
               </div>
               <div class="wjhg">
                   <div class="wjhg_nav clear">
                       <div class="wjhg_nav1"></div>
                       <div class="wjhg_nav2"><img src="<?php echo IMG_PATH;?>new1/click_icon_06.jpg" />展会时间</div>
                       <div class="wjhg_nav3"></div>
                   </div>
                   <div class="wjhg_info">
                       <ul>
                           <li>春季：2013年4月15日-5月5日</li>
                           <li>秋季：2013年10月15日-11月4日</li>
                           <li>周期：每年二届</li>
                       </ul>
                   </div>
               </div>
               <!--以上是往届回顾-->
               <div class="cgs">
                   <div class="cgs_nav">
                       <div class="cgs_cur cgs_click"><a href="#">组织</a>架构</div>
                   </div>
                   <div class="wjhg_info">
                       <ul>
                           <li><a href="#"><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" />中华人民共和国商务部</a></li>
                           <li><a href="#"><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" />广东省人民政府</a></li>
                           <li><a href="#"><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" />中国对外贸易中心</a></li>
                           <li><a href="#"><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" />进出口商会/协会</a></li>
                           <li><a href="#"><img src="<?php echo IMG_PATH;?>new/RIGHT_icon_13.gif" />交易团</a></li>
                       </ul>
                   </div>
               </div>
               <!--以上是采购商情况-->
               <div class="wjhgimg">
                   <div class="wjhg_nav clear">
                       <div class="wjhg_nav1"></div>
                       <div class="wjhg_nav2"><img src="<?php echo IMG_PATH;?>new1/click_icon_06.jpg" />展会图库</div>
                       <div class="wjhg_nav3"><a href="<?php echo $CATEGORYS['40']['url'];?>">更多>></a></div>
                   </div>
                   <div class="wjhgimg_info_g">

                   </div>
               </div>
               <div class="cgs">
                   <div class="ksqbt_nav">
                       <a href="<?php echo $CATEGORYS['42']['url'];?>">更多>></a> <span>历届回顾</span>
                   </div>
                   <div class="wjhg_info">
                       <ul>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a051bcfbdd8043190a6a6e694d4afb4d&action=lists&catid=42&order=updatetime+DESC&num=15&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'42','order'=>'updatetime DESC','limit'=>'15',));}?>
                            <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                            <li>
                               <a href="<?php echo $v['url'];?>" class="new2" target="_blank" title="<?php echo $v['title'];?>"><?php echo str_cut($v[title], 50);?></a>
                            </li>
                             <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                       </ul>
                   </div>
               </div>
               <!--以上是可申请资金-->

               <!--以上是组展机构-->

           </div>
           <div class="click_Rside">
               <div class="ex_c_cont clear">
                   <div class="exhi_g">
                       <div class="exhi_nav_g"><img src="<?php echo IMG_PATH;?>new1/click_icon_06.jpg" />展会信息</div>
                       <div class="exhi_info_g">
                           <table width="100%" border="0" bgcolor="#DBDBDB"  align="center" cellpadding="0" cellspacing="1" style="font-family:宋体;font-size:13px;">
                               <caption>&nbsp;
                               </caption>
                               <tr  bgcolor="#FFFFFF">
                                   <td height="60" colspan="2" scope="row" align="center"><font style="font-size:16px; font-weight:bold;">117届中国进出口商品交易会</font></td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td width="19%" height="30" align="center" bgcolor="#F6F6F6">展会区域: </td>
                                   <td width="81%">&nbsp;中国境内</td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td height="30" scope="row" align="center" bgcolor="#F6F6F6">展会地址：</td>
                                   <td>&nbsp;中国广州市海珠区阅江中路380号</td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td height="30" scope="row" align="center" bgcolor="#F6F6F6">展会时间：</td>
                                   <td>&nbsp;2015年04月15 至 2015年05月05</td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td height="30" scope="row" align="center" bgcolor="#F6F6F6">组织方：</td>
                                   <td>&nbsp;</td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td height="30" scope="row" align="center" bgcolor="#F6F6F6">承办方：</td>
                                   <td>&nbsp;</td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td height="30" scope="row" colspan="2" align="left" bgcolor="#F6F6F6">展会简介：</td>
                                   <td >
                                       <br/>
                                   </td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td colspan="2" align="left" bgcolor="white" class="lmnrdetail"  >
                                       <div style=" width:440px; "> &nbsp;&nbsp;
                                           <p>中国进出口商品交易会，又称广交会，创办于1957年春季，每年春秋两季在广州举办，迄今已有53年历史，是中国目前历史最久、层次最高、规模最大、商品种类最全、到会客商最多且分布国别地区最广、成交效果最好、信誉最佳的综合性国际贸易盛会。</p>
                                           <p>广交会出口展区由48个交易团组成，来自全国两万多家资信良好、实力雄厚的外贸公司、生产企业、科研院所、外商投资/独资企业、私营企业参展。</p>
                                           <p>广交会以进出口贸易为主，贸易方式灵活多样，除传统的看样成交外，还举办网上交易会，开展多种形式的经济技术合作与交流，以及商检、保险、运输、广告、咨询等业务活动。来自世界各地的客商云集广州，互通商情，增进友谊。</p>
                                           <p>中国进出口商品交易会展馆<br />
                                               创办年代<br />
                                               1957年春季<br />
                                               展出周期 一年两届<br />
                                               举办时间 第117届广交会<br />
                                               第一期：2015年4月15-19日<br />
                                               第二期：2015年4月23-27日<br />
                                               第三期：2015年5月1日-5日<br />
                                               会期 每期5天<br />
                                               展览地点 中国进出口商品交易会展馆（广州市海珠区阅江中路380号）<br />
                                               &nbsp;</p>&nbsp;</div> 
                                   </td>
                               </tr>
                               <tr  bgcolor="#FFFFFF">
                                   <td scope="row" align="center" height="30" bgcolor="#F6F6F6">附件：</td>
                                   <td>&nbsp;</td>
                               </tr>
                            </table>
                           <a class="baoming"><div class="join btn theme-login" href="javascript:;">我要参展</div></a> 
                       </div>
                   </div>
                    <div class="theme-popover">
                       <div class="theme-poptit">
                           <a href="javascript:;" title="关闭" class="close">×</a>
                           <h3><?php
                       $userid = param::get_cookie('_userid');
                       ?>
                       <?php if($userid) { ?>
                       <font color="green">[<?php echo get_nickname();?>,您好,请填写并提交。]</font>
                       <?php } else { ?>
                       <font color="red">请您先[<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode(get_url());?>&siteid=<?php echo $siteid;?>" class="login" style="color:red"> 登录</a> | <a target="_blank" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" class="reg" style="padding:0px;color:red">注册 </a>]</font>
                       <?php } ?></h3>
                       </div>
                       <div class="theme-popbod dform">
                            <form action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=24&siteid=1" method="post" name="myform" id="myform"> 
                                <ol>                     
                                    <li><strong>公司名称：</strong><input class="ipt" type="text" name="info[companyname] log" id="companyname"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>展会名称：</strong><input class="ipt" type="text" name="info[showname] log" id="showname"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>联系人: &nbsp;</strong><input class="ipt" type="text" name="info[linkman] pwd" id="linkman"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>电话：&nbsp;</strong><input class="ipt" type="text" id="tel" name="info[tel] log"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>邮箱：&nbsp;</strong><input class="ipt" type="text" name="info[email] pwd" id="email"/><font style="color: red;">&nbsp;&nbsp;&nbsp;*</font></li>
                                    <li><strong>内容：&nbsp;</strong><textarea id="content TextArea1" name='info[content]' class="txtarea" style="margin:10px auto; width:230px; height: 100px;">      
                                        </textarea></li>
                                    <li><input class="btn btn-primary" name="dosubmit" id="dosubmit" type="submit" name="submit" value="提交"/></li>                    
                                </ol>
                            </form>
                       </div>
                    </div>
                    <div class="theme-popover-mask"></div>
                     <style>
                            .join{width:8px;}
                            .baoming:hover{text-decoration: none;}
                            .join:hover{color:orange;}
                            .dform ol li{line-height:40px;}
                            .dform ol{margin:5px 10px 15px 0px}
                     </style>
                   
                   <!--以上是展会内容-->
                   <div class="detail_exhi_g">
                       <div class="DT_tjjg_g">
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />酒店预订</a></div>
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />交通指引</a></div>
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />特装天地</a></div>
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />产品设计与贸易促进中心</a></div>
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />知识产权保护和贸易纠纷解决</a></div>
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />广交会会刊</a></div>
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />广交会驻香港客商服务中心</a></div>
                           <div class="gz_list"><a href="#"><img src="<?php echo IMG_PATH;?>new1/ico_content_bg.png" />境外合作伙伴</a></div>
                       </div>
                       <!-- 以上是组织机构 -->
                       <div class="DT_tjjg_g_1">
                           <div class="DT_tjjg_nav_1 clear">
                               <div class="DT_cur DT_cur_check" contentid="tianqi"><a href="#">当前天气</a></div>
                           </div>
                           <div class="DT_tjjg_info hzcg" id="tianqi">
                               <iframe  width="245px"; height="150px;" frameborder="0"  marginheight="0" marginwidth="0" scrolling="no" src="<?php echo IMG_PATH;?>new1/ZHmeather.html"></iframe>
                           </div>

                       </div>
                   </div>

                   <script src="<?php echo JS_PATH;?>new/DJCSTJ.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/FormCheck.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/PostionHelper.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/StringHelper.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/getURLparameters.js" type="text/javascript"></script>
                   <script src="<?php echo JS_PATH;?>new/OpenWindow.js" type="text/javascript"></script>
                   <style type="text/css">
                      /* .qwfb_pl{width:992px;margin-top:10px;margin-bottom:10px;}*/
                   .qwfb_pl_person{float:left;width:100%;background:#ededed;margin-left:8px;_margin-left:4px;}
                   .CONT_pl{width:99.4%;background:#ededed;padding:1px 1px;border:1px solid #c9c9c9;}
                   .plk{margin:auto;width:98%;height:119px;margin-top:10px;}
                   .plk textarea{width:97%;height:109px;padding:5px;}
                   .pl_input{margin:auto;width:98%;margin-top:10px;margin-bottom:10px;}
                   .pl_input input{width:160px;height:25px;line-height:25px;color:#4c4c4c;text-indent:5px;}
                   .pl_input .pl_btn img{vertical-align:middle;}
                   .pl_input .pl_btn{float:right;}
                   .detail_pl{margin:auto;width:99.4%;background:#fff;border:1px solid #c9c9c9;padding:1px 1px;border-top:none;}
                   .detail_pl_nav{width:99.4%;height:56px;background:url(../../new1/CONT_new_pl_11.gif) 0px 0px repeat-x;}
                   .new_pl{float:left;width:135px;height:56px;border-right:1px solid #c9c9c9;text-align:center;line-height:56px;font-size:14px;}
                   .new_pl_check{width:135px;height:56px;background:#fff;}
                   .detail_pl_nav span{float:right;margin-right:10px;line-height:56px;}
                   .detail_pl_cont{margin:auto;width:97%;margin-top:10px; }
                   .pl_detail{margin:auto;width:97%;margin-bottom:10px;}
                   .pl_detail span{float:left;}
                   .person_info{float:left;margin-left:10px;width:97%;border:1px solid red;}
                   .person_info p{text-indent:2em;line-height:20px;}
                   .div_dashed{margin:auto;width:97%;height:1px;margin-top:5px;margin-bottom:10px;border-bottom:1px dashed #ccc;}
                   .info_pl{height:25px;line-height:25px;float:right;}
                   .info_pl a{color:#ff0000;margin-right:10px;}
                   </style>
                   <div style="clear:both; height:0px;"></div>
                   <div style="padding-left: 30px; margin-bottom: 8px; margin-top:5px; ">
                       <div class="bshare-custom">
                           <a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">分享到</a>
                           <a title="分享到QQ空间" class="bshare-qzone">QQ空间</a>
                           <a title="分享到新浪微博" class="bshare-sinaminiblog">新浪微博</a>
                           <a title="分享到人人网" class="bshare-renren">人人网</a>
                           <a title="分享到腾讯微博" class="bshare-qqmb">腾讯微博</a>
                           <a title="分享到豆瓣" class="bshare-douban">豆瓣</a>
                           <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
                           <span class="BSHARE_COUNT bshare-share-count">0</span>
                       </div>
                       <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
                       <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
                   </div>
                   
               </div>
           </div>
       </div>
       <!--以上是中间内容部分-->
       <?php include template("content","foot1"); ?>
    </body>
</html>
