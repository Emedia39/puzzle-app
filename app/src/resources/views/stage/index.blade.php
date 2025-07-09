<html lang=“ja”>
<body>
{{-- ページネーションリンク --}}
{{--<div>
    {{$stages->links()}}
</div>--}}
<h1>■ステージ一覧</h1>

<table border="1">
    <tr>
        <td>ID</td>
        <td>名称</td>
        <td>マス数</td>
    </tr>
    @foreach($stages as $stage)
        <form method="post" action="{{url('$stage/index')}}">
            <input type="hidden" name="id" value={{$stage->id}}>
            <tr>
                <td>{{ $stage->id }}</td>
                <td><a href="{{url('stages/individual')}}">{{ $stage->name }}</a></td>
                <td>{{ $stage->cells->count() }}</td>
            </tr>
        </form>
    @endforeach
</table>

display

</body>
</html>
