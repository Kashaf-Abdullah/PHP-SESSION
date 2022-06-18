<!-- SUPER GLOBAL VARIABLE

$_GET
$_POST
$_REQUEST
$_SERVER
4_COOKIE -->
<!-- $get  AND $post POST USED TO RETERIVE Form data

$request   how can we retreive extra data(hhtp data connection information , server information (it means where is our file store or its host information))

$_SERVER
HTTP connection
SERVER information s
HOST information
URL information -->

<!-- means you dont wanna use second page to store data so we will use this
 -->


 <html><body>

<form action="<?php $_SERVER['PHP_SELF']?>" method="get" >
<!-- //data will save it own (self )file ..url will refresh and data is save in this file -->

    Name :<input type="text" name="fname"><br><br>

    Age :<input type="text" name="age"><br><br>
    <input type="submit" name="save">



</form>




<?php
// when data is set so it will be save
if(isset($_GET['save'])){
echo $_GET['fname']."<br>";
echo $_GET['age']."<br>";

}
?>



</body></html>