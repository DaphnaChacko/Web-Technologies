<?php session_start();?>
<?php
    $thisPage = $_SERVER['PHP_SELF'];
    $pageNameArray = explode('/', $thisPage);
    $pageName = $pageNameArray[count($pageNameArray) - 1];
    print "The name of this page is: $pageName<br/>";
    $nameItems = explode('.', $pageName);
    $sessionName = $nameItems[0];
    print "The session name is $sessionName<br/>";
    if (!isset($_SESSION[$sessionName])) {
        $_SESSION[$sessionName] = 0;
        print "This is the first time you have visited this page<br/>";
    }
    else {
        $_SESSION[$sessionName]++;
    }
    print "<h1>You have visited this page " . $_SESSION[$sessionName] .
    " times</h1>";
?>

