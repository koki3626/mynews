@extends('layouts.admin')
@section('title', 'MYプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Myプロフィール</h2>
        </div>
        <div class="row">
            <div class="admin-profile col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="20%">氏名</th>
                                <th width="10%">性別</th>
                                <th width="20%">趣味</th>
                                <th width="20%">メッセージ</th>
                                <th width="30%">自己紹介欄</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <td>{{ str_limit($profile->name, 50) }}</td>
                                    <td>{{ str_limit($profile->gender, 5) }}</td>
                                    <td>{{ str_limit($profile->hobby, 100) }}</td>
                                    <td>{{ str_limit($profile->introduction, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ProfileController@edit', ['id' => $profile->id]) }}">編集</a>
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
