<?php 
    require_once "engine/app.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Test 1</title>
</head>
<body>

    <div class="container">
        <form action="" method="post">
            <input type="text" name="lword">
            <button name="get__lastword">TEST 1 (last word)</button>
        </form>
        <br/>
        <form action="" method="post">
            <input type="text" name="stext">
            <button name="get__extract">TEST 1 (extract str)</button>
        </form>

        <?php
            $test1 = new test1;

            if (isset($_POST['get__lastword']))
            {
                $sentence = $_POST['lword'];
                $test1->last_word($sentence);
            }
            if (isset($_POST['get__extract']))
            {
                $str = $_POST['stext'];
                $test1->extract_string($str);
            }
        ?>
    </div>
    


    <?php
        require_once "footer.php";
    ?>
</body>
</html>