@extends("layouts.layout")

@section("title", "Todo一覧")

@section("auth")
@if(Auth::check())
  <p>User: {{$user->name}}</p>
@else
<p>ログインしていません</p>
(<a href="/login">ログイン</a>/<a href="/register">登録</a>)
@endif
@endsection

@section("menubar")
@parent
一覧ページ
@endsection

@section("content")
<div class="index">
    <div>
        <table>
            <tr>
                <th>タイトル</th>
                <th>コメント</th>
                <th>User ID</th>
            </tr>
            @foreach ($todos as $todo)
            <tr>
                <td><a href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a></td>
                <td>{{$todo->comment}}</td>
                <td>{{$todo->user->id}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <div class="createForm">
        <form class="createForm" action="/todo" method="post">
            @csrf
            <input type="hidden" name="user_id" value='{{$user->id}}'>
            <table class="create_todo_field">
                <tr>
                    <th>タイトル</th>
                    <td><input class="new_title" type="text" name="comment" value='{{old("comment")}}'></td>
                </tr>
                <tr>
                    <th>コメント</th>
                    <td><input class="new_comment" type="text" name="title" value='{{old("title")}}'></td>
                </tr>

            </table>
            <tr>
                <th></th>
                <td><input type="submit" value="Todo作成"></td>
            </tr>
        </form>
    </div>

</div>

@endsection

@section("footer")
copyright 2022
@endsection
