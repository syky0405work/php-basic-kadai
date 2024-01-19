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

      public function set_price(int $price)
      {
        $this->price = $price;
      }
      public function show_price()
      {
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

      public function set_height(int $height)
      {
        $this->height = $height;
      }
      public function show_height()
      {
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
    $food->set_price(500);
    $food->show_price();
    $animal->set_height(100);
    $animal->show_height();

    ?>
  </p>


</body>

</html>