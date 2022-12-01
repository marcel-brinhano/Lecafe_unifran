<?php
/* Smarty version 3.1.31, created on 2022-11-29 22:32:13
  from "C:\xampp\htdocs\lecafe\view\cliente_senha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_6386b29dec15d4_61364231',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05c5ade8982bacfdcd71998bd1eac1705b5bda0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\lecafe\\view\\cliente_senha.tpl',
      1 => 1668393220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6386b29dec15d4_61364231 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="cli_senha_atual" id="cli_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="cli_senha" id="cli_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form>

<?php }
}
