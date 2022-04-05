@extends("layouts.layout")

@section("title", "Todo一覧")

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
            </tr>
            @foreach ($todos as $todo)
            <tr>
                <td><a href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a></td>
                <td>{{$todo->comment}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    <div>
        <form class="createForm" action="/todo" method="post">
            @csrf
            <table>
                <tr>
                    <th>タイトル</th>
                    <td><input type="text" name="comment" value='{{old("comment")}}'></td>
                </tr>
                <tr>
                    <th>コメント</th>
                    <td><input type="text" name="title" value='{{old("title")}}'></td>
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
