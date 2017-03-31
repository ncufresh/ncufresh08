<?
require_once("../../mainfile.php");
for($i = 1 ; $i<=15;$i++){


$result = $currdb->query("insert into `".$currdb->prefix("must_main")."` (csn) values ('".$i."');");
}
?>
