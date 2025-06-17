<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>

<html lang=“ja”>
<body>
<h1>ユーザー一覧</h1>

{{--アカウント文繰り返す※HTML版コメントアウト--}}
<ul>
    @foreach($users as $user)
        <li>名前：{{$user['name']}} * パスワード：{{$user['password']}}</li>
    @endforeach
</ul>

<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>

</body>
</html>
