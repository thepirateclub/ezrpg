<?php /* Smarty version 2.6.26, created on 2020-07-31 10:13:01
         compiled from city.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('TITLE' => 'City')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1>City</h1>

<div class="left">

<h3>Player</h3>
<p>
<a href="index.php">Home</a><br />
<a href="index.php?mod=EventLog">Event Log</a><br />
Mail Box<br />
Inventory<br />
<a href="index.php?mod=AccountSettings">Account Settings</a><br />
</p>

</div>
<div class="right">

<h3>World</h3>
<p>
<a href="index.php?mod=Members">Members List</a><br />
Top Players<br />
Game Statistics<br />
Forum<br />
</p>


<h3>City</h3>
<p>
Battle<br />
Item Shop<br />
</p>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>