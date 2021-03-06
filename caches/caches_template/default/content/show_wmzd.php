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
        <script src="<?php echo JS_PATH;?>new/DJCSTJ.js" type="text/javascript"></script>
    </head>
    <body>
       <?php include template("content","header4"); ?>
      </div>
      
      <div class="wmzd_mid">
          <div class="wmzd_cont_left">
              <div class="wzxx">
                  <a href="WMZDIndex.aspx">频道首页</a> > <a href="WMZDList.aspx">所有分类</a> >
                  <a href="/WMZD/WMZDList.aspx?LMBH=01" target="_blank">报检</a>
                  >
                  <a  href="/WMZD/WMZDList.aspx?LMBH=01&&ZJBH=0101" target="_blank">证书办理流程</a>
              </div>
              <div class="wmzd_wt">
                  <div class="wmzd_wt_img">
                      <img src="./statics/images/new/wenhao_06.jpg" /></div>
                  <div class="wmzd_wt_nr">
                      <span class="WT_wt">
                        <?php echo $title;?>?
                      </span>
                      <div class="tw_sj">
                          <span class="twz">提问者:</span>
                          系统管理员
                          <span>|</span> <span class="twz">浏览次数:</span>
                          206
                      </div>
                      <span class="TW_sj">
                          <?php echo $inputtime;?></span>
                      <div class="clear">
                      </div>
                      <div class="xx_word">
                          <?php echo $question_content;?>
                      </div>
                      <div class="TW_jd">
                          <div class="TW_hd">

                          </div>
                          <script type="text/javascript">
                              $(".wlbtjdsffb").click(function () {
                                  var sf = confirm("你确定要发布/取消发布该信息？");
                                  if (!sf) {
                                      return false;
                                  }
                                  else {
                                      $(".btnwlbtjdsffb").click();
                                  }
                              });
                              $(".wlbtjdsftj").click(function () {
                                  var sf = confirm("你确定要推荐/取消推荐该信息？");
                                  if (!sf) {
                                      return false;
                                  }
                                  else {
                                      $(".btnwlbtjdsftj").click();
                                  }
                              });
                              $(".wlbtjdxg").click(function () {
                                  window.top.createDIV(window, "/Manage/WMZD/WMZDEdit.aspx?PKID=184&YHID=-1&FLBH=0101", "问题修改", 800, 300, window);
                              });
                          </script>
                      </div>
                      <?php if($allow_comment && module_exists('comment')) { ?>
                      <iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=answer&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>
                      <?php } ?>
                      <input type="submit" name="ctl00$ContentPlaceHolder1$btn" value="Button" id="ctl00_ContentPlaceHolder1_btn" class="tophd" style="display: none;" />
                      <input name="ctl00$ContentPlaceHolder1$tophdid" type="text" id="ctl00_ContentPlaceHolder1_tophdid" class="tophdid" style="display: none;" />
                      <input name="ctl00$ContentPlaceHolder1$wthfztsf" type="text" id="ctl00_ContentPlaceHolder1_wthfztsf" class="wthfztsf" style="display: none;" />
                      <input name="ctl00$ContentPlaceHolder1$hfvalue" type="text" id="ctl00_ContentPlaceHolder1_hfvalue" class="hfvalue" style="display: none;" />
                      <input name="ctl00$ContentPlaceHolder1$lyryhid" type="text" id="ctl00_ContentPlaceHolder1_lyryhid" class="lyryhid" style="display: none;" />
                      <input name="ctl00$ContentPlaceHolder1$sfhfxz" type="text" id="ctl00_ContentPlaceHolder1_sfhfxz" class="sfhfxz" style="display: none;" />

                      <input type="submit" name="ctl00$ContentPlaceHolder1$hfbtnxx" value="" id="ctl00_ContentPlaceHolder1_hfbtnxx" class="hfbtnxx" style="display: none;" />

                      <input type="submit" name="ctl00$ContentPlaceHolder1$btnswzjda" value="" id="ctl00_ContentPlaceHolder1_btnswzjda" class="btnswzjda" style="display: none;" />
                      <input type="submit" name="ctl00$ContentPlaceHolder1$btnhfjj" value="" id="ctl00_ContentPlaceHolder1_btnhfjj" class="btnhfjj" style="display: none;" />
                      <input type="submit" name="ctl00$ContentPlaceHolder1$btnhfqxfb" value="" id="ctl00_ContentPlaceHolder1_btnhfqxfb" class="btnhfqxfb" style="display: none;" />
                      <input type="submit" name="ctl00$ContentPlaceHolder1$btnjchfqxfb" value="" id="ctl00_ContentPlaceHolder1_btnjchfqxfb" class="btnjchfqxfb" style="display: none;" />

                  </div>
                  <div class="clear">
                  </div>
              </div>
              <!--以上是我来帮他解答-->

              <div class="clear">
              </div>
              <!--以上是满意回答-->
              <div class="dengd_hd">
                  <div class="dengd_hd_nav">
                      <span>
                          <img src="./statics/images/new/ddai_27.jpg" />等待您来回答</span> <a target="_blank"
                                                                                       href="/WMZD/WMZDList.aspx?WTZT=2">更多>></a>
                  </div>
                  <div class="dengd_hd_cont">
                      <ul>
                          <li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=714&&LMBH=">我正在做测试</a><span>2016/3/24 17:24:04</span><div class="clear"></div></li><li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=713&&LMBH=0303">外贸企业使用退税申报系统V17.0报盘到窗口审核不通过</a><span>2016/3/23 14:14:11</span><div class="clear"></div></li><li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=712&&LMBH=0302">三证合一后，原纳税人识别号开具的发票还能不能申请出口退税？</a><span>2016/1/7 14:51:59</span><div class="clear"></div></li><li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=711&&LMBH=0302">被关注商品的界限有哪些</a><span>2015/12/18 14:08:31</span><div class="clear"></div></li><li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=710&&LMBH=0301">老企业变更经营范围后税号变为社会信用代码，影响出口退税么？</a><span>2015/11/17 15:30:06</span><div class="clear"></div></li><li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=709&&LMBH=0301">打印到excel提示“ole错误”如何解决？</a><span>2015/11/12 17:29:35</span><div class="clear"></div></li><li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=708&&LMBH=0301">出口货物报关单出口金额打错了，如何进行退税申报？</a><span>2015/11/12 15:16:13</span><div class="clear"></div></li><li><a  target="_blank"  href="/WMZD/WMZDDetail.aspx?PKID=707&&LMBH=0301">如何将申报系统的报表数据导出到excel当中？</a><span>2015/11/12 15:14:09</span><div class="clear"></div></li>
                      </ul>
                  </div>
              </div>
              <!--以上是等待回答-->
              <br />
              &nbsp;
              <div class="bshare-custom" style="padding-left: 10px;">
                  <a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">
                      分享到</a><a title="分享到QQ空间" class="bshare-qzone">QQ空间</a><a title="分享到新浪微博" class="bshare-sinaminiblog">新浪微博</a><a
                      title="分享到人人网" class="bshare-renren">人人网</a><a title="分享到腾讯微博" class="bshare-qqmb">腾讯微博</a><a
                      title="分享到豆瓣" class="bshare-douban">豆瓣</a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span
                      class="BSHARE_COUNT bshare-share-count">0</span></div>
              <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
              <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
          </div>
          <div class="wmzd_gg">



              <div class="zdpm">
                  <div class="zdpm_title">
                      <span>本周知道之星</span>
                      <!-- <div class="clear"></div> -->
                  </div>
                  <div class="zdpm_cont">
                      <ul>
                          <li><span>1</span><a href="OneWMZDList.aspx?AYH=1&YHID=11577" target="_blank">Lemon Luo</a></li>
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
                          <li><span>100</span><a href="OneWMZDList.aspx?AYH=1&YHID=8921" target="_blank">陈晓林</a></li><li><span>100</span><a href="OneWMZDList.aspx?AYH=1&YHID=8920" target="_blank">涂旭风</a></li><li><span>20</span><a href="OneWMZDList.aspx?AYH=1&YHID=8919" target="_blank">徐海霞</a></li><li><span>0</span><a href="OneWMZDList.aspx?AYH=1&YHID=11577" target="_blank">Lemon Luo</a></li>
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
                          <li><span>114</span><a href="OneWMZDList.aspx?AYH=1&YHID=8163" target="_blank">侯德均</a></li><li><span>64</span><a href="OneWMZDList.aspx?AYH=1&YHID=1" target="_blank">系统管理员</a></li><li><span>25</span><a href="OneWMZDList.aspx?AYH=1&YHID=9314" target="_blank">求石</a></li><li><span>20</span><a href="OneWMZDList.aspx?AYH=1&YHID=10142" target="_blank">34553639@qq.com</a></li><li><span>14</span><a href="OneWMZDList.aspx?AYH=1&YHID=9574" target="_blank">fire</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="clear">
          </div>
      </div>
      <script src="/Themes/cdweb/js/YHDLJS/YHDL.js" type="text/javascript"></script>
      <script language="javascript" type="text/javascript">
                              var tablename = 'ZD_WT';
                              var pkid = '184';
                              GXDJCS(tablename, pkid);

                              $("#sub").click(function () {
                                  $(".txt_hd").val($("#txt").text());
                                  $(".tophd").click();
                              });

                              //改变普通回答 支持的数目
                              $(".tjpl_zs").click(function () {
                                  var topbtli = this;
                                  $(".tjpl_zs").each(function () {
                                      if (this == topbtli) {
                                          $(".tophdid").val($(this).attr("qtvl"));
                                          $(".tophd").click();
                                      }
                                  });
                              });


                              //显示隐藏 回复框
                              $(".zxhf").click(function () {
                                  if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
                                      var Button = $(this).attr("id");
                                      var yhid = $(".dlyhid").attr("id");
                                      window.top.createDIV(window, "/Themes/cdweb/htm/Login.aspx?Controls=" + yhid + "&Button=" + Button, "用户登录", 450, 265, window, "", "", true);
                                      return false;
                                  }
                                  var topbtli = this;
                                  $(".TW_hdhf").hide();
                                  $("#" + $(topbtli).attr("zxhfid")).show();
                                  return false;
                              });
                              //隐藏取消回复
                              $(".hfclose").click(function () {
                                  $(".TW_hdhf").hide();
                                  into();
                                  intohf();
                              });

                              //隐藏提交失败提示
                              function intohf() {
                                  $(".lbltjsbhf").hide();
                              }
                              intohf();
                              //验证回复是否为空 为空则不能完成操作
                              $(".hftj").click(function () {
                                  //alert($(this).parent().parent().parent().find(".lyrid").val());
                                  if ($(this).parent().parent().parent().parent().parent().parent().find(".srhfnr").val().replace(" ", "").replace(" ", "") == "" || $(this).parent().parent().parent().parent().parent().parent().find(".srhfnr").val() == "请输入回复内容!") {
                                      $(".lbltjsbhf").show();
                                      return false;
                                  } else {
                                      $(".lyryhid").val($(this).parent().parent().parent().parent().parent().parent().find(".lyrid").val());
                                      $(".hfvalue").val($(this).parent().parent().parent().parent().parent().parent().find(".srhfnr").val());
                                      if ($(this).parent().parent().parent().parent().parent().find(".qrnmhf").attr("checked") == true) {
                                          $(".sfhfxz").val(1);
                                      } else {
                                          $(".sfhfxz").val(0);
                                      }
                                      $(".hfbtnxx").click();
                                      intohf();
                                  }
                                  return false;
                              });

                              //隐藏提交失败提示
                              function into() {
                                  $(".lbltjsb").hide();
                              }
                              into();
                              $(".wlbtjdtj").click(function () {
                                  if ($(".wlbtjdwt").val().replace(" ", "") != "" && $(".wlbtjdwt").val() != "请输入您的回答!") {
                                      if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
                                          var Button = $(".btnbtjd").attr("id");
                                          var yhid = $(".dlyhid").attr("id");
                                          window.top.createDIV(window, "/Themes/cdweb/htm/Login.aspx?Controls=" + yhid + "&Button=" + Button, "用户登录", 450, 265, window, "", "", true);
                                          return false;
                                      }
                                      into();
                                  } else {
                                      $(".lbltjsb").show();
                                      return false;
                                  }
                                  if ($(".wlbtjdwt").val() != "" && $(".wlbtjdwt").val() != "请输入您的回答!") {
                                      $(".txtwlbtjdtj").val($(".wlbtjdwt").val());
                                      $(".btnbtjd").click();
                                      into();
                                  } else {
                                      $(".lbltjsb").show();
                                      return false;
                                  }
                              });



                              //
                              //设为最佳答案
                              $(".swzjda").click(function () {
                                  var topbtli = this;
                                  $(".swzjda").each(function () {
                                      if (this == topbtli) {
                                          var sf = confirm("你确定要将该信息设为最佳答案？");
                                          if (!sf) {
                                              return false;
                                          }
                                          else {
                                              $(".tophdid").val($(this).attr("zjdaid"));
                                              $(".btnswzjda").click();
                                          }
                                      }
                                  });
                              });
                              //回复加精
                              $(".hfjj").click(function () {
                                  var topbtli = this;
                                  $(".hfjj").each(function () {
                                      if (this == topbtli) {
                                          var sf = confirm("你确定要将该信息设为加精？");
                                          if (!sf) {
                                              return false;
                                          }
                                          else {
                                              $(".tophdid").val($(this).attr("hfjjid"));
                                              $(".btnhfjj").click();
                                          }
                                      }
                                  });
                              });
                              //取消发布/ 发布
                              $(".hfqxfb").click(function () {
                                  var topbtli = this;
                                  $(".hfqxfb").each(function () {
                                      if (this == topbtli) {
                                          var sf = confirm("你确定要将该信息设为发布/取消发布状态？");
                                          if (!sf) {
                                              return false;
                                          }
                                          else {
                                              $(".tophdid").val($(this).attr("hfqxfbid"));
                                              $(".wthfztsf").val($(this).attr("wthfztsf"));
                                              $(".btnhfqxfb").click();
                                          }
                                      }
                                  });
                              });

                              //取消发布/ 发布  精彩那块
                              $(".jchfqxfb").click(function () {
                                  var topbtli = this;
                                  $(".jchfqxfb").each(function () {
                                      if (this == topbtli) {
                                          var sf = confirm("你确定要将该信息设为发布/取消发布状态？");
                                          if (!sf) {
                                              return false;
                                          }
                                          else {
                                              $(".tophdid").val($(this).attr("jchfqxfbid"));
                                              $(".btnjchfqxfb").click();
                                          }
                                      }
                                  });
                              });


                              //对回复的修改
                              $(".hfxg").click(function () {
                                  var topbtli = this;
                                  $(".hfxg").each(function () {
                                      if (this == topbtli) {
                                          window.top.createDIV(window, "/Manage/WMZD/WMZDHFEdit.aspx?PKID=" + $(this).attr("hfxgid"), "问题修改", 800, 300, window);
                                      }
                                  });
                              });


                              objFocusNote($(".wlbtjdwt"), "请输入您的回答!");


      </script>
      <script src="<?php echo JS_PATH;?>new/WMZDSS.js" type="text/javascript"></script>

      
       <?php include template("content","footer1"); ?>
     <script src="<?php echo JS_PATH;?>new/WMZDSS.js" type="text/javascript"></script>
    </body>
</html>
