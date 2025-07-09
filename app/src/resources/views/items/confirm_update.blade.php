<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>

<html lang="ja">
<head>
    <title>アイテム更新</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!--<script src="/js/bootstrap.bundle.min.js"></script>-->
<h1>■アイテム更新</h1>
<p>{{$item->name}}を更新する</p>

<style>
    {{--placeholder=""で、あらかじめ半透明が可能--}}
</style>

<div>
    <form method="post" action="{{url('items/change')}}">
        @csrf
        <table border="1">
            <tr>
                <td>アイテム名(name)</td>
                <td><input type="text" name="name" size="20" placeholder={{$item->name}}></td>
            </tr>
            <tr>
                <td>タイプ(type)※数値</td>
                <td><input type="number" name="type" size="20" placeholder={{$item->type}}></td>
            </tr>
            <tr>
                <td>効果値(effect)※数値</td>
                <td><input type="number" name="effect" size="20" placeholder={{$item->effect}}></td>
            </tr>
            <tr>
                <td>説明(detail)</td>
                <td><input type="text" name="detail" size="50" placeholder={{$item->detail}}></td>
            </tr>
        </table>

        {{--<input type="hidden" name="name" value={{$item->name}}>--}}
        <button type="submit" name='id' value={{$item->id}}>変更</button>

    </form>
</div>
>

<a href="{{url('items/index')}}">アイテム一覧へ戻る</a>

<!--ログアウトしてログイン画面へ-->
{{--<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>--}}


</body>
</html>
