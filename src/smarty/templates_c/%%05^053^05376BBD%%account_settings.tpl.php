<?php /* Smarty version 2.6.26, created on 2020-07-31 10:13:20
         compiled from account_settings.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('TITLE' => 'Account Settings')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1>Account Settings</h1>

<p>
Here you can change your password.
</p>

<form method="post" action="index.php?mod=AccountSettings">

<label>Current Password</label>
<input type="password" size="40" name="current_password" autocomplete="off" />

<label>New Password</label>
<input type="password" size="40" name="new_password" autocomplete="off" />

<label>Verify New Password</label>
<input type="password" size="40" name="new_password2" autocomplete="off" />

<br />
<input name="change_password" type="submit" value="Change Password" class="button" />

</form>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>