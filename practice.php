<?php 

 // $array = [1,2,3];
  
 //echo "123";
// //echoはarrayを出力できない
 //print_r($array);

 // $array =["banana" => "バナナ","ringo" => "ゴリラ"];//bananaがキー。

 // print_r($array["ringo"]);

  //2次元配列
  $hoge = ['ja' => 'りんご','us' => 'apple'];
  $array = ["ringo" => $hoge];

  print_r ($array["ringo"]["ja"]);//2次元配列

