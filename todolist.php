<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>todolist</title>
    <link rel="stylesheet" href="css/todolist.css"> 
</head>
<body>
    <?php 
        session_start();

        if (isset($_POST['destroy']) ) {
            $_SESSION = [];
            session_unset();
            session_destroy();
        }

        if (isset($_POST['submit']) ) {
            $todo =  htmlspecialchars($_POST['todo']);
            
            if ( isset ($_SESSION["rows"]) ) {
                array_push($_SESSION["rows"], $todo);
            } else {
                $_SESSION ["rows"] = [$todo];
                
            } 
            var_dump($_SESSION);
            
        }

        // setcookie("todolist", $row, time() + (86400 * 30), "/"); // 86400 = 1 day

        
    ?>
    <section>
        <h1 class="text-center heading">To do List</h1>
        <form action="" method="post" class="container-center ">
            <textarea name="todo" class="box padding size-2 font-text "></textarea>
            <button type="submit" name="submit" class="plus-button padding">+</button>
            <button type="submit" name="destroy" class="plus-button padding">Hapus Session</button>
        </form>
        
    </section>
    
</body>
</html>