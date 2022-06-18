<?php

session_start();
session_unset();//All session created in our system will be unset(removed)

session_destroy();

echo "session is destroyed";



?>
<!-- 
after destroy when u will go on session_view.php so session will not display -->

<!-- 
Array ( )
Warning: Undefined array key "favcolor" in C:\xamp2\htdocs\Phpfullcoarse\session_view.php on line 13
Favourite colod  -->