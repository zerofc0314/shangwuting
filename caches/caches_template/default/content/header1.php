<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
    <div>
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="ZTyOOwgQ9o" />
    </div>

    <div>
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWIQKMwKnwDwL1yOG9DQLI0M+DBQLO1Z2=" />
    </div>
    <div class="box">
        <div class="top">
            <div class="top_1 clear">
                <div style="float:left"><a href="/Index.aspx" style="display:inline-block;*display:inline;*zoom:1;width:500px;height:50px;margin-top:20px;"></a></div>
                <div class="top_a">
                    <input type="submit" name="ctl00$btn_exit" value="Button" id="ctl00_btn_exit" class="btn_exit" style="display:none;" />
                    <div class="login_next">
                    </div>
                    <script language="javascript" type="text/javascript">
                        $(".log_out").click(function () {
                            if (confirm("您确定要退出登录吗？")) {
                                $(".btn_exit").click();
                            }
                        });
                    </script>
                    <div class="clear">
                    </div>
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
           <?php include template("content","header_zhzl"); ?>  
        </div>
        <div class="clear"></div>

