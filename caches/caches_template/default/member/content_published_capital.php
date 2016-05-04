<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<link type="text/css" href="<?php echo BIS_CSS;?>base.css" rel="stylesheet" />
<script language="javascript" type="text/javascript" src="<?php echo BIS_JS;?>jquery.min.js"></script>
<?php include template("content","header"); ?>
<div style="border:*+width:998px;*+margin-left:20%">
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
			<h5 class="title">资金申报</h5>
			<div class="content">
		
			<table width="100%" cellspacing="0"  class="table-list" style="font-size:12px;">
        <thead>
            <tr>
                <!--
            <th width="30">ID</th>
            <th><?php echo L('title');?></th>
            <th width="80"><?php echo L('category');?></th>
            <th width="80"><?php echo L('adddate');?></th>
            <th width="90"><?php echo L('operation');?></th>
                -->
                
            <th width="30">编号</th>
            <th width="120">公司名称</th>
            <th width="50">联系人</th>
            <th width="80">联系电话</th>
            <th width="80">联系QQ</th>
            <th width="80">项目名称</th>
            <th >项目简介</th>
            <th width="80">提交时间</th>
                
            </tr>
        </thead>
    <tbody>
   	<?php $n=1;if(is_array($datas)) foreach($datas AS $info) { ?> 
	<tr>
            
        <!--
	<td align="center"><?php echo $info['id'];?></td>
	<td align="left"><a href="<?php echo $info['url'];?>" target="_blank" title="<?php echo $info['title'];?>"><?php echo str_cut($info['title'], 60);?></a> <?php if($info[status]==0) { ?><font color="red"><?php echo L('reject_content');?></font><?php } elseif ($info[status]!='99') { ?><font color="#1D94C7">待审中</font><?php } ?></td>
	<td align="center"><a href="<?php if(strpos($CATEGORYS[$info['catid']][url],'http://')===false) { ?><?php echo $siteurl;?><?php } ?><?php echo $CATEGORYS[$info['catid']]['url'];?>" target="_blank"><?php echo $CATEGORYS[$info['catid']]['catname'];?></a></td>
	<td align="center"><?php echo date('Y-m-d',$info['inputtime']);?></td>
	<td align="center">
	<?php if($info[status]==99) { ?><font color="green"><?php echo L('pass');?></font><?php } elseif (!$info[flag]) { ?><a href="index.php?m=member&c=content&a=edit&catid=<?php echo $info['catid'];?>&id=<?php echo $info['id'];?>"><font color="red"><?php echo L('edit');?></font></a> | <a href="index.php?m=member&c=content&a=delete&catid=<?php echo $info['catid'];?>&id=<?php echo $info['id'];?>">删除</a><?php } else { ?><a href="index.php?m=member&c=content&a=edit&catid=<?php echo $info['catid'];?>&id=<?php echo $info['id'];?>"><font color="red"><?php echo L('edit');?></font></a> | <a href="index.php?m=member&c=content&a=delete&catid=<?php echo $info['catid'];?>&id=<?php echo $info['id'];?>">删除</a><?php } ?>
  	 -->
         
        <td align="center"><?php echo $info['dataid'];?></td>
	<td align="center"><?php echo $info['verchar'];?></td>
        <td align="center"><?php echo $info['chart'];?></td>
	<td align="center"><?php echo $info['phone'];?></td>
        <td align="center"><?php echo $info['tenxun'];?></td>
        <td align="center"><?php echo $info['text'];?></td>
        <td align="center"><textarea><?php echo $info['info'];?></textarea></td>
	<td align="center"><?php echo date('Y-m-d',$info['inputtime']);?></td>
<!--
	<td align="center"> 
            <a href="index.php?m=member&c=content&a=showCapital&id=<?php echo $info['dataid'];?>">查看</a> | 
            <a href="index.php?m=member&c=content&a=editCapital&id=<?php echo $info['dataid'];?>">编辑</a> |
            <a href="index.php?m=member&c=content&a=delCapital&id=<?php echo $info['dataid'];?>" onclick="return confirm('确定要删除此记录?')"><font color="red">删除</font></a> 
	</td>
-->
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

