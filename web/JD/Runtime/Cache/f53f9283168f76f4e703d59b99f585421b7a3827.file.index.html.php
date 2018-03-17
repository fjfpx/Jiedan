<?php /* Smarty version Smarty-3.1.6, created on 2017-10-27 17:04:17
         compiled from "./CHY/Main/Tpl/default/Share/index.html" */ ?>
<?php /*%%SmartyHeaderCode:84191934259f2d4b71a2250-90925996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f53f9283168f76f4e703d59b99f585421b7a3827' => 
    array (
      0 => './CHY/Main/Tpl/default/Share/index.html',
      1 => 1509094951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84191934259f2d4b71a2250-90925996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f2d4b71f46b',
  'variables' => 
  array (
    'info' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f2d4b71f46b')) {function content_59f2d4b71f46b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name='viewport'
          content='width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no'
    />
    <meta name="renderer" content="webkit">
    <meta name='apple-mobile-web-app-capable' content='yes'/>
    <meta name='full-screen' content='true'/>
    <meta name='x5-fullscreen' content='true'/>
    <meta name='360-fullscreen' content='true'/>
    <meta name="laya" screenorientation="landscape"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv='expires' content='0'/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>车核验-报告详情</title>
    <link rel="stylesheet" href="/static/css/share.css">

</head>
<body>
<div class="floor1">
    <div class="logo"><img src='<?php if ($_smarty_tpl->tpl_vars['info']->value['logo']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['logo'];?>
<?php }else{ ?> /static/img/logo.png<?php }?>'/></div>
    <h1><?php echo $_smarty_tpl->tpl_vars['info']->value['manufacturer'];?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['info']->value['bd_ct_nm_en'];?>
</p>
    <a  class="choice" href="/share/settings?vid=<?php echo $_smarty_tpl->tpl_vars['info']->value['vid'];?>
"/><img src="/static/img/choice.png"/></a>
</div>
<div class="floor2">
    <div class="title"><span>此报告全部数据来源于第三方，仅供参考</span>报告摘要</div>
    <ul class="list">
        <li><img src="/static/img/icon1.png"/> 重要部件 <span><?php if ($_smarty_tpl->tpl_vars['info']->value['is_component']=='是'){?>有异常记录<img src="/static/img/warning.png" /><?php }else{ ?>无异常记录<?php }?></span></li>
        <li><img src="/static/img/icon2.png"/> 结构部件 <span><?php if ($_smarty_tpl->tpl_vars['info']->value['is_construct']=='是'){?>有异常记录<img src="/static/img/warning.png" /><?php }else{ ?>无异常记录<?php }?></span></li>
        <li><img src="/static/img/icon3.png"/> 安全气囊 <span><?php if ($_smarty_tpl->tpl_vars['info']->value['is_safe']=='是'){?>有异常记录<img src="/static/img/warning.png" /><?php }else{ ?>无异常记录<?php }?></span></li>
        <li><img src="/static/img/icon4.png"/> 过火记录 <span><?php if ($_smarty_tpl->tpl_vars['info']->value['is_fire']=='是'){?>有异常记录<img src="/static/img/warning.png" /><?php }else{ ?>无异常记录<?php }?></span></li>
        <li><img src="/static/img/icon5.png"/> 泡水记录 <span><?php if ($_smarty_tpl->tpl_vars['info']->value['is_water']=='是'){?>有异常记录<img src="/static/img/warning.png" /><?php }else{ ?>无异常记录<?php }?></span></li>
        <li><img src="/static/img/icon6.png"/> 里程数 <span><?php if ($_smarty_tpl->tpl_vars['info']->value['is_mileage']=='否'){?>有异常记录<img src="/static/img/warning.png" /><?php }else{ ?>无异常记录<?php }?></span></li>
    </ul>
    <ul class="bottom">
        <li><?php echo $_smarty_tpl->tpl_vars['info']->value['lastmileage'];?>
<P>最后里程数</P></li>
        <li class="second-li"><?php echo $_smarty_tpl->tpl_vars['info']->value['lastlogtime'];?>
<P>最后记录时间</P></li>
        <li class="third-li"><?php echo $_smarty_tpl->tpl_vars['info']->value['normalrepair_logs'];?>
条<P>记录条数</P></li>
    </ul>
</div>
<div class="floor3">
    <div class="title">详细记录</div>
    <ul class="list">
        <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value['normalrepair']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['vo']->key;
?>
        <li>
            <div class="time"><?php echo $_smarty_tpl->tpl_vars['vo']->value['date'];?>
</div>
            <div class="note1"><p><img src="/static/img/icon7.png"/> <?php echo $_smarty_tpl->tpl_vars['vo']->value['mileage'];?>
公里</p>
                <p><img src="/static/img/icon8.png"/> <?php echo $_smarty_tpl->tpl_vars['vo']->value['type'];?>
</p></div>
            <div class="note2"><p>材料:</p>
                <div class="text"><?php echo $_smarty_tpl->tpl_vars['vo']->value['materal'];?>
</div>
            </div>
            <div class="note2"><p>项目:</p>
                <div class="text"><?php echo $_smarty_tpl->tpl_vars['vo']->value['content'];?>
</div>
            </div>
        </li>
        <?php } ?>
    </ul>
</div>
<div class="floor4"><p>报告生成时间：<?php echo $_smarty_tpl->tpl_vars['info']->value['addtime'];?>
</p>
    </div>
<!--
<div class="down">

    <img src="/static/img/logo.png"/>
    <div class="text">车核验<p>汽车历史维修保养记录查询</p></div>
    <a href="" class="btn">立即下载</a>
</div>
-->
</body>
</html>
<?php }} ?>