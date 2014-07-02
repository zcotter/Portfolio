<?php
	mysql_connect("mysql.zachcotter.com","tetris_hs","password");
	mysql_select_db("tetris_hs");
	//mysql_query("insert into entries values('Test0',50)");
	mysql_query("insert into entries values('".$_REQUEST['name']."', ".$_REQUEST['score'].")");
	mysql_close();
?>
