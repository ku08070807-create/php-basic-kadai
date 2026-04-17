<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($array,$order) {
          if ($order === TRUE) {
                echo "昇順にソートします。<br>";
                sort($array);
            }
             else {
                echo "降順にソートします。<br>";
                rsort($array);
            }

        // ここにコードを書いていく
        $array = array(4, 10, 15, 18, 23);
        asort($array);
        foreach($array as $value) {
            echo $value . " ";
        }   
        echo "<br>";

        $array = array(23, 18, 15, 10, 4);
        $sorted_array = sort_2way($array, TRUE);
        foreach($sorted_array as $value) {
            echo $value . " ";
        }
        ?>
    </p>



</body>

</html>