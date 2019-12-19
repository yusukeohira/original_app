@extends('layouts.front')
@section('title', 'お知らせ')
@section('content')
    <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>災害発生時状況報告掲示板</h1>
      </div>
    </div>
      <div class="row">
          <div class="col-md-8 mx-auto">
              <h3>重要なお知らせ</h3>
                @if(count($errors)>0)
                <ul>
                  @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
                  @endforeach
                </ul>
                @endif
                <div class="form-group row">
                  <label class="col-md-2" for="title">タイトル
                  </label>
                  <div class="col-md-10">
                    <h5>更新しました</h5>
                  </div>
                </div>
                <div class="form-group row">
                   <label class="col-md-2"for="body">本文
                  </label>
                  <div class="col-md-10">
                    <h5>人事異動につき更新しました。/h5>
                  </div>
                </div>

                <input type="submit" class="btn btn-primary" value="更新">
                <input type="button" class="btn btn-primary" onclick="location.href='/news/edit'" value="編集">
              </form>
          </div>
      </div>
    </div>
@endsection