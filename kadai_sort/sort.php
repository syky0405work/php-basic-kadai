<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">

  <title>PHPsort課題
  </title>
</head>

<body>
  <p>
<?php
    $nums = [15, 4, 18, 23, 10];

    function sort_2way($array, $order)
    {
      if ($order) {
        sort($array);
        echo "昇順にソートします。<br>";
        foreach ($array as $value) {
          echo $value . '<br>';
        }
      } else {
        rsort($array);
        echo "降順にソートします。<br>";
        foreach ($array as $value) {
          echo $value . '<br>';
        }
      }
      return $array;
    }
    implode('<br>', sort_2way($nums, true));
    implode('<br>', sort_2way($nums, false));
    ?>
  </p>


</body>

</html>
