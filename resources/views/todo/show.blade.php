@extends("layouts.layout")

@section("title", "Todo一覧")

@section("menubar")
@parent
詳細ページ
@endsection

@section("content")
<div class="show">
    <table>
        <tr>
            <th>タイトル</th>
            <th>コメント</th>
            <th>編集/削除</th>
        </tr>
        <tr>
            <td>{{$todo->title}}</td>
            <td>{{$todo->comment}}</td>
            @if($todo->user->id === $user->id)
            <td class="editAndDeleteBtn">
            <a href="{{route('todo.edit',$todo->id)}}"><button>編集</button></a>
                <form action="" method="post">
                    @csrf
                    @method("delete")
                    <input type="submit" value="削除">
                </form>
            </td>
            @else
            <td disabled>
            <a href="{{route('todo.edit',$todo->id)}}"><button disabled>編集</button></a>
                <form action="" method="post">
                    @csrf
                    @method("delete")
                    <input disabled type="submit" value="削除">
                </form>
            </td>
            @endif
        </tr>
    </table>

    <button class="backIndex">
        <a href="{{route('todo.index')}}">一覧に戻る</a>
    </button>

</div>

@endsection

@section("footer")
copyright 2022
@endsection
