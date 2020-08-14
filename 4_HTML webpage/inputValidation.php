<?php
header('X-XSS-Protection:0');
include_once ("inputValidationFunction.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <title>Input Validation</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="column column-60 column-offset-20">
        <h2>Our First Form</h2>
        <p>Stating exercise with php...</p>

        <!--        // Field validation, empty check & print value.
        <P>
            <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])){ ?>
            First Name: <?php echo $_REQUEST['fname']; ?> <br/>
            <?php } ?>
            <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])){ ?>
            Last Name: <?php echo $_REQUEST['lname']; ?> <br/>
            <?php } ?>
        </P>
        -->

        <p>
            <?php
            $fname = '';
            $lname = '';
            $checked = '';

            if(isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1){
                $checked = 'checked';
            }
            ?>

            <?php if(isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                //$fname = htmlspecialchars($_REQUEST['fname']);
                $fname = filter_input(INPUT_POST,'fname',FILTER_SANITIZE_STRING);
            }?>
            <?php if(isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                //$lname = htmlspecialchars($_REQUEST['lname']);
                $lname = filter_input(INPUT_POST,'lname',FILTER_SANITIZE_STRING);
            }?>
        </p>

        <p>
            <?php echo $fname; ?>
            <?php echo $lname; ?>
        </p>

        <form method="POST">
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname" value="<?php echo $fname; ?>">

            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">

            <div>
                <input type="checkbox" name="cb1" id="ch1" value="1" <?php echo $checked; ?> >
                <label for="cb1" class="label-inline">Some Checkbox</label>
            </div>

            <label class="label">Select Some fruits</label>

            <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange'); ?> >
            <label class="label-inline">Orange</label><br/>
            <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('fruits', 'mango'); ?> >
            <label class="label-inline">Mango</label><br/>
            <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('fruits', 'banana'); ?> >
            <label class="label-inline">Banana</label><br/>
            <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('fruits', 'lemon'); ?> >
            <label class="label-inline">Lemon</label><br/>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>