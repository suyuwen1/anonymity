<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        // $a = file_get_contents('j.json');
        // var_dump($a);
        // var_dump(json_decode($a,true));
        $b = include 'j.php';
        var_dump(json_decode($a,true));
        var_dump($b);
    ?>
</body>
</html>