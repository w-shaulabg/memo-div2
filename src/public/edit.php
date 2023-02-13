<?php
$dbUserName = 'root';
$dbPassword = 'password';
$pdo = new PDO(
    'mysql:host=mysql; dbname=memo; charset=utf8',
    $dbUserName,
    $dbPassword
);
?>

<body>
  
  <h2>編集</h2>

  <form method="post" action="./update.php">

    <input type="hidden" name="id">

    <div>
      <label for="name">タイトル
        <input type="text" name="title">
      </label>
    </div>

    <div>
      <label for="content">感想
        <input type="textarea" name="content">
      </label>
    </div>

    <button type="submit">更新</button>
    
  </form>

</body>