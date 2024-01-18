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

    function sort_2way($array, $order = true)
    {
      if ($order) {
        sort($array);
      } else {
        rsort($array);
      }
      return $array;
    }
    echo "昇順でソートします。<br>" . implode('<br>', sort_2way($nums, true));
    echo '<br>';
    echo "降順でソートします。<br>" . implode('<br>', sort_2way($nums, false));
    ?>


  </p>


</body>

</html>