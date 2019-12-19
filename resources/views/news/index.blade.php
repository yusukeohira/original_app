@extends('layouts.front')
@section('title', 'ニュース一覧')
@section('content')
    <div class="container">
        <div class="row">
            <h2>”ニュース一覧"</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('ThreadsController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">更新日時</th>
                                <th width="10%">投稿者</th>
                                <th width="20%">タイトル</th>
                                <th width="50%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <th></th>
                                <td></td>
                                <td></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection