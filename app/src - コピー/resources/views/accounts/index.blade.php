<div>
    <!-- We must ship. - Taylor Otwell -->
</div>
<html lang=“ja”>
<body>
<h1>■{{$title}}</h1><!--変数で出力・$title{}{}-->


{{--アカウント文繰り返す※HTML版コメントアウト--}}
<ul>
    @foreach($accounts as $account)
        <li>名前：{{$account['name']}} * パスワード：{{$account['password']}}</li>
    @endforeach
</ul>

<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>

</body>
</html>
