<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>

<html lang=“ja”>
<body>
<h1>ユーザーの所持アイテム一覧</h1>

{{--アカウント文繰り返す※HTML版コメントアウト--}}
<ul>
    @foreach($user_items as $user_item)
        <li>名前：{{$user_item['name']}} * パスワード：{{$user_item['password']}}</li>
    @endforeach
</ul>

<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>

</body>
</html>
