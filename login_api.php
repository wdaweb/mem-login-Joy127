<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
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

    // method 4  
      $sql="SELECT count(*) as 'r' FROM `user` where acc='$acc' && pw='$pw'";
      $data=$pdo->query($sql)->fetchColumn();
    //   print_r($data);
      if ($data) {
        echo "登入成功！";
      }else {
           echo "登入失敗！";
      } 
      

    // method 3  
    //   $sql="SELECT count(*) as 'r' FROM `user` where acc='$acc' && pw='$pw'"; 
    //   $data=$pdo->query($sql)->fetch();
    //   print_r($data);
    //    if ($data['r']==1) {
    //     echo "登入成功！";
    //    }else {
    //        echo "登入失敗！";
    //    }  
    
    // method 2 
    //   $sql="SELECT count(*) as 'r' FROM `user` where acc='$acc' && pw='$pw'";
    //   $data=$pdo->query($sql)->fetch();  
    //   print_r($data);  
    //   if (!empty($data)) {
    //     echo "登入成功！";
    //    }else {
    //        echo "登入失敗！";
    //    }  

    // method 1     
    //   $sql="SELECT * FROM `user` where acc='$acc' && pw='$pw'";
    //   $data=$pdo->query($sql)->fetch();
    //   $id=$data['id'];           
    //   if ($acc==$data['acc'] && $pw==$data['pw']){    
    //       header("location:member_center.php?id=$id");        
    //   }else {  
    //       echo "登入失敗";  
    //       header("location:loginFail.php");      
    //   }

    ?>
</body>
</html>