<?php
require_once '../../mainfile.php';

if($_GET['ajax'] == 1) $currtpl->setndisplay();

$no = intval($_GET['no']);

if($no != 1 && $no != 2 && $no != 3) exit();

$currtpl->display('map_'.$no.'.htm');

?>
