<?php
    mysql_connect("mysql.zachcotter.com","[username]","[password]");
    mysql_select_db("[tablename]");
    $query=mysql_query("SELECT * FROM entries ORDER BY score desc LIMIT 0, 10");
    while($entry=mysql_fetch_assoc($query))
        $output[]=$entry;
    print(json_encode($output));
    mysql_close();
?>
