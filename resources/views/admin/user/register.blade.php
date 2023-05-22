@extends('admin.layout')

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザ登録</h1>
        @if ($errors->any())
            <div>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
            </div>
        @endif
        <form action="/admin/login" method="post">
            @csrf
            名前：<input name="login_id" value="{{ old('login_id') }}"><br>
            email：<input  name="password" type="password"><br>
            パスワード：<input  name="password" type="password"><br>

            <button class="btn btn-primary mb-3">登録する</button>
        </form>
@endsection