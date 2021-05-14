<html>
    <head>
        <title>Tabella</title>
    </head>
    <body>
        <h1>"TABELLA UTENTI:"</h1>
        <?php
            include "connection.php";
            
            $mysqli = dbConnection();
            $query = "SELECT * FROM Utenti" ;
            $result = $mysqli->query ($query);
            if (!$result) {
                echo "Query failed";
                exit();
            }
            // Printing results in HTML
            echo "<table>\n" ;
            while ( $line =$result->fetch_array(MYSQLI_ASSOC)) {
                echo "\t<tr>\n" ;
                foreach ( $line as $col_value ) {
                    echo "\t\t<td> $col_value </td>" ;
                }
                echo "\t</tr>\n" ;
            }
            echo "</table>\n" ;
        ?>
    </body>
</html>
