<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>註冊登入系統</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    /***************************************************
     * 會員註冊行為：
     * 1.建立連線資料庫的參數
     * 2.判斷是否有送來表單資料
     * 3.建立所需的SQL語法
     * 4.將表單資料以變數形式填入SQL語法中
     * 5.執行資料庫連線並送出SQL語法
     * 6.判斷SQL語法是否執行成功，執行下一步
     ***************************************************/
    echo $acc=$_POST['acc'];
    echo "<br>";
    echo $pw=$_POST['pw'];
    echo "<br>";
    echo $name=$_POST['name'];
    echo "<br>";
    echo $addr=$_POST['addr'];
    echo "<br>";
    echo $tel=$_POST['tel'];
    echo "<br>";
    echo $date=$_POST['date'];
    echo "<br>";
    echo $email=$_POST['email'];
    echo "<br>";
    
    $dsn="mysql:host=localhost; charset=utf8; dbname=mydb";
    $pdo=new PDO($dsn,'root','');

    $sql="INSERT INTO user (`acc`,`pw`,`name`,`addr`,`tel`,`birthday`,`email`)
        values('$acc','$pw','$name','$addr','$tel','$date','$email')";

    echo "sql語法是:" . $sql;
    // echo $pdo->query($sql);
    // query用在查詢資料，需資料庫回傳資料時使用

    // echo $pdo->exec($sql); 
    // 用在不需要回傳資料，insert update delete 時可用

    if ($pdo->exec($sql)) {
        // echo "新增資料成功";
        header("location:index.php?s=1");
        // header() 是一個函數,將檔案傳到()內指向的檔案位置 ?後面是傳送出去的值
    }else {
        // echo "新增失敗，請洽資料庫管理人員";
        header("location:reg.php?s=2");
    }

    ?>

</body>
</html>