<?php
require 'openid.php';
$openid = new LightOpenID($_SERVER['HTTP_HOST']);
 
if ($openid->mode) {
    if ($openid->mode == 'cancel') {
        echo "User has canceled authentication !";
    } elseif($openid->validate()) {
        $data = $openid->getAttributes();
        $email = $data['contact/email'];
        $first = $data['namePerson/first'];
        $last = $data['namePerson/last'];

        echo "Identity : $openid->identity <br>";
        echo "Email : $email <br>";
        echo "First name : $first <br>";
	echo "Last name : $last <br>";
	
	
	$user = $email;
$file = 'content\\' . $user . '.txt';
$person = $_GET["text"];
echo "text=" . $person;
//$file = 'content\people.txt';
// The new person to add to the file
//$person = "John Smith\n\n";
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
file_put_contents($file, PHP_EOL , FILE_APPEND | LOCK_EX);
	
	
    } else {
        //echo "The user has not logged in";
		 header( 'Location: http://localhost/hack/index.php' ) ;
    }
} else {
     header( 'Location: http://localhost/hack/index.php' ) ;
}
?>