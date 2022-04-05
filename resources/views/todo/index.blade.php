@extends("layouts.layout")

@section("title", "Todo一覧")

@section("menubar")
@parent
一覧ページ
@endsection

@section("content")
<div class="index">
    <table>
        <tr>
            <th>タイトル</th>
            <th>コメント</th>
        </tr>
        @foreach ($todos as $todo)
        <tr>
            <td><a href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a></td>
            <td>{{$todo->comment}}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection

@section("footer")
copyright 2022
@endsection
