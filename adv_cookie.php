<?php
$strAddress = $_SERVER["REMOTE_ADDR"];
$strBrowser = $_SERVER["HTTP_USER_AGENT"];
$strOperatingSystem = getenv("OS");
$strInfo = "$strAddress::$strBrowser::$strOperatingSystem";
setcookie ("somecookie4",$strInfo, time()+7200);
?>
<?php
$strReadCookie = $_COOKIE["somecookie4"];
$arrListOfStrings = explode ("::", $strReadCookie);
echo "<p>$strInfo</p>";
echo "<p>Your IP address is: $arrListOfStrings[0] </p>";
echo "<p>Client Browser is: $arrListOfStrings[1] </p>";
echo "<p>Your OS is: $arrListOfStrings[2] </p>";
?>