<?php
        $host = "tsuts.tskoli.is";
        $db = "1110993329_vsh";
        
        $user = '1110993329';
        $pwd = 'mypassword';
        
        //connect to database
        try {
            $Conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
            // set the PDO error mode to exception
            $Conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }//try
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }//catch
?>