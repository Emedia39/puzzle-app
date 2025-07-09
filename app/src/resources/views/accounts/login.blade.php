<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<html lang=“ja”>
<body>
<h1>■ログイン画面</h1><!--変数で出力-->

@extends('layouts.app')
@section('title','ログイン画面')
@section('body')
    <form>
        <input>
        <input>
    </form>
@endsection

<form method="post" action={{url('dologin')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <input name="name">
    <input name="password">
    <input type="submit" name='doLogin'></input>
</form>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

</body>
</html>
