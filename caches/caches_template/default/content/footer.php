<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<div class="foot">
    <div class="pt_body  clear" id="piclist" style="overflow:hidden;height:50px;width: 994px;">
        <div class="parter_list " id="piclist1" style="width:2570px; height:50px;">
            <ul class="picScroll1">
                
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=0129e0b5dcc1bb14adee5c75da781087&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=20&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
                <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                <li>
                    <a href="<?php echo $v['url'];?>" target="_blank">
                        <img src="<?php echo $v['logo'];?>" width="160" height="40" />
                    </a>
                </li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".picScroll1").bx_picScrollByStep({
                oneStepWidth: 160,
                oneStepTime: 499,
                oneStepStopTime: 2099,
                flag: true
            });
        });

    </script>


    <div class="pt_body clear" style="margin: auto;width:994px;">
        <div class="friend_link_title"><a href="#">友情<br />链接</a></div>
        <div class="friend_link" >
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=ee8d84bc495ac20e742876b3361a0a3c&action=type_list&siteid=%24siteid&order=listorder+DESC&num=14&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'14',));}?>
            <?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
            <div style="overflow:hidden;margin-left:20px;width:98px; height:37px;">
                <a href="<?php echo $v['url'];?>" target="_blank">·<?php echo $v['name'];?></a>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            
        </div>
    </div>
    <div class="clear"></div>


    <div style="width:100%;background: #cccccc;">
    <div class="foot_link">
        <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=844">合作机构</a>| 
        <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=845">平台介绍</a> | 
        <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=846">平台荣誉</a>| 
        <a target="_blank" href="/QXFM/List.aspx?LMID=104&XJLMID=105">平台动态</a>|
        <a target="_blank" href="/QXFM/List.aspx?LMID=104&XJLMID=847">媒体关注</a>|
        <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=848"> 服务团队</a>|
        <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=849">联系我们</a>| 
        <a target="_blank" href="/QXFM/Index.aspx?LMID=104&XJLMID=850">区县平台</a>
    </div>
    <div class="foot_xx">
        <ul>
            <li>蜀ICP备08001965号 经营许可证编号川B2-20110011 </li>
            <li>Copyright Reserved © 2016 江西外贸公共服务平台(www.xxxxx.com.cn) </li>
        </ul>
    </div>
    </div>
</div>
</div>




<script type="text/javascript">
        $(".menu li").mouseover(function () {
            var src = $(this).find("img").attr("src");
            src = src.replace(".jpg", "_hover.jpg");
            $(this).find("img").attr("src", src)
        })
        $(".menu li").mouseout(function () {
            var src = $(this).find("img").attr("src");
            src = src.replace("_hover.jpg", ".jpg")
            $(this).find("img").attr("src", src)
        })
</script>
<script src="<?php echo JS_PATH;?>new/AddFavortie.js" type="text/javascript"></script>

<script type="text/javascript">
        //显示隐藏 回复框
        $(".yhdl").click(function () {
            if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {
                var Button = $(this).attr("id");
                window.top.createDIV(window, "login_line.html", "用户登录", 450, 265, window, "", "", true);
                return false;
            } else
            {
                window.location = "/";
            }
            return false;
        });


        //未读信件数量加载
        function xjinto() {
            if ($(".dlyhid").val() == "-1" || $(".dlyhid").val() == "") {

            } else
            {
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
