<?php
/* Smarty version 4.2.1, created on 2022-10-02 01:15:22
  from 'C:\xampp\htdocs\Web2\taller_mecanico\templates\autosList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338ca0a8adbe3_79180671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80c2449cb400648c7ed99f08927999d7c8bafc42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\taller_mecanico\\templates\\autosList.tpl',
      1 => 1664666044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6338ca0a8adbe3_79180671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- lista de autos -->
<h1>TALLER MECÁNICO</h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autos']->value, 'auto');
$_smarty_tpl->tpl_vars['auto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['auto']->value) {
$_smarty_tpl->tpl_vars['auto']->do_else = false;
?>
        <li>
            <span> <b><?php echo $_smarty_tpl->tpl_vars['auto']->value->patente;?>
</b> - <?php echo $_smarty_tpl->tpl_vars['auto']->value->duenio;?>
</span>
                    </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<p><small>Mostrando <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 autos</small></p>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
