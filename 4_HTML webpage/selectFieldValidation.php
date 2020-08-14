<?php
include_once "selectFieldValidationFunction.php";
$fruits = ["mango", "orange", "Banana", "apple", "lemon", "peach"];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>Select Field Validation</title>
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20"
             <h1>Select Field Validation</h1>
             <h2>Select/Dropdowns</h2>
        <p>Select/Dropdowns Field Validation</p>


        <!--        // Field validation, Single Value
        <p>
            <?php
            if(isset($_POST['fruits']) && $_POST['fruits'] != ''){
                printf("You have selected: %s", filter_input(INPUT_POST,'fruits', FILTER_SANITIZE_STRING));
            }
            ?>
        </p>
        -->

        <p>
            <?php
            //$sfruits = filter_input(INPUT_POST,'fruits',FILTER_SANITIZE_STRING,FILTER_REQUIRE_ARRAY);

            $sfruits = $_POST['fruits'] ?? array();
            if(count($sfruits)>0){
                echo "You have selected: ".join(", ", $sfruits);
            }
            ?>
        </p>


    </div>
</div>

<div class="row">
    <div class="column column-60 column-offset-20">
        <form method="POST">
            <label for="fruits">Select some Fruits</label>
            <select style="height:200px" name="fruits[]" id="fruits" multiple>
                <option value="" disabled selected>Select Some Fruits</option>
                <?php displayOptions($fruits); ?>
            </select>

            <button type="submit">Submit</button>
        </form>
        </div>
    </div>
</div>

</body>
</html>
