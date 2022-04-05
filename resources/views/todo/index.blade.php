@extends("layouts.layout")

@section("title", "Todo一覧")

@section("menubar")
@parent
一覧ページ
@endsection

@section("content")

<table>
    <tr>
        <th>タイトル</th>
        <th>コメント</th>
    </tr>
    @foreach ($todos as $todo)
    <tr>
        <td>{{$todo->title}}</td>
        <td>{{$todo->comment}}</td>
    </tr>
    @endforeach
</table>

@endsection

@section("footer")
copyright 2022
@endsection
