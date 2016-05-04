<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div style="width:994px;margin:0 auto;">         
    <div class="top_ss">
        <a target="_blank" href="#">
            <img src="<?php echo IMG_PATH;?>new/know_03.gif" />
            <div class="know_title">
                外贸知道</div>
        </a>
         <form method="get" name="search">
            <input type="hidden" name="m" value="search"/>
            <input type="hidden" name="c" value="index"/>
            <input type="hidden" name="a" value="init"/>
            <input type="hidden" name="typeid" value="62" id="typeid"/>
            <input type="hidden" name="siteid" value="1" id="siteid"/>
        
        <div class="kuang">
            <input type="text" class="txtvlaue ipt" style="font-size: 12px;" name="q" id="q"/></div>
            <div class="ss">
            <!--<a class="ssda" id="ssda" href="#">--><input type="submit" id="ssda" class="ssda btnzccx_2" value="搜索答案"  style="border:none;;background:none;width:60px;*margin-left:-12px;"/>
        </div>
         </form>
        <div class="tw">
            <a class="wytw" id="wytw" href="<?php echo APP_PATH;?>index.php?m=member&c=content&a=publish">我要提问</a></div>
        <div class="hd">
            <a class="wyhd" id="wyhd" href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=149">我要回答</a></div>
        <script src="<?php echo JS_PATH;?>new/WMZDSS.js" type="text/javascript"></script>
        <div class="hot">
            <b>热点搜索：</b><a target="_blank" href="<?php echo $CATEGORYS['5']['url'];?>">资金申报</a> <a target="_blank"
                href="<?php echo $CATEGORYS['4']['url'];?>">政策法规</a> <a target="_blank" href="<?php echo $CATEGORYS['25']['url'];?>">
                    最新公告</a></div>
        <div class="clear">
        </div>
    </div>
</div>
    </div>
    <!--以上是头部-->