<?php

//declaring variables

//string type variable

$name="JONATHAN NWOSU";

//integer type variable

$credits=16;

//float type variable

$avg=20.5;

//displaying welcome message

echo "WELCOME ".$name."<br/><br/>";

//checking if credits are > 12

if($credits>=12)

{

//display message

echo "FULL TIME STUDENT <br/><br/>";

}

else

{

//display message

echo "PART TIME STUDENT <br/><br/>";

}

echo "-----------Data Types of Variables----------------";

//var_dump() will return data types of variables

echo var_dump($name);

echo var_dump($credits);

echo var_dump($avg);
?>
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

</body>
</html>