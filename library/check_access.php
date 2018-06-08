<?php
require_ once("../model/dbconn.php");
require_ once("../model/pos.php");
$id_user = $_SESSION['pos_id'];
$asmenu = explode(",", $_SESSION['pos_h_menu']);
if (!in_array($idsmenu, $asmenu))
{
 require_ once("../model/dbconn.php");
 require_ once("../model/pos.php");
 $id_user = $_SESSION['pos_id'];
 $pos = new pos();
 $html = '<div style="margin:0 auto ;text-align:center;width:80%"><img src="../../image/warning.png"><h3>Restricted Access, Back to <a href="'.$sitename.'aplication/main/">Dashboard Menu</a></h3>
 </div>';
 die($html);
}
?>