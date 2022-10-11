<html>
<body>
<?php
   if (empty($_COOKIE["lang"])) {
    setcookie("lang", $_GET["lang"],time()+ 10);
    } 
else{
    $lang = $_GET["lang"];
    setcookie("lang", $lang,time()+ 10);
    }
include 'main.php';
?>
</body>
</html>