@extends('layouts.front')
@section('title', 'トップページ')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>災害発生時状況報告掲示板</h1>
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
             <input type="button" onclick="location.href='/maintenance'" value="メンテナンス">
          </div>
        </div>
      </div>
      <div class="col-md-6 mx-auto">
        <div class="card">
          <div class="card-title mx-auto">
            <h3>お知らせ</h3>
          </div>
          <div class="card-body">
            <h6><a href="#">更新日時とタイトル（ニュース投稿されたもの）</a></h6>
            <h6><a href="#">更新日時とタイトル（ニュース投稿されたもの）</a></h6>
            <h6><a href="#">更新日時とタイトル（ニュース投稿されたもの）</a></h6>
            <h6><a href="#">更新日時とタイトル（ニュース投稿されたもの）</a></h6>
             <input type="button" onclick="location.href='/news/create'" value="新規ニュース投稿">
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection