<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>

<html lang=“ja”>
<body>
<h1>ユーザーの所持アイテム一覧</h1>

{{--アカウント文繰り返す※HTML版コメントアウト--}}
<table border="1">
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>アイテム名</th>
    </tr>
    @foreach($userItems as $userItem)
        <tr>
            <td>{{ $userItem->id }}</td>
            <td>{{ $userItem->user_id }}</td>
            <td>{{ $userItem->item_id }}</td>
        </tr>
    @endforeach
</table>

{{--
<ul>
    @foreach($userItems as $userItem)
        <li>ID:{{$userItem['id']}} *　ユーザー名：{{$userItem['user_id']}} *　アイテム名：{{$userItem['item_id']}}</li>
    @endforeach
</ul>
--}}

<a href="{{url('accounts/index')}}">アカウント一覧へ戻る</a>

{{--<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>--}}

</body>
</html>
