<?php require_once("include/header.php"); ?>
<div class="headerSpacer"></div>

    <div class="containerEvent">
        <div class="InfoEvent">
            <h2>Math Conference</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar mi rhoncus blandit mattis. Fusce mattis malesuada purus, ut dapibus nisi consequat dapibus. Maecenas a lectus aliquam, sagittis erat non, rutrum elit. Donec congue nunc sed quam egestas, eu congue lorem lacinia. Sed tempor arcu a finibus pulvinar. Integer lobortis lorem at vestibulum hendrerit. Praesent vel facilisis odio. Integer ultricies luctus arcu nec fringilla.</p>
        </div>
        <div class="skraning">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="text" name="name" placeholder="nafn">
                <input type="text" name="email" placeholder="email">
                <input type="hidden" name="event" value="math">
                <input type="submit" name="submit" value="Skrá">
            </form>
        </div>
        
        <div class="imgEvent">
            <img src="img/event03.jpg">
        </div>
    </div>

    </body>

<?php
require_once("conn.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];
    
    $getData = "SELECT * FROM verkefni4";
    $result = $Conn->query($getData);
    if(!is_null($result)){
        foreach($result as $res) {
        if($res['name']==$name && $res['email']==$email && $res['eventName']==$event){
            echo '<script>alert("Þú ert nú þegar skráð/ur á þennann viðburð");</script>';
        }else{
            $insertData = $Conn->prepare("INSERT INTO verkefni4(name, email, eventName)
                                            VALUES(:Name, :Email, :Event)");
            $insertData->bindParam(':Name', $name);
            $insertData->bindParam(':Email', $email);
            $insertData->bindParam(':Event', $event);
            $insertData->execute();
            
            echo '<script>alert("Þú hefur verið skráð/ur á þennann viðburð");</script>';
        }
    } 
    }else{
        $insertData = $Conn->prepare("INSERT INTO verkefni4(name, email, eventName)
                                            VALUES(:Name, :Email, :Event)");
            $insertData->bindParam(':Name', $name);
            $insertData->bindParam(':Email', $email);
            $insertData->bindParam(':Event', $event);
            $insertData->execute();
            
            echo '<script>alert("Þú hefur verið skráð/ur á þennann viðburð");</script>';
    }
    
}
?>
</html>