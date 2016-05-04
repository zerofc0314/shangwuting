<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>    
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        <?php include template("content","header_inclub"); ?>
        <link href="<?php echo CSS_PATH;?>search.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>
        <style>
          .sr_list .sr_logo div.l{ margin-top:20px;}
          .sr_logo{height:auto!important; height:100px; min-height:100px;}
          .sr_lists .l{ width:160px;}
          .sr_lists .c ul{ margin:10px auto auto 40px;}
          .wrap{color:black;font-size: 16px;margin-top:5px;}
        </style>
    </head>

      <body>
        
        <?php include template("content","header"); ?>
        
        <div class="clr sr_body sr_list" style="width:994px;margin: auto;border:#ccc 1px solid;">
            <div class="sr_main" style='margin-top:20px;width:990px;'>

                <div class="sr_head" style="width:350px;color:#1A7DAC;padding:0px 10px;">
                    <h3 style="display:  inline-block;font-size: 16px;">搜索: </h3> 获得约 <?php echo $totalnums;?> 条结果 （用时<?php echo sprintf("%01.2f", $execute_time);?> 秒）
                </div> 
               
                <div class="wrap sr_lists">
                    <div class="l">
                        <div>
                            <span>网页结果</span>
                            <ul>
                                <?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
                                <li><a href="?m=search&c=index&a=init&typeid=<?php echo $v['typeid'];?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=<?php echo $time;?>" <?php if($v['typeid']==$typeid) { ?> class="ac"<?php } ?>><?php echo $v['name'];?></a>
                                </li>
                                <?php $n++;}unset($n); ?>
                            </ul>
                        </div>
                        <div>
                            <span>按时间搜索</span>
                            <ul>
                                <li><a href="?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=all" <?php if($time=='all' || empty($time)) { ?>class="ac"<?php } ?>>全部时间</a></li>
                                <li><a href="?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=day" <?php if($time=='day') { ?>class="ac"<?php } ?>>一天内</a></li>
                                <li><a href="?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=week" <?php if($time=='week') { ?>class="ac"<?php } ?>>一周内</a></li>
                                <li><a href="?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=month" <?php if($time=='month') { ?>class="ac"<?php } ?>>一月内</a></li>
                                <li><a href="?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&q=<?php echo urlencode($search_q);?>&siteid=<?php echo $siteid;?>&time=year" <?php if($time=='year') { ?>class="ac"<?php } ?>>一年内</a></li>
                            </ul>
                        </div>
                        <div class="bgno">
                            <span>搜索历史</span>
                            <ul id='history_ul'>
                            </ul>
                        </div>
                    </div>
                    <div class="c wrap">
                        <ul class="wrap">
                            <?php $n=1; if(is_array($data)) foreach($data AS $i => $r) { ?>
                            <li class="wrap">
                                <div>
                                    <?php if($r['thumb']) { ?><a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="60" height="60" /></a><?php } ?>
                                    <h5><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><?php if($r['posids']) { ?><img src="<?php echo IMG_PATH;?>icon/small_elite.gif"><?php } ?></h5>
                                    <p><?php echo $r['description'];?></p>
                                </div>
                                <div class="adds">发布时间：<?php echo format::date($r[inputtime], 1);?></div>
                            </li>
                            <?php $n++;}unset($n); ?>
                            <?php if(empty($data)) { ?>未找到结果<?php } ?>
                        </ul>
                        <div id="pages" class="text-c mg_t20"><?php echo $pages;?></div>
                        <?php if($setting['relationenble']) { ?>
                        <div class="wrap sgch"><strong>相关搜索：</strong>
                            <?php $n=1; if(is_array($relation)) foreach($relation AS $k => $v) { ?>
                            <a href="?m=search&c=index&a=init&typeid=<?php echo $typeid;?>&siteid=<?php echo $siteid;?>&q=<?php echo $v['keyword'];?>"><?php echo $v['keyword'];?></a> 
                            <?php $n++;}unset($n); ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>   
<script type="text/javascript" src="<?php echo JS_PATH;?>search_history.js"></script>
<?php if($setting['suggestenable']) { ?>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.suggest.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_suggest.js"></script>
<?php } ?>

 <?php include template("content","footer1"); ?>
 </body>
