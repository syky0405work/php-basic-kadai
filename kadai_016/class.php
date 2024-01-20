<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">

  <title>PHP16章課題</title>
</head>

<body>
<p>
    <?php
    class Food
    {
      private $name;
      private $price;


      public function show_price(int $price)
      {
        $this->price = $price;
        echo $this->price . '<br>';
      }

      public function __construct(string $name, int $price)
      {
        $this->name = $name;
        $this->price = $price;
      }
    }
    $food = new Food('りんご', 300);
    print_r($food);

    echo '<br>';

    class Animal
    {
      private $name;
      private $height;
      private $weight;

      public function show_height(int $height)
      {
        $this->height = $height;
        echo $this->height . '<br>';
      }

      public function __construct(string $name, int $height, int $weight)
      {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }
    $animal = new Animal('ねこ', 80, 50);
    print_r($animal);

    echo '<br>';

    // メソッドへのアクセス、実行
    $food->show_price(500);
    $animal->show_height(100);

    ?>
  </p>

</body>

</html>
