@extends('blog/layout')
@section('content')
<div class="container ops-main">
    <div class="row">
        <div class="col-md-6">
            <h2>ブログ登録</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form action="/blog/{{ $blog->id }}" method="post">
                <!-- updateメソッドにはPUTメソッドがルーティングされているのでPUTにする -->
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">タイトル</label>
                    <input type="string" class="form-control" name="title" value="{{ $blog->title }}">
                </div>
                <div class="form-group">
                    <label for="price">内容</label>
                    <input type="text" class="form-control" name="content" value="{{ $blog->content }}">
                </div>

                <button type="submit" class="btn btn-default">登録</button>
                <a href="/blog">戻る</a>
            </form>
        </div>
    </div>
</div>
@endsection