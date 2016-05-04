<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<link type="text/css" href="<?php echo BIS_CSS;?>base.css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="<?php echo BIS_JS;?>jquery.min.js"></script>
<?php include template("content","header"); ?>
<div style="*+width:998px;*+margin-left:20%">
<?php include template('member', 'header'); ?>

<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>member.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>content_addtop.js"></script>
<div id="memberArea">
	<?php include template('member', 'left'); ?>
	<div class="col-auto">
		<div class="col-1 ">
			<h5 class="title">展会展厅</h5>
			<div class="content">
		
			<table width="100%" cellspacing="0"  class="table-list" style="font-size:12px;">
        <thead>
            <tr>
            <th width="30">编号</th>
            <th width="120">公司名称</th>
            <th width="120">展会名称</th>
            <th width="50">联系人</th>
            <th width="80">电话</th>
            <th width="80">邮箱</th>
            <th >内容</th>
            <th width="80">提交时间</th>
            </tr>
        </thead>
    <tbody>
   	<?php $n=1;if(is_array($datas)) foreach($datas AS $info) { ?> 
	<tr>
        <td align="center"><?php echo $info['dataid'];?></td>
	<td align="center"><?php echo $info['companyname'];?></td>
        <td align="center"><?php echo $info['showname'];?></td>
        <td align="center"><?php echo $info['linkman'];?></td>
	<td align="center"><?php echo $info['tel'];?></td>
        <td align="center"><?php echo $info['email'];?></td>
        <td align="center"><textarea><?php echo $info['content'];?></textarea></td>
	<td align="center"><?php echo date('Y-m-d',$info['inputtime']);?></td>
	</tr>
	<?php $n++;}unset($n); ?>
    </tbody>
    </table>

 <div id="pages"> <?php echo $pages;?></div>

			</div>
			<span class="o1"></span><span class="o2"></span><span class="o3"></span><span class="o4"></span>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
<script language="JavaScript">
<!--
	function c_c(catid) {
		location.href='index.php?m=member&c=content&a=published&siteid=<?php echo $siteid;?>&catid='+catid;
	}
//-->
</script>


 <?php include template("content","footer1"); ?>

