<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>尋回密碼</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>找回密碼</h1>
<form action="findpw.php" method="post">
<!---------設計表單內容---------->
  <p center>請輸入您的電話號碼或電子郵件地址：</p>
  <br>
  <table class="wrapper">
    <input type="text" name="keyin" >
    <input type="submit" value="尋找"">
    <tr>
      <td colspan="2" class="ct reg">
        <a href="index.php">回首頁</a>
      </td>
    </tr>
  </table>
</form>
</body>
</html>
