<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="zxqy">
                   <h2>中小企业国际市场开拓资金</h2>
                   <h3>拨付公示</h3>
                   <form id="myform" action="./index.php?m=content&c=index&a=lists&catid=200" method="post">
                   <div class="sideform">
                       <div class="ddlcsnd">
                           <label for="">年度：</label> 
                           <?php echo menu_linkage(3416,'L_3416');?>
                           <input type="hidden" value="" id="hide_area_id" name="hide_area_id" /> 
                       </div>
                       <div class="ddlcsxm">
                           <label for="project_mold"> 所属行业：</label>
                          <?php echo menu_linkage(3439,'L_3439');?>
                           <input type="hidden" value="" id="hide_industry_id" name="hide_industry_id"/> 
                           
                       </div>
                       <div>
                           <label for="qiye">
                               项目名称：</label><input name="title" type="text" id="title" class="qiye" />
                       </div>
                       <div>
                           <label for="xiangmu">
                               申报单位：</label><input class="xiangmu gjz" name="unit" id="" />
                       </div>
                       <div class="btn">
                           <input class="btncx_1" type="submit" value='查询' style="color: #fff;" onclick="beforeSearch(event)"/><input type="reset" value="重置" style="color: #fff;" class="btncz_1" />
                       </div>
                   </div>
                 </form>
                    <style>
                           .sideform div input{width:145px;}
                           .sideform div label{width:82px;}
                    </style>
                <div class="foot_zxqy">
                    <img src="<?php echo IMG_PATH;?>new1/money_2_27.jpg" />   
                </div>
               </div>
               
          <script>
          function beforeSearch(){   
                    var project_name=$("input[name='title']");
                    var Unit=$("input[name='unit']");
                    if(project_name.val() == ""){
                        alert("项目名称或申报单位必须填写！");
                       event.preventDefault();
                    }
                    
                    var industryid=$("#L_3439 input").val();
                    $("#hide_industry_id").val(industryid); 
                    
                   var catid=$("#L_3416 input").val();
                    $("#hide_area_id").val(catid); 
                }

     </script>