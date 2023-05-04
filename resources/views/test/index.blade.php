@extends('test.layout')

{{-- メインコンテンツ --}}
@section('contets')
        <button>送信する</button>
        <form action="/test/input" method="post">
            email：<input name="email"><br>
            パスワード：<input  name="password" type="password"><br>
            <button>ログインする</button>
        </form>
@endsection
