<?php
	mysql_connect("mysql.zachcotter.com","[username]","[password]");
	mysql_select_db("[tablename]");
	mysql_query("insert into entries values('".$_REQUEST['name']."', ".$_REQUEST['score'].")");
	mysql_close();
?>
