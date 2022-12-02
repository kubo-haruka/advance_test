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
    width: 40%;
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
  <!-- フォーム -->
  <h2>内容確認</h2>
  <form action="{{ route('contacts.tanks') }}" method="post">
    <table>
      @csrf
      <tr>
        <th>お名前</th>
        <td>
          {{ $contacts['fullname'] }}
          <input name="fullname" value="{{ $contacts['fullname'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>性別</th>
        <td>
          {{ $contacts['gender'] }}
          <input name="gender" value="{{ $contacts['gender'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>
          {{ $contacts['email'] }}
          <input name="email" value="{{ $contacts['email'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>郵便番号</th>
        <td>
          {{ $contacts['postcode'] }}
          <input name="postcode" value="{{ $contacts['postcode'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>住所</th>
        <td>
          {{ $contacts['address'] }}
          <input name="address" value="{{ $contacts['address'] }}" type="hidden">
        </td>
        <td></td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>
          {{ $contacts['building_name'] }}
          <input name="building_name" value="{{ $contacts['building_name'] }}" type="hidden">
        </td>
      </tr>
      <tr>
        <th>ご意見</th>
        <td>
          {{ $contacts['opinion'] }}
          <input name="opinion" value="{{ $contacts['opinion'] }}" type="hidden">
        </td>
      </tr>
    </table>

    <input class="submit" name="submit" type="submit" value="確認">
    <div class="fix"><a href="/contacts">修正する</a></div>
  </form>
</body>

</html>