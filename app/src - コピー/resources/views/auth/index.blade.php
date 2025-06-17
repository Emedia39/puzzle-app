<html lang=“ja”>
<body>
<h1>■ログイン画面</h1><!--変数で出力-->
　
<form method="post" action={{url('login')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <input name="name">
    <input name="password">
    <input type="submit" name='doLogin'></input>
</form>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

</body>
</html>
