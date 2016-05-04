<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        <?php include template("content","header_inclub"); ?>
       <link href="<?php echo CSS_PATH;?>new/qwfb.css" type="text/css" rel="stylesheet"/>
    </head>
   <body style="background:url(./statics/images/new/bj_03.jpg);">
       <?php include template("content","header2"); ?>
        
       <div class="qwfb_body">
           <!--中间主体开始-->
           <div class="qwfb_content">
               <!--中间主体977开始-->
               <div class="qwfb_title">
                   <p class="qwfb_title01">
                       权威发布</p>
                   <p class="qwfb_title02">
                       <span style="font-size:14; color:Red; padding-right:5px;">按月份查询:</span>
                       <input name="ctl00$ContentPlaceHolder1$ymonth" type="text" id="ctl00_ContentPlaceHolder1_ymonth" class="Wdate ymonth"  style=" width:100px;font-size: 16px;" onclick="showMonth()" value="2014-09" />
                       <a class="gjss"><input type="button" style="width:60px; height:20px;"  value="搜 索"/></a>
                   </p>
               </div>
               <!--主体标头结束-->
               <div class="qwfb_content_sub">
                   <div class="qwfb_sub01 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市出口企业100强</p>
                       </div>
                       <div class="qwfb_sub01_body">
                           <iframe style="color:#9b0101;" width="420px"; height="227px;" class="framesrc1"  frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="./statics/BQCKPMTop.html"> 
                           </iframe>
                           <p class="qwfb_sub01_check" >
                               <a class="CKPMS" style="float:right;" vl="100" target="_blank" href="<?php echo $CATEGORYS['23']['url'];?>">[查看完整表单]</a>
                               <span>M代表百万 K代表千 单位:万美元</span>
                           </p>
                       </div>
                   </div>
                   
                   <div class="qwfb_sub01 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市进口企业100强</p>
                       </div>
                       <div class="qwfb_sub01_body">
                           <iframe style="color:#9b0101;" width="420px"; height="227px;" class="framesrc1"  frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="./statics/BQCKPMTop.html"> 
                           </iframe>
                           <p class="qwfb_sub01_check">
                               <a class="JKPMS" style="float:right;" vl="100" target="_blank"  href="<?php echo $CATEGORYS['24']['url'];?>">[查看完整表单]</a>
                               <span>M代表百万 K代表千 单位:万美元</span>
                           </p>
                       </div>
                   </div>
                   <div class="qwfb_sub01 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市出口增幅最快企业100强</p>
                       </div>
                       <div class="qwfb_sub01_body">
                          <iframe style="color:#9b0101;" width="420px"; height="227px;" class="framesrc1"  frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="./statics/BQCKPMTop.html"> 
                           </iframe>
                           <p class="qwfb_sub01_check">                           
                               <a style="float:right;" href="<?php echo $CATEGORYS['44']['url'];?>" target="_blank" >[查看完整表单]</a>
                               <span>M代表百万 K代表千 单位:万美元 </span>
                           </p>
                       </div>
                   </div>
                   <div class="qwfb_sub01 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市进口增幅最快企业100强</p>
                       </div>
                       <div class="qwfb_sub01_body">
                           <iframe style="color:#9b0101;" width="420px"; height="227px;" class="framesrc1"  frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="./statics/BQCKPMTop.html"> 
                           </iframe>
                           <p class="qwfb_sub01_check">
                               <a style="float:right;" href="<?php echo $CATEGORYS['45']['url'];?>" target="_blank" >[查看完整表单]</a>
                               <span>M代表百万 K代表千 单位:万美元 </span>
                           </p>
                       </div>
                   </div>
                   <div class="qwfb_sub02 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市出口国家或地区排名</p>
                       </div>
                       <div class="qwfb_sub01_body">
                           <ul class="qwfb_sub02_table01">
                               <!--排名区域标题-->
                               <li class="qwfb_data01">名次</li>
                               <li class="qwfb_data02">国家或地区</li>
                               <li class="qwfb_data03">出口额</li>
                               <li class="qwfb_data04">去年同期</li>
                               <li class="qwfb_data05">同比</li>
                           </ul>
                           <div class="ckgjpm">
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red">
                                       <p> 1</p>
                                   </li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">美国</li>
                                   <li class="qwfb_data03"  style=" text-align:right;" >564686.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">493105.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">14.52%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 2</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">香港</li>
                                   <li class="qwfb_data03"  style=" text-align:right;" >378050.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">274038.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">37.96%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 3</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">马来西亚</li>
                                   <li class="qwfb_data03"  style=" text-align:right;" >196373.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">178087.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">10.27%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 4</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">荷兰</li>
                                   <li class="qwfb_data03"  style=" text-align:right;" >163553.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">146586.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">11.57%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 5</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">日本</li>
                                   <li class="qwfb_data03"  style=" text-align:right;" >97232.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">77482.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">25.49%</li>
                               </ul>
                           </div>

                           <p class="qwfb_sub01_check" style="margin-top: 10px;">

                               <a style="float:right;" target="_blank"  href="<?php echo $CATEGORYS['46']['url'];?>">[查看完整表单]</a>
                               <span></span>
                           </p>
                           <p style="clear:both;"></p>
                       </div>

                   </div>
                   <div class="qwfb_sub02 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市进口国家或地区排名</p>
                       </div>
                       <div class="qwfb_sub01_body">
                           <ul class="qwfb_sub02_table01">
                               <!--排名区域标题-->
                               <li class="qwfb_data01">名次</li>
                               <li class="qwfb_data02">行业名称</li>
                               <li class="qwfb_data03">出口额</li>
                               <li class="qwfb_data04">去年同期</li>
                               <li class="qwfb_data05">同比</li>
                           </ul>
                           <div class="jkgjpm">
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 1</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">美国</li>
                                   <li class="qwfb_data03" style=" text-align:right;">455913.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">187498.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">143.16%</li>
                               </ul>
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 2</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">马来西亚</li>
                                   <li class="qwfb_data03" style=" text-align:right;">230778.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">162046.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">42.42%</li>
                               </ul>
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 3</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">日本</li>
                                   <li class="qwfb_data03" style=" text-align:right;">136804.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">141888.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">-3.58%</li>
                               </ul>
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 4</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">韩国</li>
                                   <li class="qwfb_data03" style=" text-align:right;">134433.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">127118.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">5.76%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 5</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">台湾省</li>
                                   <li class="qwfb_data03" style=" text-align:right;">103044.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">111389.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">-7.49%</li>
                               </ul>
                           </div>
                           <p class="qwfb_sub01_check" style="margin-top: 10px;">
                               <a style="float:right;" target="_blank"  href="<?php echo $CATEGORYS['47']['url'];?>">[查看完整表单]</a>
                               <span>&nbsp;</span>
                           </p>
                       </div>
                   </div>
                   <div class="qwfb_sub02 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市行业出口排名</p>
                       </div>
                       <div class="qwfb_sub01_body">
                           <ul class="qwfb_sub02_table01">
                               <!--排名区域标题-->
                               <li class="qwfb_data01">名次</li>
                               <li class="qwfb_data02">国家或地区</li>
                               <li class="qwfb_data03">出口额</li>
                               <li class="qwfb_data04">去年同期</li>
                               <li class="qwfb_data05">同比</li>
                           </ul>
                           <div class="hyckgjpm">
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 1</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">大中小微型计算机</li>
                                   <li class="qwfb_data03" style=" text-align:right;">894561.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">820780.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">8.99%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 2</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">集成电路及微电子组件</li>
                                   <li class="qwfb_data03" style=" text-align:right;">252207.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">203885.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">23.70%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 3</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">其他杂项产品</li>
                                   <li class="qwfb_data03" style=" text-align:right;">131777.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">107951.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">22.07%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 4</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">鞋类</li>
                                   <li class="qwfb_data03" style=" text-align:right;">100550.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">85450.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">17.67%</li>
                               </ul>
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 5</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">服装</li>
                                   <li class="qwfb_data03" style=" text-align:right;">90594.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">90007.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">0.65%</li>
                               </ul>
                           </div>

                           <p class="qwfb_sub01_check" style="margin-top: 10px;">
                               <a style="float:right;" target="_blank"  href="<?php echo $CATEGORYS['48']['url'];?>">[查看完整表单]</a>
                               <span>&nbsp;</span>    
                           </p>
                       </div>
                   </div>
                   <div class="qwfb_sub02 clearfix">
                       <div class="qwfb_sub01_title">
                           <p>
                               成都市行业进口排名</p>
                       </div>
                       <div class="qwfb_sub01_body">
                           <ul class="qwfb_sub02_table01">
                               <!--排名区域标题-->
                               <li class="qwfb_data01">名次</li>
                               <li class="qwfb_data02">行业名称</li>
                               <li class="qwfb_data03">出口额</li>
                               <li class="qwfb_data04">去年同期</li>
                               <li class="qwfb_data05">同比</li>
                           </ul>
                           <div class="hyjkgjpm">
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 1</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">集成电路及微电子组件</li>
                                   <li class="qwfb_data03" style=" text-align:right;">688417.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">564893.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">0.22%</li>
                               </ul>
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 2</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">其他杂项产品</li>
                                   <li class="qwfb_data03" style=" text-align:right;">131490.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">105882.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">0.24%</li>
                               </ul>
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_red"><p> 3</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">其他机器及零件</li>
                                   <li class="qwfb_data03" style=" text-align:right;">117797.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">89794.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">0.31%</li>
                               </ul>
                               
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 4</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">其他有机化学品</li>
                                   <li class="qwfb_data03" style=" text-align:right;">110987.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">68309.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">0.62%</li>
                               </ul>
                               <ul class="qwfb_sub02_table02"><!--排名区域数据内容-->
                                   <li class="qwfb_data01_grey"><p> 5</p></li><!--排名前三时请用样式qwfb_data01_red-->
                                   <li class="qwfb_data02">半导体器件</li>
                                   <li class="qwfb_data03" style=" text-align:right;">92576.00</li>
                                   <li class="qwfb_data04" style=" text-align:right;">10253.00</li>
                                   <li class="qwfb_data05" style=" text-align:right;">8.03%</li>
                               </ul>
                           </div>

                           <p class="qwfb_sub01_check" style="margin-top: 10px;">
                               <a style="float:right;" target="_blank"  href="<?php echo $CATEGORYS['49']['url'];?>">[查看完整表单]</a>
                               <span>&nbsp;</span>
                           </p>
                       </div>
                   </div>

                   <div class="clear"></div>
               </div>
           </div>
           <!--中间主体977结束-->
           <!--数据分析与预警提示开始-->
           <div class="qwfb_sub03andsub04">
               <div class="qwfb_sub03 clearfix">
                   <div class="qwfb_sub03_title">
                       <p class="qwfb_sub03_title01">
                           数据分析</p>
                       <p class="qwfb_sub03_title02">
                       </p>
                   </div>
                   <div class="qwfb_sub03_body">
                   </div>
               </div>
               <div class="qwfb_sub04 clearfix">
                   <div class="qwfb_sub04_title">
                       <p class="qwfb_sub04_title01">
                           预警提示</p>
                       <p class="qwfb_sub04_title02">
                           <a href="<?php echo $CATEGORYS['79']['url'];?>" target="_blank">更多>></a></p>
                   </div>
                   <div class="qwfb_sub04_body">
                       <ul>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4faa7e401695b46ec5c25d3890029aac&action=lists&catid=79&order=updatetime+DESC&num=4&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>'79','order'=>'updatetime DESC','limit'=>'4',));}?>
                           <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                           <li>
                               <a  href="<?php echo $v['url'];?>" target="_blank">&middot;<b>[<?php echo $v['title'];?>]</b><?php echo str_cut($v['description'],60,'……');?></a>
                           </li>
                          <?php $n++;}unset($n); ?>
                          <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
                       </ul>
                   </div>
               </div>
               <div class="clear">
               </div>
           </div>
           <!--数据分析与预警提示结束-->
       </div>
       <!--中间主体结束-->
       <script src="<?php echo JS_PATH;?>new/BQPMTop.js" type="text/javascript"></script>
       <script type="text/javascript">
           function showMonth() {
               WdatePicker({ skin: 'whyGreen', dateFmt: 'yyyy-MM' });
           }
       
           function into() {
               $(".framesrc1").attr("src", "/Themes/cdweb/htm/BQCKPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
               $(".framesrc2").attr("src", "/Themes/cdweb/htm/BQJKPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
               $(".framesrc3").attr("src", "/Themes/cdweb/htm/BQCKZFPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
               $(".framesrc4").attr("src", "/Themes/cdweb/htm/BQJKZFPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
                               SJinto();
                           }
                           SJinto();
                           //判断是否在谷歌浏览器下
                           if ($.browser.msie) {
                               $(".gjss").hide();
                               document.getElementById($(".ymonth").attr("id")).attachEvent('onpropertychange', function (o) {
                                   if (o.propertyName != 'value')
                                       return;  //不是value改变不执行下面的操作  
                                   into();
                               });
                           } else {
                               $(".gjss").show();
                           }
                           $(".gjss").click(function () {
                               $(".framesrc1").attr("src", "/Themes/cdweb/htm/BQCKPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
                               $(".framesrc2").attr("src", "/Themes/cdweb/htm/BQJKPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
                               $(".framesrc3").attr("src", "/Themes/cdweb/htm/BQCKZFPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
                               $(".framesrc4").attr("src", "/Themes/cdweb/htm/BQJKZFPMTop.aspx?YMonth=" + encodeURIComponent($(".ymonth").val()));
                               SJinto();
                           });
       </script>

       <?php include template("content","footer"); ?>
    </body>
</html>
