<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>

<html lang=“ja”>
<body>
{{-- ページネーションリンク --}}
<div>
    {{$users->links()}}
</div>
<h1>ユーザー一覧</h1>

<!--これでもできるけど…下の方がすこ-->
{{--アカウント文繰り返す※HTML版コメントアウト--}}
<table border="1">
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>レベル</th>
        <th>経験値</th>
    </tr>
    @foreach($users as $user)
        <form method="post" action="{{url('users/individual')}}">
            {{--<input type="hidden" name="id" value={{$user->id}}>--}}
            {{--@csrf--}}
            <tr>
                <td>{{ $user->id }}</td>
                <td><a href="{{url('users/individual',['id'=>$user->id])}}">{{ $user->name }}</a></td>
                <td>{{ $user->level }}</td>
                <td>{{ $user->experience }}</td>
            </tr>
        </form>
    @endforeach
</table>

{{--
<ul>
    @foreach($users as $user)
        <li>ID:{{$user['id']}} *　ユーザー名：{{$user['name']}} *　レベル：{{$user['level']}}
            *　経験値：{{$user['experience']}}
            *　
        </li>
    @endforeach
</ul>
--}}
{{--<form>
    <input type="hidden" name="id" value={{$user->id}}>
    <a href="{{url('users/individual')}}">■ユーザー情報(個別: 仮設置)*{{ $user->id }}</a>
</form>--}}

<a href="{{url('accounts/index')}}">アカウント一覧へ戻る</a>

{{--<form method="post" action={{url('logout')}}>
    @csrf<!--CSRF来策・やらないとララベルが判断して419エラー-->
    <button type="submit" name='logout'>戻る</button>
</form>--}}

</body>
</html>
