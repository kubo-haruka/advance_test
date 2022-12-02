<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts</title>
</head>

<style>
  .tanks {
    margin-top: 50%;
    text-align: center;
  }

  .back {
    width: 120px;
    height: 40px;
    display: block;
    margin: auto;
    background-color: black;
    color: white;
    border-radius: 5px;
  }
</style>

<body>
  <!-- フォーム -->
  <form action="" method="post">
      @csrf
      <div class="tanks">ご意見いただきありがとうございました。</div>
    <input class="back" name="submit" type="submit" value="トップページへ">
  </form>
</body>

</html>