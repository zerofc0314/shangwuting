<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><form name="aspnetForm" method="post" action="GJHHIndex.aspx?ZHID=180" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="jj" />
</div>
<div>
    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="hh" />
</div>
    <div class="box">
       <div class="top">
         <div class="top_1 clear">
           <div style="float:left"><a href="/Index.aspx" style="display:inline-block;*display:inline;*zoom:1;width:500px;height:50px;margin-top:20px;"></a></div>
           <div class="top_a">
            <input type="submit" name="ctl00$btn_exit" value="Button" id="ctl00_btn_exit" class="btn_exit" style="display:none;" />
                
                    <div class="login_next"></div>
                        <script language="javascript" type="text/javascript">
                            $(".log_out").click(function () {
                                if (confirm("您确定要退出登录吗？")) {
                                    $(".btn_exit").click();
                                }
                            });
                        </script>
                    <div class="clear"> </div>
            <?php include template("content","reg"); ?>
             <div class="date">
                 <script>
                    var myDate = new Date();
                    var now_year=myDate.getFullYear();   
                    var now_month=myDate.getMonth()+1;     
                    var now_date=myDate.getDate();       
                    var now_day=myDate.getDay();        
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
        <div class="ZH_top_menu">
          <div class="ZH_menu">
            <ul>
              <li class="ZH_wz ZH_check"><a href="<?php echo $CATEGORYS['37']['url'];?>">广交会首页</a></li>
              
              <li class="ZH_fg"></li>
              <li class="ZH_wz_g"><a href="<?php echo $CATEGORYS['38']['url'];?>">展会概况</a></li>
              
              <li class="ZH_fg"></li>
              <li class="ZH_wz_g"><a href="<?php echo $CATEGORYS['39']['url'];?>">展位图</a></li>
              
              <li class="ZH_fg"></li>
              <li class="ZH_wz_g"><a href="<?php echo $CATEGORYS['40']['url'];?>">展会图库</a></li>
              
              <li class="ZH_fg"></li>
              <li class="ZH_wz_g"><a href="<?php echo $CATEGORYS['41']['url'];?>">展会服务</a></li>
              
              <li class="ZH_fg"></li>
              <li class="ZH_wz_g"><a href="<?php echo $CATEGORYS['42']['url'];?>">历届回顾</a></li>
              
              <li class="ZH_fg"></li>
              <li class="ZH_wz_g"><a href="<?php echo $CATEGORYS['43']['url'];?>">联系方式</a></li>
           </ul>
           <div class="clear"></div>
          </div> 
        </div>
       </div>
       <div class="clear"></div>
       <!--以上是头部-->
