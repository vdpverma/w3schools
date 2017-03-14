<?php
date_default_timezone_set("America/New_York");
echo time(); echo "<br/>";

echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("h:i:s");echo "<br/>";


$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + 1800, "/"); // 86400 = 1 day


?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html> 