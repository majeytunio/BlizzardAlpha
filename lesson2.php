<html>
    <head>
        <title>JobME Tech Solutions</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<?php

$names = ['Majid', 'Essa', 'Ramiz', 'Ashfaque', 'Ashfaque', 'Ashfaque', 'Ashfaque', 'Ashfaque', 'Ashfaque', 'Ashfaque'];

foreach($names as $name){
    ?>

    <div class="container">
        <h5 class="title">Name</h5>
        <h1 class="content"><?php echo $name ?></h1>
    </div>

    <?php
}

?>

    </body>
</html>


<!--String[] names = {'asdsad', 'asdsad', 'asdasd'};-->
