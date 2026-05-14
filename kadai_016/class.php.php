<?php
// --- Step 2: クラスの作成 ---

// Foodクラスの定義
class Food {
    // プロパティ（属性）を定義
    private $name;
    private $price;

    // コンストラクタ（インスタンス化する時に自動で動く）
    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッド（関数）：価格を出力する
    public function show_price() {
        echo $this->price . '<br>';
    }
}

// Animalクラスの定義
class Animal {
    // プロパティを定義
    private $name;
    private $height;
    private $weight;

    // コンストラクタ
    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッド：身長を出力する
    public function show_height() {
        echo $this->height . '<br>';
    }
}

// --- Step 3: インスタンス化と出力 ---

// Foodクラスのインスタンスを作成（例：ポテト、250円）
$food = new Food('potato', 250);

// Animalクラスのインスタンスを作成（例：犬、60cm、5000g）
$animal = new Animal('dog', 60, 5000);

// インスタンスの内容を print_r で出力
print_r($food);
echo '<br>'; // 改行
print_r($animal);
echo '<br>'; // 改行

// --- Step 4: メソッドへのアクセス ---

// メソッドを実行
$food->show_price();
$animal->show_height();
?>