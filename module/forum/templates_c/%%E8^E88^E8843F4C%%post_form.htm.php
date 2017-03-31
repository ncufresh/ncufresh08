<?php /* Smarty version 2.6.18, created on 2008-11-20 13:27:11
         compiled from post_form.htm */ ?>
<div class="forum_field">
<div class="forum_title">發表文章</div>
<div class="forum_content">
<form method="post" action="do_topic.php">
	<p>標題 <input type="text" name="title" size="60" value="<?php echo $this->_tpl_vars['_re_post']['title']; ?>
" /></p>
	<p>內容 <textarea name="content" rows="15" cols="60"><?php echo $this->_tpl_vars['_re_post']['content']; ?>
</textarea></p>
	<input type="hidden" name="dopost" value="1" /><input type="hidden" name="bno" value="<?php echo $this->_tpl_vars['forumboard']->board_no; ?>
" />
	<p><input type="submit" value="確定" /> <input type="reset" value="重填" /><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/redirect.php?1" title="回到上一頁">[回到上一頁]</a></p>
</form>
</div>
</div>