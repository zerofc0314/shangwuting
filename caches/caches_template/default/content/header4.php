<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><form name="aspnetForm" method="post" action="WMZDList.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNDYwNjkxMzY2ZGSpRHyO+++fui7D04shsJCAkmf1/52qEICFRSspk9HS6w==" />
</div>

<div>
    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWAwKJ8ZLRCAL1yOG9DQLI0M+DBedgpW0SSgMFDMtwaSabm0xSPCgSj3syiKF1noRJIeAB" />
</div>
    <div class="wmzd_top">
        <div class="wmzd_top_title">
        <input type="submit" name="ctl00$btn_exit" value="Button" id="ctl00_btn_exit" class="btn_exit" style="display:none;" />
            <div class="dl_next">    
                </div>
                <script language="javascript" type="text/javascript">
                    $(".log_out").click(function () {
                        if (confirm("您确定要退出登录吗？")) {
                            $(".btn_exit").click();
                        }
                    });
                 </script>
            <div class="top_a" style="margin-top: 8px;">
               <?php include template("content","reg"); ?>
            </div>
            
            <div class="know_ss" >
                <a href="/WMZD/WMZDIndex.aspx" style="float:left;width:200px;height:40px;display:inline-block;*display:inline;*zoom:1;"></a>
                <div class="know_ss_k">
                    <input type="text" style="font-size: 12px; height: 20px; padding-top: 5px;" class="txtvlaue" /></div>
                <div class="know_ss_ssda ssda_hover">
                    <a href="#" id="ssda">搜索答案</a></div>
                <div class="know_ss_ssda">
                    <a href="<?php echo APP_PATH;?>index.php?m=member&c=content&a=publish" id="wytw">我要提问</a></div>
                <div class="know_ss_ssda">
                    <a href="<?php echo APP_PATH;?>index.php?m=content&c=index&a=lists&catid=149" id="wyhd">我要回答</a></div>
                <input name="ctl00$dlyhid" type="text" id="ctl00_dlyhid" style="display: none;" class="dlyhid" value="-1" />
            </div>
            <script src="/Themes/cdweb/js/WMZDSS.js" type="text/javascript"></script>
            <div class="know_hot">
                <b>热点搜索：</b><a target="_blank" href="/ZJSB/ZJSBIndex.aspx">资金申报</a> <a target="_blank"
                    href="/ZCFG/ZCFGIndex.aspx">政策法规</a> <a target="_blank" href="/LMNR/LMNRList.aspx?LMID=822">
                        最新公告</a>
            </div>
        </div>
    </div>
