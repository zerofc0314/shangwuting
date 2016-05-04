<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
        <div class="AT_top_menu">
          <div class="AT_menu">
            <ul>  
              <li class="AT_wz AT_check"><a href="<?php echo $CATEGORYS['7']['url'];?>">出口退税首页</a></li>
              <li class="AT_fg"></li>
              <li class="AT_wz AT_wz_ck "><a target="_blank" href="<?php echo $CATEGORYS['25']['url'];?>">通知公告</a></li>
              <li class="AT_fg"></li>
              <li class="AT_wz AT_wz_ck "><a target="_blank"  href="<?php echo $CATEGORYS['26']['url'];?>">退税资讯</a></li>
              <li class="AT_fg"></li>
              <li class="AT_wz AT_wz_ck "><a target="_blank"  href="<?php echo $CATEGORYS['4']['url'];?>">政策法规</a></li>
              <li class="AT_fg"></li>
              <li class="AT_wz AT_wz_ck "><a target="_blank"  href="<?php echo $CATEGORYS['27']['url'];?>">退税知识</a></li>
              <li class="AT_fg"></li>
              <li class="AT_wz AT_wz_ck "><a target="_blank"  href="<?php echo $CATEGORYS['28']['url'];?>">相关下载</a></li>
               <li class="AT_fg"></li>
              <li class="AT_wz AT_wz_ck "><a target="_blank"  href="<?php echo $CATEGORYS['29']['url'];?>">常见问题</a></li>
           </ul>
           <div class="clear"></div>
          </div> 
          <script type="text/javascript">
              $(".AT_wz").mouseover(function () {
            var topbtli = this;
            $(".AT_wz").each(function () {
                if (this == topbtli) {
                    if ($(this).hasClass("AT_wz_ck")) {
                        $(this).removeClass("AT_wz_ck");
                        $(this).addClass("AT_check");
                    }
                } else {
                    if ($(this).hasClass("AT_check")) {
                        $(this).removeClass("AT_check");
                        $(this).addClass("AT_wz_ck");
                    }
                }
            });
            return false;
        });
        </script>
        </div>
