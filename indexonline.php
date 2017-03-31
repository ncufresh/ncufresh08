<?
require_once("./mainfile.php");

$fuckok = true;

$block_handler =& gethandler("block");
$block_handler->getblockbyno(28)->display();
$currtpl->display('../module/lifemigi/templates/map.htm');

$currtpl->assign('news_block', $block_handler->getblockbyno(24)->fetch());
$currtpl->assign('newt_topic', $block_handler->getblockbyno(11)->fetch());
$currtpl->assign('life_block', $block_handler->getblockbyno(25)->fetch());

$currtpl->display('indexs.htm');

?>
