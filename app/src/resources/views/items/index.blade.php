<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>

<html lang=“ja”>
<body>
<h1>アイテム一覧</h1>

{{--アカウント文繰り返す※HTML版コメントアウト--}}
<ul>
    @foreach($items as $item)
        <li>名前：{{$item['name']}}</li>
    @endforeach
</ul>

<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>

</body>
</html>
