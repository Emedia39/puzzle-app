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

<!--ユーザー一覧へ-->
<form method="post" action={{url('users/index')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='users'>ユーザー一覧へ</button>
</form>
<!--アイテム一覧へ-->
<form method="post" action={{url('items/index')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='items'>アイテム一覧へ</button>
</form>
<!--ユーザーの所持品一覧へ-->
<form method="post" action={{url('user_items/index')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='user_items'>ユーザーの所持アイテム一覧へ</button>
</form>

<!--ログアウトしてログイン画面へ-->
<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>

</body>
</html>
