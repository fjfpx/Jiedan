<?php /* Smarty version Smarty-3.1.6, created on 2017-10-27 16:14:36
         compiled from "./CHY/Main/Tpl/default/Share/configure_list.html" */ ?>
<?php /*%%SmartyHeaderCode:57826529059f2e8dd30b3f5-71231516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0723424ea618914ccdc62f33785ffd796b5afd0' => 
    array (
      0 => './CHY/Main/Tpl/default/Share/configure_list.html',
      1 => 1509091848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57826529059f2e8dd30b3f5-71231516',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59f2e8dd34b8c',
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f2e8dd34b8c')) {function content_59f2e8dd34b8c($_smarty_tpl) {?><!DOCTYPE html>
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
    <title>车核验-配置详情</title>
    <link rel="stylesheet" href="/static/css/share.css">

</head>
<body>
<div class="configure_floor2">
    <ul class="list">
        <li> 厂家名称 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['manufacturer'];?>
</span></li>
        <li> 品牌 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['brand'];?>
</span></li>
        <li> 车型 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['cartype'];?>
</span></li>
        <li> 名称 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['name'];?>
</span></li>
        <li> 年款 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['yeartype'];?>
</span></li>
        <li> 排放标准 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['environmentalstandards'];?>
</span></li>
        <li> 油耗 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['comfuelconsumption'];?>
</span></li>
        <li> 发动机 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['engine'];?>
</span></li>
        <li> 变速箱 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['gearbox'];?>
</span></li>
        <li> 驱动方式 <span><?php echo $_smarty_tpl->tpl_vars['settings']->value['drivemode'];?>
</span></li>
        <li> 车身形式<span><?php echo $_smarty_tpl->tpl_vars['settings']->value['carbody'];?>
</span></li>
        <li> 前论坛尺寸<span><?php echo $_smarty_tpl->tpl_vars['settings']->value['fronttiresize'];?>
</span></li>
        <li> 后论坛尺寸<span><?php echo $_smarty_tpl->tpl_vars['settings']->value['reartiresize'];?>
</span></li>
    </ul>
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