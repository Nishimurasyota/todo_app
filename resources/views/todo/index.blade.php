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
    @if(count($errors)> 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="flexBox">
        <div>
            <table>
                <tr>
                    <th><a href="/todo?sort=title">タイトル</a></th>
                    <th><a href="/todo?sort=comment">コメント</a></th>
                    <th>ユーザー名</th>
                </tr>
                @foreach ($todos as $todo)
                <tr>
                    <td><a href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a></td>
                    <td>{{$todo->comment}}</td>
                    <td>{{$todo->user->name}}</td>
                </tr>
                @endforeach
            </table>
            {{$todos->appends(["sort" => $sort])->links()}}
        </div>

        <div class="createForm">
            <form class="createForm" action="/todo" method="post">
                @csrf
                <input type="hidden" name="user_id" value='{{$user->id}}'>
                <table class="create_todo_field">
                    <tr>
                        <th>タイトル</th>
                        <td><input class="new_title" type="text" name="title" value='{{old("comment")}}'></td>
                    </tr>
                    <tr>
                        <th>コメント</th>
                        <td><input class="new_comment" type="text" name="comment" value='{{old("title")}}'></td>
                    </tr>

                </table>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Todo作成"></td>
                </tr>
            </form>
        </div>
    </div>
</div>

@endsection

@section("footer")
copyright 2022
@endsection
