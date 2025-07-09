<html lang="ja">
<head>
    <title>アイテム作成</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!--<script src="/js/bootstrap.bundle.min.js"></script>-->
<h1>■アイテム作成</h1>
<form method="post" action="{{url('items/store')}}">
    @csrf
    <table border="1">
        <tr>
            <td>アイテム名</td>
            <td><input type="text" name="name" size="30"></td>
        </tr>
        <tr>
            <td>タイプ</td>
            <td><input type="number" name="type" size="30"></td>
        </tr>
        <tr>
            <td>効果値</td>
            <td><input type="number" name="effect" size="30"></td>
        </tr>
        <tr>
            <td>説明</td>
            <td><input type="text" name="detail" size="30"></td>
        </tr>
    </table>

    <button type="submit" name="register">作成</button>
    <br>

    <a href="{{url('items/index')}}">アイテム一覧へ戻る</a>

</form>
{{--<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>--}}

</body>
</html>
