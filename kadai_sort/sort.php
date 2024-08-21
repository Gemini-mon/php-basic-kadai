<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sortArray($nums, $order) {
            if ($order) {
                asort($nums); // 昇順にソート
                echo "昇順にソートします。";
                echo '<br>';
            } else {
                arsort($nums); // 降順にソート
                echo "降順にソートします。";
                echo '<br>';
            }
            foreach ($nums as $value) {
                echo $value . " ";
                echo '<br>';
            }
        }
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        $order = TRUE; 
        sortArray($nums, $order);
        
        $nums = [15, 4, 18, 23, 10];
        $order = FALSE; 
        sortArray($nums, $order);
        ?>
    </p>
</body>

</html>
