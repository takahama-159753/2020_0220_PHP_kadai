@extends('layouts.admin')
@section('title', '自己紹介画面')

@section('content')
<div class="container">
<div class="row">
<h2>自己紹介画面</h2>
</div>

<div class="row">
<div class="col-md-4">
<a href="{{ action('Admin\profileController@add') }}" role="button" class="btn btn-primary">新規作成</a>
</div>

<div class="col-md-8">
<form action="{{ action('Admin\profileController@index') }}" method="get">
<div class="form-group row">
<label class="col-md-2">タイトル</label>
<div class="col-md-8">
<input type="text" class="form-control" name="cond_title" value={{ $cond_title }}>
</div>

<div class="col-md-2">
{{ csrf_field() }}
<input type="submit" class="btn btn-primary" value="検索">
</div>
</div>
</form>
</div>
</div>

<div class="row">
<div class="admin-profile col-md-12 mx-auto">
<div class="row">
<table class="table table-dark">
<thead>
<tr>
<th width="10%">name</th>
<th width="20%">gender</th>
<th width="50%">hobby</th>
<th width="10%">introduction</th>
</tr>
</thead>

<tbody>
@foreach($posts as $profile)
<tr>
<th>{{ $profile->id }}</th>
<td>{{ str_limit($profile->title, 100) }}</td>
<td>{{ str_limit($profile->body, 250) }}</td>
<td>
<div>
<a href="{{ action('Admin\profileController@edit', ['id' => $profile->id]) }}">編集</a>
</div>
<div>
<a href="{{ action('Admin\profileController@delete', ['id' => $news->id]) }}">削除</a>
</div>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
@endsection