<!-- temporary information in website visitor computer
//visitor browser location
visitor screen size
suppose if you have an E-commerce website so you can also store the visitor interested product
and whenever u wanna retriwve that information so you can retreive


Create Cokokie
setcookie(name,value,expire,path,domain,secure,httponly)
name:like we decalre variable name
value:same as we give value to variable
expire:means you are set cookie and if you wanna expire(destroy) cookkie so u can
//always give time to expire cookie in seconds
path:some path :/path when you want to retrieve information so in which page you are going
to retrieve
domain: 
secure:true/fale ,we have 2 protocols(http,https) if you selelct true so it will first check
 protocol is https so we can set cookie neverthele  you select false so cookie will set 


 2)View Cookie value
 $_cookie[name]; -->
<!-- 
 time calculation:60*60=3600 (after 1 hour cookie will be delete)
 time calculation:60*24=86400(after 24 hours cookie will be delete) 
time calculation:60*24*30 (after 1 month cookie will be deleted -->
<?php


 $cookie_name="user";
$cookie_value="Kashaf";



// setCookie($cookie_name,$cookie_value,time()+(86400),"/");
setCookie("user","",time()-(86400),"/");//time iss completed so cookie will expire

 ?>
<html>
    <body>
<?php

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie is not set";
}
else{
    echo $_COOKIE[$cookie_name];
}
?>
    </body>
</html>
<!-- 
//if website visitor does not give you write cookie permision(in browser the option is disable)
so you can not set cookie and retrieve cookie -->
<!-- so we will condition if consdition before the echo statement -->
<!-- we can retrieve cookie by javascript too -->

<!-- 
    example of use of cookie:
Google retrieve amazon cookie and then provide us add acccording to this -->