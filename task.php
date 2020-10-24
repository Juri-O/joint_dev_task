# 課題の回答は このファイル をご利用下さい。
# 回答の出力を確認される際は，「php task.php」をターミナルから実行して下さい。

print("#####q1#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
<?php
//Q1
$names = ["田中","佐藤","佐々木","高橋"];
//配列に「斎藤」を追加
array_push($names,"斎藤");
print_r($names);
 ?>

echo PHP_EOL;

print("#####q2#####".PHP_EOL);
$array1 = ["dog", "cat", "fish"];
$array2 = ["bird", "bat", "tiger"];

  # 以下に回答を記載
<?php
//Q2
$array1 = ["dog","cat","fish"];
$array2 = ["bird","bat","tiger"];
//$arrayに結合した配列を代入
$array = array_merge($array1,$array2);
print_r($array);
 ?>

echo PHP_EOL;

print("#####q3#####".PHP_EOL);
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];

  # 以下に回答を記載
<?php
//Q3
$numbers = [1, 5, 8, 10, 2, 3, 2, 3, 3, 1, 4, 5, 9];
//回数カウント　$numbers_count
$numbers_count = 0;
//３のとき、カウントに１を追加する
foreach ($numbers as $value) {
  if ($value == 3) {
    $numbers_count++;
  }
}
echo $numbers_count;
 ?>

echo PHP_EOL;

print("#####q4#####".PHP_EOL);
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];

  # 以下に回答を記載
<?php
//Q4
$sports = ["サッカー", "フットサル", null, "野球", "バスケ", null, "バレー"];
//nullを除く
$sportsname = array_filter($sports);
print_r($sportsname);
 ?>

echo PHP_EOL;

print("#####q5#####".PHP_EOL);
$array1 = [];
$array2 = [1, 5, 8, 10];

  # 以下に回答を記載
<?php
//Q5
$array1 = [];
//nullかどうか判別
if (empty($array1)) {
  echo "true";
}else {
  echo "false";
}?>

<?php
$array2 = [1, 5, 8, 10];
if (empty($array2)) {
  echo "true";
}else {
  echo "false";
}
 ?>

echo PHP_EOL;

print("#####q6#####".PHP_EOL);
$numbers1 = [1, 2, 3, 4, 5];

  # 以下に回答を記載
<?php
//Q6
//配列の要素を１０倍するコールバック関数
function valuecalc($n){
  return($n * 10);
}
$numbers1 = [1, 2, 3, 4, 5];
$numbers2 = array_map("valuecalc", $numbers1);
print_r($numbers2);
 ?>

echo PHP_EOL;

print("#####q7#####".PHP_EOL);
$array = ["1", "2", "3", "4", "5"];

  # 以下に回答を記載
<?php
//Q7
$array = ["1", "2", "3", "4", "5"];
foreach ($array as $val) {
  //文字列を整数型に変換
  $val = (integer)$val;
  var_dump(gettype($val));
}
print_r($array);
 ?>

echo PHP_EOL;

print("#####q8#####".PHP_EOL);
$programming_languages = ["php","ruby","python","javascript"];

  # 以下に回答を記載
<?php
//Q8
//文字列を大文字にする
function upper($n){
  return(strtoupper($n));
}
$programming_languages = ["php","ruby","python","javascript"];
$upper_case_programming_languages = array_map("upper",$programming_languages);
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);
 ?>

  # 以下は変更しないで下さい
print_r($programming_languages);
echo PHP_EOL;
print_r($upper_case_programming_languages);

echo PHP_EOL;

print("#####q9#####".PHP_EOL);
$names = ["田中", "佐藤", "佐々木", "高橋"];

  # 以下に回答を記載
<?php
//Q9
$names = ["田中", "佐藤", "佐々木", "高橋"];
$names2 = array();
foreach ($names as $key => $value) {
  $key++;
  array_push($names2,"会員No.{$key} {$value}");
}
print_r($names2);
?>

