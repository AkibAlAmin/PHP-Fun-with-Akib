<div style="">
    <div class="float-left">
        <p>
            <a href="/PHPLearn/9_Session/index.php?task=report">All Students</a> |
            <a href="/PHPLearn/9_Session/index.php?task=add">Add New Student</a> |
            <a href="/PHPLearn/9_Session/index.php?task=seed">Seeds</a>
        </p>
    </div>
    <div class="float-right">
        <?php
        if(!$_SESSION['loggedin']):
        ?>
        <a href="/PHPLearn/9_Session/auth.php">Log In</a>
        <?php
        else:
        ?>
        <a href="/PHPLearn/9_Session/auth.php?Logout=true">Log Out (<?php echo $_SESSION['role'] ?>)</a>
        <?php
        endif;
        ?>
    </div>
    <p></p>
</div>
