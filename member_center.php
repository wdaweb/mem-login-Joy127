<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="member">
    <div class="wellcome">     
        <?php
            $id=$_GET['id'];            
            $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=mydb",'root','');
            $sql="SELECT * FROM `user` where id='$id'";
            $data=$pdo->query($sql)->fetch();
            $name=$data['name'];
        ?>
        <center><?php echo " HI! $name 歡迎光臨！"; ?></center> 
    </div>

    <div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->
      
    </div>
    
  </div>
</body>
</html>