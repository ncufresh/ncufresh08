<?php /* Smarty version 2.6.18, created on 2008-11-20 19:41:56
         compiled from usersearchform.htm */ ?>
<style type="text/css">
#usersearchform
{
	padding: 20px;
	text-align: center;
}
</style>
<form method="get" action="userlist.php" id="usersearchform">
  搜尋欄位：
  <select name="column" size="1">
    <option value="uid">帳號</option>
    <option value="realname">姓名</option>
    <option value="sex">性別</option>
    <option value="sid">學號</option>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?>
    <option value="email">E-Mail</option>
<?php endif; ?>
  </select>
  關鍵字：
  <input type="text" name="key" size="20" />
  <input type="submit" value="查詢" />
</form>