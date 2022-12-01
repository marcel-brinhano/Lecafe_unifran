<?php
/* Smarty version 3.1.31, created on 2022-11-19 10:49:36
  from "C:\xampp\htdocs\lecafe\view\clientes_recovery.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6378def0187994_67770395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '392feda8ab54eea7ad465d7a829980f0e0bb644a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lecafe\\view\\clientes_recovery.tpl',
      1 => 1668393220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6378def0187994_67770395 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="text-center">Digite seu email cadatrado para receber uma nova senha </h4>
<hr>

<form name="recuperarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite seu email cadastrado</label>
          
            <input type="email" name="cli_email" id="cli_email" class="form-control" required>
            <br>
            <button type="submit" class="btn btn-warning btn-block"> Recuperar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  
    
</form><?php }
}
