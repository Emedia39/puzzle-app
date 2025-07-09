<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>

<html lang=“ja”>
<body>
<h1>{{$name}}の登録完了！</h1>

<a href="{{url('items/index')}}">アイテム一覧へ戻る</a>

<!--ログアウトしてログイン画面へ-->
{{--<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>--}}

</body>

