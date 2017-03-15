<?php require_once("include/header.php"); ?>
<div class="headerSpacer"></div>

    <div class="containerEvent">
        <div class="InfoEvent">
            <h2>Fun event name</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pulvinar mi rhoncus blandit mattis. Fusce mattis malesuada purus, ut dapibus nisi consequat dapibus. Maecenas a lectus aliquam, sagittis erat non, rutrum elit. Donec congue nunc sed quam egestas, eu congue lorem lacinia. Sed tempor arcu a finibus pulvinar. Integer lobortis lorem at vestibulum hendrerit. Praesent vel facilisis odio. Integer ultricies luctus arcu nec fringilla.</p>
        </div>
        <div class="skraning">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="text" name="name" placeholder="nafn">
                <input type="text" name="email" placeholder="email">
                <input type="hidden" name="event" value="EVENTNAME">
                <input type="submit" name="submit" value="Skrá">
            </form>
        </div>
        
        <div class="imgEvent">
            <img src="img/event01.jpg">
        </div>
    </div>

    </body>
</html>