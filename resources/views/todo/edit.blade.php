@extends("layouts.layout")

@section("title", "Todo編集")

@section("menubar")
@parent
編集ページ
@endsection

@section("content")
<div class="edit">
    @if(count($errors)> 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('todo.update', $todo->id)}}" method="post">
        @csrf
        @method("patch")
        <input class="edit_text" type="text" name="title" value="{{$todo->title}}">
        <input class="edit_comment" type="text" name="comment" value="{{$todo->comment}}">
        <input type="submit" value="更新">
    </form>
</div>


@endsection

@section("footer")
copyright 2022
@endsection
