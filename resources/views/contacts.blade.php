<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts</title>
</head>

<style>
  h2 {
    text-align: center;
  }

  table {
    margin: 30px auto;
  }

  tr {
    height: 80px;
  }

  th {
    text-align: left;
    width: 35%;
  }

  .example {
    color: gray;
    padding-left: 20px;
    font-size: small;
    margin-top: 5px;
  }

  p {
    padding-left: 5px;
    font-size: 5px;
    color: red;
    display: inline-block;
  }

  p.post {
    font-size: 5px;
    color: black;
    margin-right: 8px;
  }

  .nametext {
    border: 1px solid gray;
    width: 150px;
    height: 30px;
    border-radius: 5px;
  }

  .formtext {
    border: 1px solid gray;
    width: 100%;
    height: 30px;
    border-radius: 5px;
  }

  .posttext {
    border: 1px solid gray;
    width: 300px;
    height: 30px;
    border-radius: 5px;
  }

  .formtextarea {
    border: 1px solid gray;
    width: 100%;
    height: 50px;
    border-radius: 5px;
  }

  .radiobtn_m {
    transform: scale(1.5);
    margin-right: 20px;
  }

  .radiobtn_l {
    transform: scale(1.5);
    margin-right: 20px;
    margin-left: -50px;
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

  .error {
    padding-left: 5px;
    font-size: 5px;
    color: red;
  }
</style>

<body>
  <!-- フォーム -->
  <h2>お問い合わせ</h2>
  <form action="{{ route('contacts.confim') }}" method="post">
    <table>
      @csrf
      <tr>
        <th>お名前<p>※</p>
        </th>
        <td>
          <div class="error">
            @error('fullname'){{$message}}@enderror</div>
          <input class="nametext" name="full_name" type="text">
          <div class="example">例）山田</div>
        </td>
        <td>
          <div class="error">@error('fullname'){{$message}}@enderror</div>
          <input class="nametext" name="full_name" type="text">
          <div class="example">例）太郎</div>
        </td>
      </tr>
      <tr>
        <th>性別<p>※</p>
        </th>
        <td><input class="radiobtn_m" value="男性" name="gender" type="radio" checked>男性</td>
        <td><input class="radiobtn_l" value="女性" name="gender" type="radio">女性</td>
      </tr>
      <tr>
        <th>メールアドレス<p>※</p>
        </th>
        <td colspan="2">
          <div class="error">@error('email'){{$message}}@enderror</div>
          <input class="formtext" name="email" type="email">
          <div class="example">例)test@example.com</div>
        </td>
      </tr>
      <tr>
        <th>郵便番号<p>※</p>
        </th>
        <td colspan="2">
          <p class="post">〒</p>
          <div class="error">@error('postcode'){{$message}}@enderror</div>
          <input class="posttext" name="postcode" type="text">
          <div class="example">例)123-4567</div>
        </td>
      </tr>
      <tr>
        <th>住所<p>※</p>
        </th>
        <td colspan="2">
          <div class="error">@error('address'){{$message}}@enderror</div>
          <input class="formtext" name="address" type="text">
          <div class="example">例)東京都渋谷区千駄ヶ谷1-2-3</div>
        </td>
        <td></td>
      </tr>
      <tr>
        <th>建物名</th>
        <td colspan="2">
          <div class="error">@error('building_name'){{$message}}@enderror</div>
          <input class="formtext" name="building_name" type="text">
          <div class="example">例)千駄ヶ谷マンション101</div>
        </td>
      </tr>
      <tr>
        <th>ご意見<p>※</p>
        </th>
        <td colspan="2">
          <div class="error">@error('opinion'){{$message}}@enderror</div>
          <input class="formtextarea" name="opinion" type="text">
        </td>
      </tr>
    </table>

    <input class="submit" name="submit" type="submit" value="確認">
  </form>
</body>

</html>