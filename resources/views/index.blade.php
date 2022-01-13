<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if (count($errors) > 0)
    <p>入力に問題があります</p>
  @endif
  <form action="/" method="post">
    @csrf
      @error('name')
        <p>Error {{ $message }} </p>
      @enderror
      <label for="name">氏名</label></br>
      <input type="text" name="name"></br>
      @error('email')
        <p>Error {{ $message }} </p>
      @enderror
      <label for="email">メールアドレス</label></br>
      <input type="email" name="email"></br>
      <input type="submit" value="送信する">
  </form>
</body>
</html>