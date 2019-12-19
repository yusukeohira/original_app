@extends('layouts.front')
@section('title', 'メンテナンス')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>所属社員メンテナンス</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-title mx-auto">
            <h3>組織一覧</h3>
          </div>
          <div class="card-body">
            <li><a href="#">本社</a></li>
            <li><a href="#">千葉センター</a></li>
            <li><a href="#">埼玉センター</a></li>
            <li><a href="#">西日本営業部</a></li> 
             <input type="button" onclick="location.href='/maintenance/register'" value="新規社員登録">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection