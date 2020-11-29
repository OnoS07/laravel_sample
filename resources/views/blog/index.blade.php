@extends('blog/layout')
@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">ブログ一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">タイトル</th>
        <th class="text-center">内容</th>
        <th class="text-center">削除</th>
      </tr>
      @foreach($blogs as $blog)
      <tr>
        <td>
          <a href="/blog/{{ $blog->id }}/edit">{{ $blog->id }}</a>
        </td>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->content }}</td>
        <td>
          <form action="/blog/{{ $blog->id }}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
    <div><a href="/blog/create" class="btn btn-default">新規作成</a></div>
  </div>
</div>
@endsection