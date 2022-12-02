<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>管理システム</title>
</head>

<style>
  h2 {
    text-align: center;
  }

  .card {
    width: 80%;
    height: 300PX;
    border-width: thin;
    border-style: solid;
    margin: auto;
  }

  form {
    margin: 5% 5% 0 5%;
  }

  .item {
    font-weight: bold;
    display: inline-block;
    margin-right: 10%;
    margin-bottom: 5%;
  }

  .textbox {
    border: 1px solid gray;
    width: 150px;
    height: 30px;
    border-radius: 5px;
    border-width: thin;
    margin-right: 5%;
  }

  .textbox_email {
    border: 1px solid gray;
    width: 150px;
    height: 30px;
    border-radius: 5px;
    border-width: thin;
    margin-left: -9%;
  }

  ul {
    display: inline;
    margin-left: -15%;
  }

  li {
    display: inline;
    margin-left: 3%;
  }

  .radiobtn {
    transform: scale(1.5);
    margin-right: 20px;
    display: inline-block;
  }

  p {
    display: inline;
    margin-left: -3%;
    margin-right: 2%;
  }

  .submit {
    width: 120px;
    height: 40px;
    display: block;
    margin: auto;
    background-color: black;
    color: white;
    border-radius: 5px;
  }

  .fix {
    margin-top: 5px;
    text-align: center;
    display: block;
  }

  a:link {
    color: black;
  }
</style>

<body>
  <!-- 検索画面 -->
  <h2>管理システム</h2>
  <div class="card">
    <form action="search" method="post">
      <div class="item">お名前</div>
      <input class="textbox" type="text">
      <div Class="item">性別</div>
      <ul>
        <li><input class="radiobtn" value="全て" name="gender" type="radio" checked>全て</td>
        </li>
        <li><input class="radiobtn" value="男性" name="gender" type="radio">男性</td>
        </li>
        <li><input class="radiobtn" value="女性" name="gender" type="radio">女性</td>
        </li>
      </ul>
      <div class="item">登録日</div>
      <input class="textbox" type="text">
      <p>~</p>
      <input class="textbox" type="text">
      <div class="item">メールアドレス</div>
      <input class="textbox_email" type="text">
    </form>
    <input class="submit" name="submit" type="submit" value="検索">
    <div class="fix"><a href="/admin">リセット</a></div>
  </div>

  <!-- 検索結果 -->
</body>

</html>