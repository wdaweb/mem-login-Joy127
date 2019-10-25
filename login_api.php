<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/

  $acc=$_POST['acc'];  
  $pw=$_POST['pw'];  


  $dsn="mysql:host=localhost; charset=utf8; dbname=mydb";
  $pdo=new PDO($dsn,'root','');

  $sql="SELECT * FROM `user` where acc='$acc' && pw='$pw'";

  $data=$pdo->query($sql)->fetch();
  
  if ($acc==$data['acc'] && $pw==$data['pw']){
    echo "登入成功";
    //header回到登入畫面，不要停留在本頁
  }else {
    echo "登入失敗";
    //header回到失敗畫面，不要停留在本頁
  }


?>