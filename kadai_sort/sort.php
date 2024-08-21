<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        echo "昇順にソートします。";
        echo '<br>';
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        asort($nums);
        foreach ($nums as $val) {
            echo $val."";
            echo '<br>';
        }
        echo "降順にソートします。";
        echo '<br>';
        arsort($nums);
        foreach ($nums as $val) {
            echo $val."";
            echo '<br>';
        }
        ?>
    </p>
</body>

</html>
