<?php /* Smarty version 2.6.26, created on 2020-07-31 10:13:23
         compiled from members.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('TITLE' => 'Members')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table width="90%">
  <tr>
    <th style="text-align: left;">Username</th>
    <th style="text-align: left;">Level</th>
  </tr>

<?php $_from = $this->_tpl_vars['members']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['member']):
?>
  <tr>
    <td><?php echo $this->_tpl_vars['member']->username; ?>
</td>
    <td><?php echo $this->_tpl_vars['member']->level; ?>
</td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
</table>

<span class="space"></span>

<span style="display: block; width: 90%; text-align: center;">
<strong>
<a href="index.php?mod=Members&page=<?php echo $this->_tpl_vars['prevpage']; ?>
">Previous Page</a> | <a href="index.php?mod=Members&page=<?php echo $this->_tpl_vars['nextpage']; ?>
">Next Page</a>
</strong>
</span>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>