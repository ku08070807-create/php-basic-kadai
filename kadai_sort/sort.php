<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく
        $array = array(4, 10, 15, 18, 23);
        asort($array);
        print_r($array);
        echo "<br>";

        $array = array(23, 18, 15, 10, 4);
        sort($array);
        print_r($array);
        ?>
    </p>
</body>

</html>