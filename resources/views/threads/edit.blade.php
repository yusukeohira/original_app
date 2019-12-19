@extends('layouts.front')
@section('title', '状況報告')
@section('content')
    <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h1>災害発生時状況報告掲示板</h1>
      </div>
    </div>
      <div class="row">
          <div class="col-md-8 mx-auto">
              <h3>状況報告の編集</h3>
//create action どこに保存するかを決める。//
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
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                  </div>
                </div>
                <div class="form-group row">
                   <label class="col-md-2"for="body">本文
                  </label>
                  <div class="col-md-10">
                    <textarea class="form-control"name="body"rows="20">{{ old('body')}}
                    </textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-md-2" for="title">画像
                  </label>
                  <div class="col-md-10">
                    <input type="file"class="form-control-file" name="image">
                  </div>
                </div>
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
                <input type="submit" class="btn btn-primary" value="削除">
              </form>
          </div>
      </div>
    </div>
@endsection