<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="box" style="width:100%;">
    <div class="foot">



        <div class="pt_body  clear" id="piclist" style="overflow:hidden;height:50px;width:994px;margin:auto;">
            <div class="parter_list " id="piclist1" style="width:1600px; height:50px;">
                <ul >
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=0129e0b5dcc1bb14adee5c75da781087&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=20&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
                     <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                    <li><a href="<?php echo $v['url'];?>" target="_blank">
                            <img src="<?php echo $v['logo'];?>" style="width:150px; height:50px;"/></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            var timespan1 = 500; //每屏划过时间
            var timespan2 = 3000; //切屏间隔时间
            function gotop() {
                animtop();
                stopexe = setTimeout("gotop()", timespan2);
            }
            ;
            function animtop() {
                $(".parter_list").animate({
                    marginLeft: "-=160"
                }, timespan1, function () {
                    if ($(".parter_list").css("margin-left").toString() == "-1600px") {
                        $(".parter_list").css("margin-left", "0px");
                    }
                });
            }
            var stopexe;
            stopexe = setTimeout("gotop()", timespan2);
            $(".parter_list").mouseover(function () {
                clearTimeout(stopexe);

            });
            $(".parter_list").mouseout(function () {
                stopexe = setTimeout("gotop()", timespan2);
            });
        </script>


        <div class="pt_body clear" style="width:994px;margin:auto;">
            <div class="friend_link_title"><a href="#">友情<br />链接</a></div>
            <div class="friend_link" >
                 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=ee8d84bc495ac20e742876b3361a0a3c&action=type_list&siteid=%24siteid&order=listorder+DESC&num=14&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'14',));}?>
                 <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
                <div style="overflow:hidden;margin-left:20px;width:98px; height:37px;"><a href="<?php echo $v['url'];?>" target="_blank">· <?php echo $v['name'];?></a></div>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                
            </div>
        </div>
        <div class="clear"></div>




        <div style="background:#ccc;">
        <div class="foot_link">
            <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=844">合作机构</a>| <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=845">平台介绍</a> | <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=846">平台荣誉</a>| <a target="_blank" href="/QXFM/List.aspx?LMID=104&XJLMID=105">平台动态</a>
            | <a target="_blank" href="/QXFM/List.aspx?LMID=104&XJLMID=847">媒体关注</a>|<a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=848"> 服务团队</a>| <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=849">联系我们</a>| <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=850">区县平台</a>
        </div>
        <div class="foot_xx">
            <ul>
                <li>蜀ICP备08001965号 经营许可证编号川B2-20110011 </li>
                <li>Copyright Reserved © 2016 江西对外外贸公共服务平台(www.xxxxx.com.cn) </li>
            </ul>
        </div>
        </div>
        
    </div>
</div>
<input type="hidden" id="QQ" class="QQ" value='<tr><td><table border="0" cellpadding="2" width="100%" style="background:#efefef;"><tbody><tr><td height="23" valign="top" width="5"></td><td class="qq" valign="bottom"><a target="_blank" href=" tencent://message/?uin=1054247883&site=qq&menu=yes" style="text-decoration: none; color: #FF0000;"><img border="0" src=" http://wpa.qq.com/pa?p=2:1054247883:45" alt="1054247883" title="客服一" style="display: block; float: left;"><span style="display: block; float: left; height: 21px; line-height: 21px; text-indent: 5px;">客服一</span></a></td></tr></tbody></table></td></tr><tr><td><table border="0" cellpadding="2" width="100%" style="background:#efefef;"><tbody><tr><td height="23" valign="top" width="5"></td><td class="qq" valign="bottom"><a target="_blank" href=" tencent://message/?uin=2444393909&site=qq&menu=yes" style="text-decoration: none; color: #FF0000;"><img border="0" src=" http://wpa.qq.com/pa?p=2:2444393909:45" alt="2444393909" title="客服二" style="display: block; float: left;"><span style="display: block; float: left; height: 21px; line-height: 21px; text-indent: 5px;">客服二</span></a></td></tr></tbody></table></td></tr><tr><td><table border="0" cellpadding="2" width="100%" style="background:#efefef;"><tbody><tr><td height="23" valign="top" width="5"></td><td class="qq" valign="bottom"><a target="_blank" href=" tencent://message/?uin=2413674687&site=qq&menu=yes" style="text-decoration: none; color: #FF0000;"><img border="0" src=" http://wpa.qq.com/pa?p=2:2413674687:45" alt="2413674687" title="客服三" style="display: block; float: left;"><span style="display: block; float: left; height: 21px; line-height: 21px; text-indent: 5px;">客服三</span></a></td></tr></tbody></table></td></tr><tr><td><table border="0" cellpadding="2" width="100%" style="background:#efefef;"><tbody><tr><td height="23" valign="top" width="5"></td><td class="qq" valign="bottom"><a target="_blank" href=" tencent://message/?uin=1052642794&site=qq&menu=yes" style="text-decoration: none; color: #FF0000;"><img border="0" src=" http://wpa.qq.com/pa?p=2:1052642794:45" alt="1052642794" title="客服四" style="display: block; float: left;"><span style="display: block; float: left; height: 21px; line-height: 21px; text-indent: 5px;">客服四</span></a></td></tr></tbody></table></td></tr>' />
<input name="ctl00$WZMC" type="text" value="成都平台" id="ctl00_WZMC" class="WZMC" style="display: none;" />
<script src="qqfixed/qqfixed.js" type="text/javascript"></script>
<script src="<?php echo IMG_PATH;?>new/AddFavortie.js" type="text/javascript"></script>
<script type="text/javascript">
            //显示隐藏 回复框
            $(".yhdl").click(function () {
                if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
                    var Button = $(this).attr("id");
                    window.top.createDIV(window, "/Themes/cdweb/htm/Login.aspx?Controls=dlyhid&Button=ZJDL", "用户登录", 450, 265, window, "", "", true);
                    return false;
                } else {
                    window.location = "/Manage/MainFrame1/index.aspx";
                }
                return false;
            });


            //未读信件数量加载
            function xjinto() {
                if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {

                } else {
                    $.ajax({
                        async: true, //是否异步
                        type: "GET",
                        url: "/AjaxHandler/cdweb/XJNum.ashx?" + Math.random() + "&YHID=" + $(".dlyhid").val() + "&JSID=" + $(".dlyhjsid").val() + "&" + Math.random(),
                        dataType: "html",
                        beforeSend: function (XMLHttpRequest) {
                        },
                        success: function (Msg, textStatus) {
                            $(".youjian").html(Msg);
                        },
                        complete: function (XMLHttpRequest, textStatus) {
                        },
                        error: function () {
                        }
                    });

                }
            }
            xjinto();
            //每10分钟自动检测是否收到新的消息
            setInterval(function () {
                window.location = window.location;
            }, 1000 * 60 * 10);


</script>
</form>
