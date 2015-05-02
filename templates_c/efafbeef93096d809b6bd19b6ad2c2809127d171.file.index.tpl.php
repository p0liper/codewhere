<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 19:39:45
         compiled from "templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14043311535543d5c61605a5-11898824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efafbeef93096d809b6bd19b6ad2c2809127d171' => 
    array (
      0 => 'templates/index.tpl',
      1 => 1430509183,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14043311535543d5c61605a5-11898824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5543d5c627b5a2_52596629',
  'variables' => 
  array (
    'code' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5543d5c627b5a2_52596629')) {function content_5543d5c627b5a2_52596629($_smarty_tpl) {?><html>
    <head>
        <title>Code</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <form id="send" action="/api.php" method="POST"></form>
        <div class="container row">
            <div class="col-lg-8 col-lg-offset-3">
                <textarea form="send" style="width: 100%; height: 45%;" class="form-control" name="code" placeholder="Enter your code here"><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
</textarea>
                <br>
                <div class="row"><div class="col-lg-5"><select name="lang" form="send" class="form-control">
                    <option value="php">PHP</option>
                    <option value="wct">WCT</option>
                </select></div><div class="col-lg-4 col-lg-offset-1"><input type="submit" form="send" class="btn btn-default"></div></div>
                <?php if ($_smarty_tpl->tpl_vars['result']->value) {?><br><pre><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</pre><?php }?>
                
            </div>
        </div>
    </body>
</html><?php }} ?>
