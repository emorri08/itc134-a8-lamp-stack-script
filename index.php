<!DOCTYPE html>
<html>
<head>
    <title>E.Boyd | ITC134 | Winter 2019 | Assignment 8 | Lamp Stack Script</title>
</head>
<body>
<h1>Random PHP form</h1>
<?php
//form1.php

/*

if data is submitted, show it

if no data is submitted, show the form


*/

if(isset($_POST["FirstName"])){//if data is submitted, show it
    //echo $_POST["FirstName"];
    
    //best way to troubleshoot a form that is misbehaving
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
    
}else{//show the form
    echo '
    <form action="" method="post">
    First Name: <input type="text" name="FirstName" /><br/>
    Do you like movies? <input type="radio" name="LikesMovies" value="yes"> Yes <br/>
    Do you like movies? <input type="radio" name="LikesMovies" value="no"> No <br/>
    Favorite Sundae Toppings:<br />
    <input type="checkbox" name="Toppings[]" value="nuts"> Nuts <br/>
    <input type="checkbox" name="Toppings[]" value="fran\'s chocolate syrup"> Fran\'s chocolate syrup <br/>
    <input type="checkbox" name="Toppings[]" value="cherries">Cherries <br/>
    <input type="submit" />
    </form>
    ';
}
?>
<footer>
    <p>
        <small>
            &copy;2019, E. Boyd, all rights reserved.
        </small>
    </p>
</footer>
</body>
</html>