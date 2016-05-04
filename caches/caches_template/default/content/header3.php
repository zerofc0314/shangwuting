<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><form name="aspnetForm" method="post" action="CKTSIndex.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTU4NjI1NTM1NWRkzR06nQr1Pop3QGWUoRVMeSOTB09jcHZOMiNS8yCBYR4=" />
</div>

<div>
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBALWk4WsCgL1yOG9DQLI0M+DBQKj9ZCLBlzQolHRTXS2HOB32m0j696Uw3C7dia3rgSpL3gb37UV" />
</div>
	<div class="box">
       <div class="top">
         <div class="top_1 clear">
                <div style="float:left;"><a href="/Index.aspx" style="display:inline-block;*display:inline;*zoom:1;width:500px;height:50px;margin-top:20px;"></a></div>
          <div class="top_a">
                 <input type="submit" name="ctl00$btn_exit" value="Button" id="ctl00_btn_exit" class="btn_exit" style="display:none;" />
                
                    <div class="login_next">
                    
                    </div>
                    <div class="clear">
                    </div>
                    <script language="javascript" type="text/javascript">
                        $(".log_out").click(function () {
                            if (confirm("您确定要退出登录吗？")) {
                                $(".btn_exit").click();
                            }
                        });
                     </script>
                    
                     <?php include template("content","reg"); ?>
                     
                    <div class="date">
                          <script>
                        var myDate = new Date();
                        var now_year=myDate.getFullYear();    //获取完整的年份(4位,1970-????)
                        var now_month=myDate.getMonth()+1;       //获取当前月份(0-11,0代表1月)
                        var now_date=myDate.getDate();        //获取当前日(1-31)
                        var now_day=myDate.getDay();         //获取当前星期X(0-6,0代表星期天)
                        var week=['天','一','二','三','四','五','六'];
                        for(var i=0;i<7;i++){
                          if(now_day==i){
                              now_day=week[i];
                          }
                        }
                        document.write('今天是'+now_year+'年'+now_month+'月'+now_date+'号'+'&nbsp;星期'+now_day+'&nbsp;');
                   </script>
                         <iframe style="color:#9b0101; filter: Chroma(Color=white);" width="140px"; height="17px;" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" src="./statics/meather.html"></iframe>
                    </div>
                </div>
          </div>
           
        <?php include template("content","header_ckts"); ?>
           
       </div>
       <div class="clear"></div>
