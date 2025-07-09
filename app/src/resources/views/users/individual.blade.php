<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
</div>

<html lang=“ja”>
<body>
{{-- ページネーションリンク --}}

<h1>■ユーザー情報(個別)</h1>

<!--これでもできるけど…下の方がすこ-->
{{--アカウント文繰り返す※HTML版コメントアウト--}}
<table border="1">
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>レベル</th>
        <th>経験値</th>
    </tr>

    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->level }}</td>
        <td>{{ $user->experience }}</td>
    </tr>

</table>

<table border="2">
    <tr>
        <th>アイテム名</th>
        <th>アイテム所持数</th>
    </tr>
    @foreach($user->items as $item)
        <td>{{$item->name}}</td>
        <td>{{$item->pivot->amount}}</td>
    @endforeach
</table>

{{--
<h1>■ユーザーの所持アイテム情報</h1>

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
</table>--}}

<a href="{{url('users/index')}}">ユーザー一覧へ戻る</a>

</body>
</html>
