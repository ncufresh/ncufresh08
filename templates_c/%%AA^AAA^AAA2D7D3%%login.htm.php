<?php /* Smarty version 2.6.18, created on 2010-07-01 23:25:14
         compiled from block/login.htm */ ?>
<?php if (( $this->_tpl_vars['curruser']->isguest() )): ?>
<div id="block_login">
<div style="margin-left:10px;"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/loginicon.png" alt=""/></div>
<form method="post" action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php" id="block_login_form">
	<p>
		<label class="id" for="login_id">帳號</label>
		<input type="text" id="login_id" name="id" size="10" />
	</p>
	<p>
		<label class="pwd" for="login_pwd">密碼</label>
		<input type="password" id="login_pwd" name="pwd" size="10" />
	</p>
	<p id="block_login_button">
		<input type="hidden" name="user_login" value="1" /><input type="submit" value="登入" />
<?php if (( $this->_tpl_vars['currconfig']->openreg == 1 )): ?>
		<span class="buttonfake"><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/register.php">註冊</a></span>
	</p>
<?php endif; ?>
</form>
</div>
<?php endif; ?>