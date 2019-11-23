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
      <div class="col-md-8 mx-auto">
        <div class="panel panel-default">
          <div class="panel-heading">組織一覧</div>
          <div class="panel-body">
            <li><a href="#">本社</a></li>
            <li><a href="#">千葉センター</a></li>
            <li><a href="#">埼玉センター</a></li>
            <li><a href="#">西日本営業部</a></li> 
          </div>
        </div>
      </div>
    </div>
  </div>