<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>

<html lang=“ja”>

<h1>アイテム一覧</h1>

<body>

{{--アカウント文繰り返す※HTML版コメントアウト--}}
<!--アイテム削除へ-->
<!--ログアウトしてログイン画面へ-->

<style>
    button.btn-update {
        font-size: 10px; /* ボタンのフォントサイズ */
        color: #0dcaf0;
    }

    button.btn-destroy {
        font-size: 10px; /* ボタンのフォントサイズ */
        color: #ff2d20;
    }

</style>

<table border="1">
    <tr>
        <th>ID</th>
        <th>アイテム名</th>
        <th>種類</th>
        <th>効果値</th>
        <th>詳細</th>
        <th>操作</th>
    </tr>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->effect }}</td>
            <td>{{ $item->detail }}</td>
            <td>
                <form method="post" action={{url('items/confirm_update')}}>
                    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
                    <button type="submit" name='id' class="btn-update" value={{$item->id}}>更新</button>
                </form>
                <form method="post" action={{url('items/confirm_destroy')}}>
                    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
                    <button type="submit" name='id' class="btn-destroy" value={{$item->id}}>削除</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

{{--
<ul>
    @foreach($items as $item)
        <li>ID:{{$item['id']}} *　アイテム名：{{$item['name']}} *　種類：{{$item['type']}} *　効果値：{{$item['detail']}}</li>
    @endforeach
</ul>
--}}

<!--アイテム登録へ-->
<a href="{{url('items/create')}}">アイテム登録へ</a><br>

{{--<form method="post" action={{url('items/create')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='create'>アイテム登録へ</button>
    <!--ログアウトしてログイン画面へ-->
</form>--}}

<a href="{{url('accounts/index')}}">アカウント一覧へ戻る</a>

{{--<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>--}}

</body>
</html>
