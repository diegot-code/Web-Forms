<?php

if(!isset($_POST['newUserForm'])) {
header("Location: index.html");
exit; // with without
}


// $colors1 = array("Blue", "Black", "Red", "Purple");
// $colors2 = ["Blue", "Black", "Red", "Purple"];




function produceOptions($iteratingVariable, $selected) {
    foreach($iteratingVariable as $iteration) {

        if ($iteration == $selected) {
            ?>
            <option selected><?= $iteration ?></option>
            
            <?php
        } else {
            ?>
        <option><?= $iteration ?></option>
    
        <?php
        }
        
    }
    
}


function produceListItems() {
    return;
}



function checkEven($x) {
    if (($x % 2) == 0) {
        return TRUE;
    } else {
        return FALSE;
    }
}

function squared($x) {
    return $x ** 2;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Thanks for Signing Up!</h1>

<?php 

// if (checkEven(3)) {
//     echo "That was even";
// }

// var_dump print_r $_POST

// var_dump($_POST);
// echo '<br>';
// print_r($_POST);
?>



<select id="myFavPets">
<?php

produceOptions($_POST['favoritePet'], "Bird");

?>
</select>



<ol id="myFavPets">
<?php
foreach($_POST['favoritePet'] as $pet) {
    ?>
<li><?= $pet ?></li>

<?php
}

?>
</ol>

<?php



// echo $_POST['userName'];
// echo "<br>";
// echo $_POST['userEmail'];
// echo "<br>";
// echo $_POST['favoriteColor'];
// echo "<br>";
// echo $_POST['specialInstructions'];

// $_POST['favoritePet'] foreach 

?>
    
</body>
</html>