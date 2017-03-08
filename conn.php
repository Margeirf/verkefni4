<?php
        $host = "tsuts.tskoli.is";
        $db = "1110993329_COMPANYNAME_USERS";
        
        $user = '1110993329';
        $pwd = 'mypassword';
        
        //connect to database
        try {
            $UserConn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
            // set the PDO error mode to exception
            $UserConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }//try
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
            }//catch
?>