
<?php
    $GLOBALS['path'] = "localhost";
    $GLOBALS['usr'] = "root";
    $GLOBALS['psw'] = "";
    $GLOBALS['db'] = "WildFishing";

    function dbConnection(){
        $mysqli = new mysqli($GLOBALS['path'], $GLOBALS['usr'], $GLOBALS['psw'], $GLOBALS['db']);
        if ($mysqli->connect_errno) {
                echo "Connect failed: %s\n", $mysqli->connect_error;
                exit();
            }
            return $mysqli;
    }
?>
