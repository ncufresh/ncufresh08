<?php /* Smarty version 2.6.18, created on 2009-02-16 01:58:38
         compiled from mod_r_form.htm */ ?>
<div class="forum_field">
<div class="forum_title">修改回覆</div>
<div class="forum_content">
<form method="post" action="" id="" name="">
	<p>內容 <textarea name="content" rows="15" cols="60"><?php echo $this->_tpl_vars['forumreply']->content; ?>
</textarea></p>
    <input type="hidden" name="mdreply" value="1" /><input type="hidden" name="rno" value="<?php echo $this->_tpl_vars['forumreply']->reply_no; ?>
" />
	<p><input type="submit" value="確定" /> <input type="reset" value="重填" /> <input type="button" value="取消" onclick="javascript: window.back();" />
</form>
</div>
</div>