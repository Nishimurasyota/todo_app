@extends("layouts.layout")

@section("title", "Todo一覧")

@section("menubar")
@parent
詳細ページ
@endsection

@section("content")

<table>
    <tr>
        <th>タイトル</th>
        <th>コメント</th>
    </tr>
    <tr>
        <td>{{$todo->title}}</td>
        <td>{{$todo->comment}}</td>
    </tr>
</table>

<div>
    <a href="{{route('todo.index')}}">一覧に戻る</a>
</div>

@endsection

@section("footer")
copyright 2022
@endsection