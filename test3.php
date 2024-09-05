<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Test 3</title>
</head>
<body>
    
    

    <div class="container">
        <img src="assets/img/test3.png" alt="" width="100%" style="margin-bottom: 50px;">
        <p class="some__text">
            1. First problem - code dont have any connection to DB (see some obj $connection, but dont see more detail);<br/>
            2. $data[] can be deleted, because fetch_row() return array in result;<br/>
            3. Finish part of SQL query have suntax problem: (WHERE `id` = " . $id) . This string must be completed with symbols . " , or use '' without operator - . (Also after every SQL query, better use ; for end some query)<br/>
            4. Better be , if will be used query without cycle (SELECT * FROM `value`). 
        </p>
    </div>

    <?php
        require_once "footer.php";
    ?>
</body>
</html>