echo PHP_EOL;

print("#####q10#####".PHP_EOL);
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];

  # 以下に回答を記載
<?php
//Q10
$foods = ["いか","たこ","うに","しゃけ","うにぎり","うに軍艦","うに丼"];
foreach ($foods as $food) {
  if(strstr($food,"うに")){
    echo "好物です";
    echo PHP_EOL;
  }else{
    echo "まあまあ好きです";
    echo PHP_EOL;
  }
}
?>

echo PHP_EOL;

print("#####q11#####".PHP_EOL);@まだ
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳", "ハンドボール", ["卓球", "サッカー", "ボルダリング"]];

  # 以下に回答を記載
<?php
//Q11
echo "ユーザーの趣味一覧";
echo PHP_EOL;
$sports = ["サッカー", "バスケ", "野球", ["フットサル", "野球"], "水泳",
"ハンドボール", ["卓球", "サッカー", "ボルダリング"]];
$sports_number = 0;
foreach ($sports as $key1 => $value1) {
  if (!is_array($value1)) {
    $sports_number++;
    echo "No".$sports_number." ".$value1;
    echo PHP_EOL;
  }else {
    foreach ($value1 as $key2 => $value2) {
      if (strstr($value2,"サッカー")) {
      }elseif (strstr($value2,"野球")) {
      }else {
        $sports_number++;
        echo "No".$sports_number." ".$value2;
        echo PHP_EOL;
      }
    }
  }
}
 ?>

echo PHP_EOL;

print("#####q12#####".PHP_EOL);
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];

  # 以下に回答を記載
<?php
//Q12
$data = [ "user" => [ "name" => "satou", "age" => 33 ] ];
foreach ($data as $key1 => $value1) {
  foreach ($value1 as $key2 => $value2) {
    if($key2 == "name"){
      echo $value2;
      echo PHP_EOL;
    }
  }
}
 ?>

echo PHP_EOL;

print("#####q13#####".PHP_EOL);
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];

  # 以下に回答を記載
<?php
//Q13
$user_data = [ "name" => "神里", "age" => 31, "address" => "埼玉"];
$update_data = [ "age" => 32, "address" => "沖縄" ];
$user_data = array_replace($user_data,$update_data);
print_r($user_data);
 ?>

echo PHP_EOL;

print("#####q14#####".PHP_EOL);
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];

  # 以下に回答を記載
<?php
// Q14
$data = [ "name" => "satou", "age" => 33, "address" => "saitama", "hobby" => "soccer", "email" => "hoge@fuga.com" ];
$keys = array_keys($data);
$value = array_values($data);
$data = array($keys,$value);
print_r($data);
 ?>

echo PHP_EOL;

print("#####q15#####".PHP_EOL);
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];

  # 以下に回答を記載
<?php
//Q15
$data1 = [ "name" => "saitou", "hobby" => "soccer", "age" => 33, "role" => "admin" ];
$data2 = [ "name" => "yamada", "hobby" => "baseball", "role" => "normal" ];
if(array_key_exists("age",$data1)){
  echo "OK";
  echo PHP_EOL;
}else {
  echo "NG";
  echo PHP_EOL;
}
if(array_key_exists("age",$data2)){
  echo "OK";
  echo PHP_EOL;
}else {
  echo "NG";
  echo PHP_EOL;
}
  ?>

print("#####q16#####".PHP_EOL);
$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];

  # 以下に回答を記載
<?php
//Q16

$users = [
  [ "name" => "satou", "age" => 22 ],
  [ "name" => "yamada", "age" => 12 ],
  [ "name" => "takahashi", "age" => 32 ],
  [ "name" => "nakamura", "age" => 41 ]
];
foreach ($users as $key => $value) {
  $name = $value["name"];
  $age = $value["age"];
  echo "私の名前は".$name."です。年齢は".$age."歳です。";
  echo PHP_EOL;
  }

 ?>

echo PHP_EOL;

print("#####q17#####".PHP_EOL);

