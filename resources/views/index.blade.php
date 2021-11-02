<!doctype html>
<html lang="ja">
  <head>
    <title>お問い合わせ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <h3>トップページ</h3>

    <form action="/send" method="post">
      @csrf
      氏名<br>
      <input type="text" name="name"><br>
      メールアドレス<br>
      <input type="text" name="email"><br>
      <input type="submit" name="submit" value="送信する">
    </form>
  </body>
</html>