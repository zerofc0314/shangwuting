<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="ZH_cx_list">
    <form action="./index.php?m=content&c=index&a=lists&catid=52" method="post" >
        <div class="RED">
            <div class="kong"></div>
            <div class="JZ_polling">
                <label>展会名称:</label><input name="title" type="text"/>
            </div>
            <div class="JZ_polling">
                <label>展会行业:</label> <div style="width:150px;float:right;margin-right:270px;margin-top:6px;*margin-top:-24px;"><?php echo menu_linkage(3390,'L_3390');?></div>
                <input type="hidden" value="" id="hide_area_id" name="hide_area_id" />  
            </div>
            <div class="MH_polling">
                <label>展会地区:</label>
                <div class="polling_2">
                    <input type="radio" value="1" name="item"  checked="true" />中国境内
                    <input type="radio" value="2" name="item" />亚洲其他
                    <input type="radio" value="3" name="item" />非洲
                    <input type="radio" value="4" name="item" />欧洲<br/>
                    <input type="radio" value="5" name="item" />美洲
                    <input type="radio" value="6" name="item" />大洋洲
                </div> 
                <div class="clear"></div>
            </div>
            <div class="MH_polling">
                <label>展会时间:</label>
                从<input name="start_time" type="text" style=" width:88px" class="datapiker" id="datepicker"/>
                到<input name="end_time" type="text" style=" width:88px" class="datapiker"/>
            </div>
            <div class="polling_but"> 
                <input type="submit"  value="" onclick="beforeSearch();" style="width:75px;height:27px;background: url(./statics/images/new/ct2_but_18.gif) 0 0 no-repeat;">
            </div>
        </div>
    </form>
</div>

 <script>
       /*function need(event){
        if($("input[name='title']").val()=="")
          {
        alert('请必须输入展会名称！');
         event.preventDefault();  
          }
    }*/

     function beforeSearch(){
        var catid=$("#L_3390 input").val();
         $("#hide_area_id").val(catid);

         var radio_val=$("input[name='item']:checked").val();

         var start_time=$("input[name='start_time']").val();
         var end_time=$("input[name='end_time']").val();

     }

         $(".datapiker").datepicker();
            jQuery(function($){  
                 $.datepicker.regional['zh-CN'] = {  
                     monthNames: ['一月','二月','三月','四月','五月','六月',  
                     '七月','八月','九月','十月','十一月','十二月'],  
                     dayNamesMin: ['日','一','二','三','四','五','六'],  
                     weekHeader: '周',  
                     dateFormat: 'yy-mm-dd',  
                     firstDay: 1,  
                     isRTL: false,  
                     showMonthAfterYear: true,  
                     yearSuffix: '年'};  
                 $.datepicker.setDefaults($.datepicker.regional['zh-CN']);  
             });
 </script>