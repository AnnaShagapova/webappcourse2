<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="task003.php" method="POST">
        <input type="text" id="data" name="data">
        <input type="submit">
    </form> -->
   
    <form action="task003.php" method="POST">
        <input type="text" name="date" placeholder=""><br>
        <input type="submit"><br>
        <?php
    if (isset($_REQUEST['date'])) {
        $date = explode('.', $_REQUEST['date']);
        $week = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
        echo $week[date('w', mktime(0, 0, 0, $date[1], $date[0], $date[2]))];
    }
    ?>
       
    </form>
    
</body>
</html>