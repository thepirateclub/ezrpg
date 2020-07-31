<?php /* Smarty version 2.6.26, created on 2020-07-31 10:13:34
         compiled from statpoints.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('TITLE' => 'Stat Points')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<h1>Stat Points</h1>

<p>
Here you can use your stat points to increase your stats! You have <strong><?php echo $this->_tpl_vars['player']->stat_points; ?>
</strong> points to use!
<br /><br />
You receive stat points when you first sign up to the game, and also each time when you level up!
</p>

<form method="post" action="index.php?mod=StatPoints">
<input type="submit" class="button" name="stat" value="Strength" />
</form>

<p>
<strong>Strength</strong> - This increases the damage you do in battle, and increases your weight limit so you can carry more items.
</p>

<form method="post" action="index.php?mod=StatPoints">
<input type="submit" class="button" name="stat" value="Vitality" />
</form>

<p>
<strong>Vitality</strong> - This increases the amount of health you have and decreases the amount of damage you receive in battle.
</p>

<form method="post" action="index.php?mod=StatPoints">
<input type="submit" class="button" name="stat" value="Agility" />
</form>

<p>
<strong>Agility</strong> - This increases your chance to completely dodge and attack and take no damage in battle!
</p>

<form method="post" action="index.php?mod=StatPoints">
<input type="submit" class="button" name="stat" value="Dexterity" />
</form>

<p>
<strong>Dexterity</strong> - This helps you aim better so you are less likely to miss your opponent.
</p>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>