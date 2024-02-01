<!DOCTYPE html>

<html lang="en">
    <body>
        <h1>HEADING</h1>
        <p>paragraph</p>

        <br/>

        <?php 
            echo 'Hello World' //^This is how you imeplement php in html
        ?> 

        <?= 
            'This is shorter'; //^This also works = is equivalent to echo
        ?>

        <?php 
            $x = 1;
            echo '<p>' . $x . '</p>'; //^html tags also work
        ?>
    </body>
</html>