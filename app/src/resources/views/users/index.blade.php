<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>

<html lang=“ja”>
<body>
<h1>ユーザー一覧</h1>

{{--アカウント文繰り返す※HTML版コメントアウト--}}
<ul>
    @foreach($users as $user)
        <li>ID:{{$user['id']}} *　ユーザー名：{{$user['name']}} *　レベル：{{$user['level']}}
            *　経験値：{{$user['experience']}}
            *　
        </li>
    @endforeach
</ul>

<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>

</body>
</html>
