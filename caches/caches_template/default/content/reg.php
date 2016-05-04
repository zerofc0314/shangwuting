<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><a href="/">平台首页</a>&nbsp;<img src="<?php echo IMG_PATH;?>new/f_03.png" />
<input name="ctl00$dlyhid" type="text" id="ctl00_dlyhid" style="display: none;" class="dlyhid" value="-1" /> 
 <?php
 $userid = param::get_cookie('_userid');//获取用户id
 ?>
 <?php if($userid) { ?>
 您好, <?php echo get_nickname();?>, <a href="<?php echo APP_PATH;?>index.php?m=member&siteid=<?php echo $siteid;?>" target="_blank">会员中心</a> <a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=logout&forward=<?php echo urlencode(get_url());?>&siteid=<?php echo $siteid;?>">退出</a>
 <?php } else { ?>
 您好，请<a href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=login&forward=<?php echo urlencode(get_url());?>&siteid=<?php echo $siteid;?>" class="login">登录</a> | <a target="_blank" href="<?php echo APP_PATH;?>index.php?m=member&c=index&a=register&siteid=<?php echo $siteid;?>" class="reg" style="padding:0px;">免费注册</a>
 <?php } ?><a target="_blank" href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&key=1741108471" style="text-decoration: none; color: #FF0000;">
    <img src="<?php echo IMG_PATH;?>new/qq_03.gif" /></a>
<a href="#" style="display: none;" onclick="addBookmark('江西', location.href);">加入收藏</a> 

                