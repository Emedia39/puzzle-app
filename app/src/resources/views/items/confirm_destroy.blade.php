<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
</div>
<html lang="ja">
<head>
    <title>アイテム削除</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!--<script src="/js/bootstrap.bundle.min.js"></script>-->
<h1>■アイテム削除</h1>
<p>{{$item->name}}を削除する</p>

<form method="post" action="{{url('items/delete')}}">
    @csrf
    <input type="hidden" name="name" value={{$item->name}}>
    <button type="submit" name='id' value={{$item->id}}>削除
    </button>
</form>

<a href="{{url('items/index')}}">アイテム一覧へ戻る</a>

<!--ログアウトしてログイン画面へ-->
{{--<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>--}}

</body>
</html>
