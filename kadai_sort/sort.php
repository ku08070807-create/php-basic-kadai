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
        foreach($array as $value) {
            echo $value . " ";
        }   
        echo "<br>";

        $array = array(23, 18, 15, 10, 4);
        $sorted_array = sort_2way($array, "asc");
        foreach($sorted_array as $value) {
            echo $value . " ";
        }

   sort_2way($array,$order) {
            $sorted_array = $array;
            sort($sorted_array);
            return $sorted_array;
        }
        ?>
      

    </p>



</body>

</html>