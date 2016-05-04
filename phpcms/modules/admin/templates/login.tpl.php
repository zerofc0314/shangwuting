<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>用户登录</TITLE>
        <LINK href="./statics/admin/images/Default.css" type=text/css rel=stylesheet>
        <LINK href="./statics/admin/images/xtree.css" type=text/css rel=stylesheet>
        <LINK href="./statics/admin/images/User_Login.css" type=text/css rel=stylesheet>
        <META http-equiv=Content-Type content="text/html; charset=utf-8">
        <META content="MSHTML 6.00.6000.16674" name=GENERATOR>
    </HEAD>
    <BODY id=userlogin_body>
        <DIV></DIV>
        <DIV id=user_login>
            <DL>
                <DD id=user_top>
                    <UL>
                        <LI class=user_top_l></LI>
                        <LI class=user_top_c></LI>
                        <LI class=user_top_r></LI></UL>
                <DD id=user_main>
                    <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
                        <UL>
                            <LI class=user_main_l></LI>
                            <LI class=user_main_c>
                                <DIV class=user_main_box>
                                    <UL>
                                        <LI class=user_main_text>用户名： </LI>
                                        <LI class=user_main_input>
                                            <INPUT class=TxtUserNameCssClass id=username maxLength=20 name=username> </LI></UL>
                                    <UL>
                                        <LI class=user_main_text>密 码： </LI>
                                        <LI class=user_main_input>
                                            <INPUT class=TxtPasswordCssClass id=TxtPassword  type=password name=password></LI></UL>
                                    <UL>
                                        <LI class=user_main_text>验证码： </LI>
                                        <LI class=user_main_input>
                                            <input name="code" type="text" class="TxtValidateCodeCssClass"/>
                                            <a href="javascript:document.getElementById('code_img').src='<?php echo SITE_PROTOCOL . SITE_URL . WEB_PATH; ?>api.php?op=checkcode&m=admin&c=index&a=checkcode&time='+Math.random();void(0);">
                                            <?php echo form::checkcode('code_img',4,14,95,25) ?>
                                            </A>
                                        </LI>
                                    </UL>
                                </DIV>
                            </LI>
                            <LI class=user_main_r>
                                <INPUT class=IbtnEnterCssClass id=IbtnEnter  style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; BORDER-RIGHT-WIDTH: 0px" 
                                       type=image src="./statics/admin/images/user_botton.gif" name=IbtnEnter>
                            </LI>
                        </UL>
                    </form>
                <DD id=user_bottom>
                    <UL>
                        <LI class=user_bottom_l></LI>
                        <LI class=user_bottom_c> </LI>
                        <LI class=user_bottom_r></LI></UL></DD></DL></DIV>
        <SPAN id=ValrUserName style="DISPLAY: none; COLOR: red"></SPAN>
        <SPAN id=ValrPassword style="DISPLAY: none; COLOR: red"></SPAN>
        <SPAN id=ValrValidateCode style="DISPLAY: none; COLOR: red"></SPAN>
        <DIV id=ValidationSummary1 style="DISPLAY: none; COLOR: red"></DIV>
        <DIV></DIV>
    </FORM>
</BODY>
</HTML>
