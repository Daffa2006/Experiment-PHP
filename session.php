<?php
    session_start() ;

    if (isset($_POST["firstname"])) {
        if ($_SESSION["array"] != "") {
            $_SESSION["array"] .= "," ;
        }

        $_SESSION["array"] .= $_POST["firstname"] ;
    }
    else {
        $_SESSION["array"] = "" ;
    }

    $demo   = $_SESSION["array"] == "" ? "gg" : $_SESSION["array"] ;
?>
<html>
    <body>
        <form action="" method="post">
            New array element:<br>
            <input id="age" type="text" name="firstname" value="" />
            <br>
            <br>
            <button>Submit</button>
            <p id="demo"><?php echo $demo ?></p>
        </form>
    </body>
</html>