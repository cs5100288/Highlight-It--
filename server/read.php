<?php
$searchthis = $_GET["text"];//"mystring";
$user = $_GET["user"];//"mystring";

$matches = array();
$file = 'content\\' . $user . '.txt';
echo $file . $searchthis;
$handle = @fopen($file, "r");
if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
		 echo $buffer;
        if(strpos($buffer, $searchthis) !== FALSE)
          {  $matches[] = $buffer;
		    
			}
	}
	
    fclose($handle);
}

echo "<ul>";
$length = count($matches);
for ($i = $length - 1; $i >= 0; $i--) { 
   echo "<li>" . $matches[$i] . "</li>";
}
echo "</ul>";
?>