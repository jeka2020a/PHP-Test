<?php 
    require_once "engine/app.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Test 2</title>
</head>
<body>
    

    <div class="container">
        <form action="" method="post">
            <input type="text" name="number" placeholder="number">
            <input type="text" name="base" placeholder="base">
            <button name="check">TEST 2.1</button>
        </form>
        <?php
            $test2 = new test2;

            if (isset($_POST['check']))
            {
                $number = (int) $_POST['number'];
                $base = (int) $_POST['base'];
                $test2->is_power($number, $base);
            }
        ?>
        <br/><br/><br/><br/>
        <form action="" method="post">
            <input type="text" name="str" placeholder="str">
            <button name="clear">TEST 2.2</button>
        </form>


        <?php
            if(isset($_POST['clear']))
            {
                $str = $_POST['str'];
                $test2->format_number($str);
            }
        ?>

        <br/><br/><br/><br/>
        <form action="" method="post">
            <input type="text" name="int" placeholder="int">
            <button name="sum">TEST 2.3</button>
        </form>

        <?php
            if(isset($_POST['sum']))
            {
                $int = $_POST['int'];
                $test2->sum_digits($int);
            }
        ?>
    </div>
    

    <?php
        require_once "footer.php";
    ?>
    
</body>
</html>