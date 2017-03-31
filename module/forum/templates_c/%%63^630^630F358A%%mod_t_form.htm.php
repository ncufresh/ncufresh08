<?php /* Smarty version 2.6.18, created on 2008-11-22 13:21:51
         compiled from mod_t_form.htm */ ?>
<div class="forum_field">
<div class="forum_title">修改文章</div>
<div class="forum_content">
<form method="post" action="" id="" name="">
	<p>標題 <input type="text" name="title" value="<?php echo $this->_tpl_vars['forumtopic']->title; ?>
" size="60" /></p>
	<p>內容 <textarea name="content" rows="15" cols="60"><?php echo $this->_tpl_vars['forumtopic']->content; ?>
</textarea></p>
    <input type="hidden" name="mdarticle" value="1" /><input type="hidden" name="tno" value="<?php echo $this->_tpl_vars['forumtopic']->topic_no; ?>
" />
	<p><input type="submit" value="確定" /> <input type="reset" value="重填" /> <input type="button" value="取消" onclick="javascript: window.back();" />
</form>
</div>
</div>