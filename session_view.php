<?php
session_start();
// print_r($_SESSION);//all session will show with this method

?>



<html>
<body>

<?php

if(isset($_SESSION["favcolor"])){//session is set so message will display
echo "Favourite colod".$_SESSION["favcolor"];//favcolor is session id

}
?> 


</body>

</html>