<?php
//Q17

class User

{
  # コードを追加
  public $name;
  public $age;
  public $sex;

  public function __construct($name,$age,$sex)
  {
    $this->name = $name;
    $this->age = $age;
    $this->sex = $sex;
  }

  public function info()
  {
    echo "名前：".$this->name;
    echo PHP_EOL;
    echo "年齢：".$this->age;
    echo PHP_EOL;
    echo "性別：".$this->sex;
    echo PHP_EOL;
  }

}

$user1 = new User("神里",32,"男");
$user2 = new User("あじー",32,"男");

$user1->info();
print("-------------".PHP_EOL);
$user2->info();

 ?>


echo PHP_EOL;

print("#####q18#####".PHP_EOL);

# コードを追加
<?php
//Q18

class Man
{

public $name;
public $age;

public function __construct($name,$age)
{
  $this->name = $name;
  $this->age = $age;
}

 public function introduce()
 {
   if($this->age == 32)
   {
     echo "こんにちは，".$this->name."と申します。宜しくお願いいたします。";
     echo PHP_EOL;
   }else
   {
     echo "はいさいまいど〜,".$this->name."です！！！";
     echo PHP_EOL;
   }
 }

}

$man1 = new Man("あじー",32);
$man2 = new Man("ゆたぼん",10);

$man1->introduce();
$man2->introduce();

 ?>


echo PHP_EOL;

print("#####q19#####".PHP_EOL);

<?php
//q19

class Item{
  # 以下を修正して下さい

  public $name;

  function __construct($book_name){
    $this->name = $book_name;
  }
}
  # 以下は変更しないで下さい

$book = new Item("ゼロ秒思考");
print($book->name.PHP_EOL);

 ?>

echo PHP_EOL;

print("#####q20#####".PHP_EOL);

<?php
//Q20

class Human
{

  # コードを追加
  public $name;
  public $age;

  public function __construct($name,$age){
    $this->name = $name;
    $this->age = $age;
  }

}

class Zoo
{

  # コードを追加
  public $category;
  public $price;

  public function __construct($category,$price){
    $this->category = $category;
    $this->price = $price;
  }

  public function info_entry_fee($human){
    if($human->age >= 0 && $human->age <= 5){
      echo $human->name."さんの入場料金は".$this->price["infant"]."円です。";
      echo PHP_EOL;
    }elseif ($human->age >= 6 && $human->age <= 12) {
      echo $human->name."さんの入場料金は".$this->price["children"]."円です。";
      echo PHP_EOL;
    }elseif ($human->age >= 13 && $human->age <= 64) {
      echo $human->name."さんの入場料金は".$this->price["adult"]."円です。";
      echo PHP_EOL;
    }else{
      echo $human->name."さんの入場料金は".$this->price["senior"]."円です。";
      echo PHP_EOL;
    }
  }

}

$zoo = new Zoo("旭山動物園",[ "infant" => 0, "children" => 400, "adult" => 800, "senior" => 500]);

$human1 = new Human("たま",3);
$human2 = new Human("ゆたぼん",10);
$human3 = new Human("あじー",32);
$human4 = new Human("ぎん",108);

$humans = [ $human1, $human2, $human3, $human4 ];

foreach($humans as $human){
  $zoo->info_entry_fee($human);
}

 ?>

echo PHP_EOL;

print("#####q21#####".PHP_EOL);

<?php
//Q21

for($i=1; $i<=30; $i++){
  if($i % 21 === 0){
    echo "FizzHoge";
  }elseif ($i % 15 === 0) {
    echo "FizzBuzz";
  }elseif ($i % 3 === 0){
    echo "Fizz";
  }elseif ($i % 5 === 0) {
    echo "Buzz";
  }elseif ($i % 7 === 0) {
    echo "Hoge";
  }elseif ($i % 11 === 0) {
    echo "Piyo";
  }else{
    echo $i;
  }
  echo PHP_EOL;
}

 ?>
