
<?php 
//
require_once 'openid.php';
$openid = new LightOpenID("http://localhost/hack");//($_SERVER['HTTP_HOST']);
 
$openid->identity = 'https://me.yahoo.com';
$openid->required = array(
'namePerson/first',
   'namePerson/last',	
  'contact/email',
);
$openid->returnUrl = "http://localhost/hack/login.php?text=" .  $_GET["text"] ;

 Echo "Hello, World!";
echo $openid->authUrl() ;
echo  $_GET["text"];
 header( 'Location: '. $openid->authUrl() ) ;
?>
 
