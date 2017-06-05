<br/>
<div style="padding-left: 5%;">
<?php if($feedback_msg): ?>
<!--
    <div class="auth_feedback <?php echo $feedback_success ? 'success' : 'error'; ?>">
        <?php echo $feedback_msg; ?>
    </div>
-->

<div class="alert <?php echo $feedback_success ? 'success' : 'error'; ?>">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $feedback_msg; ?>
</div>


<?php endif; ?>

<div class="box-registro col-5">
    
    <div id="multiple-login">
    
        <h5 class="textcenter"><?php \MapasCulturais\i::_e('Entrar', 'multipleLocal'); ?></h5>

            <form action="<?php echo $login_form_action; ?>" method="POST">

                
                <?php \MapasCulturais\i::_e('E-mail', 'multipleLocal'); ?>
                <input type="text" name="email" value="<?php echo $triedEmail; ?>" />
                <br/><br/>
                <?php \MapasCulturais\i::_e('Senha', 'multipleLocal'); ?>
                <input type="password" name="password" value="" />
<p>
                <input type="submit" value="<?php \MapasCulturais\i::esc_attr_e('Entrar', 'multipleLocal'); ?>" />
                
                <a id="multiple-login-recover" class="multiple-recover-link"><?php \MapasCulturais\i::_e('Esqueci minha senha', 'multipleLocal'); ?></a>
                
            </form>
            
    </div>
    
    <div id="multiple-recover">
    
        <h5 class="textcenter"><?php \MapasCulturais\i::_e('Esqueci minha senha', 'multipleLocal'); ?></h5>

        <form action="<?php echo $recover_form_action; ?>" method="POST">

            <p><?php \MapasCulturais\i::_e('Para recuperar sua senha, informe o e-mail utilizado no cadastro.', 'multipleLocal'); ?></p>
            <?php \MapasCulturais\i::_e('E-mail', 'multipleLocal'); ?>
            <input type="text" name="email" value="" />
            <br/><br/>

            <input type="submit" value="<?php \MapasCulturais\i::esc_attr_e('Recuperar senha', 'multipleLocal'); ?>" />
            
            <a id="multiple-login-recover-cancel"  class="multiple-recover-link"><?php \MapasCulturais\i::_e('Cancelar', 'multipleLocal'); ?></a>

        </form>
        
    </div>
    
</div>

<div class="box-registro col-5">
    <h5 class="textcenter"><?php \MapasCulturais\i::_e('Registrar-se', 'multipleLocal'); ?></h5>

    <form action="<?php echo $register_form_action; ?>" method="POST">

        
            
        <?php \MapasCulturais\i::_e('Nome', 'multipleLocal'); ?>
        <input type="text" name="name" value="<?php echo $triedName; ?>" />
        <br/><br/>
        <?php \MapasCulturais\i::_e('E-mail', 'multipleLocal'); ?>
        <input type="text" name="email" onChange="javascript:this.value=this.value.toLowerCase();" value="<?php echo $triedEmail; ?>" />
        <br/><br/>
        <?php \MapasCulturais\i::_e('Senha', 'multipleLocal'); ?>
        <input type="password" name="password" value="" />
        <br/><br/>
        <?php \MapasCulturais\i::_e('Confirmar senha', 'multipleLocal'); ?>
        <input type="password" name="confirm_password" value="" />

        <input type="submit" value="<?php \MapasCulturais\i::esc_attr_e('Registrar-se', 'multipleLocal'); ?>" />
        </div>
    </form>

</div>

</div>
