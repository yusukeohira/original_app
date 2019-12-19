@extends('layouts.front')
@section('title', 'コメント追加')
@section('content')
    <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>災害発生時状況報告掲示板</h1>
      </div>
    </div>
      <div class="row">
          <div class="col-md-8 mx-auto">
              <h3>状況報告</h3>
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
                    <h5>本社の対応について</h5>
                  </div>
                </div>
                <div class="form-group row">
                   <label class="col-md-2"for="body">本文
                  </label>
                  <div class="col-md-10">
                    <h5>自宅は問題ありません。</h5>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2" for="title">画像
                  </label>
                  <div class="col-md-10">
                    <h5>画像を表示。</h5>
                  </div>
                </div>
                <div class ="form-group row">
                  <label class="col-md-2" for="title">コメント
                  </label>
                  <div class="col-md-10">
                    <input type="text" class="form-control" name="comment" value="{{ old('comment') }}">
                  </div>
                </div>
                <input type="submit" class="btn btn-primary" value="更新">
                <input type="button" class="btn btn-primary" onclick="location.href='/threads/edit'" value="編集">
              </form>
          </div>
      </div>
    </div>
@endsection