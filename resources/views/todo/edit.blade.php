@extends("layouts.layout")

@section("title", "Todo編集")

@section("menubar")
@parent
編集ページ
@endsection

@section("content")

    <form action="/todo/edit" method="post">
        @csrf
        <input type="text" name="title" value="{{$todo->title}}">
        <input type="text" name="comment" value="{{$todo->comment}}">
        <input type="submit" value="更新">
    </form>

@endsection

@section("footer")
copyright 2022
@endsection
