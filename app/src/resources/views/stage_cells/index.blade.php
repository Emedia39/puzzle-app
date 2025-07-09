<html lang=“ja”>
<body>
{{-- ページネーションリンク --}}
{{--<div>
    {{$stages->links()}}
</div>--}}
<h1>■ステージ情報</h1>
<p>マップID</p>
<p>マップ名称</p>

<table border="1">
    <tr>
        <td>x座標</td>
        <td>y座標</td>
        <td>オブジェクト名</td>
    </tr>
    @foreach($stageCells as $stageCell)
        <form method="post" action="{{url('$stage/index')}}">
            <input type="hidden" name="id" value={{$stageCell->id}}>
            <tr>
                <td>{{ $stageCell->x }}</td>
                <td>{{ $stageCell->y }}</td>
                <td>{{ $stageCell->object_id}}</td>
            </tr>
        </form>
    @endforeach
</table>

<a href="{{url('stages/index')}}">ステージ一覧へ戻る</a>

</body>
</html>
