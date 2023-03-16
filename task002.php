<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="task002.php" method="POST">
        <input type="text" id="year" name="year">
        <input type="submit">
    </form>
    <?php
    if(isset($_POST['year'])){
        $year = $_POST['year'];
    
        if(($year % 4) == 0){
            echo $year . " - високосный год";
        }
        else{
            echo $year . " - не високосный год";
        }
    }
    ?>
    
</body>
</html>