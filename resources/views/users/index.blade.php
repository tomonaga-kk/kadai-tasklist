@extends('layouts.base')


@section('content')
<h1 class="pb-5">ユーザ一覧</h1>

<div class="overflow-x-auto">
  <div class="flex justify-end">
    <a href="{{route('tasks.create')}}" class="px-3 py-1 bg-lime-700 text-white rounded hover:bg-lime-600">タスクの新規作成</a>
  </div>
  
  <p>各ユーザのパスワードは共通：testuser</p>

  <table class="my-3 table table-zebra border">
    <thead>
      <tr>
        <th>ID</th>
        <th>名前</th>
        <th>Email</th>
        <th>パスワード</th>
        <th>タスク数</th>
        <th>タスクIDs</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($users))
        @foreach($users as $user)
          <tr>
            <th>{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>testuser</td>
            <td>{{count($user->tasks()->get())}}</td>
            <td>
              @foreach($user->tasks()->get() as $task)
                {{$task->id . ','}}
              @endforeach
            </td>
            <td>{{date('Y年m月d日 H:i', strtotime($user->created_at))}}</td>
            <td>{{date('Y年m月d日 H:i', strtotime($user->updated_at))}}</td>
          </tr>
        @endforeach
      @endif
  
      <!--<tr>-->
      <!--    <th>1</th>-->
      <!--    <td>はじめての投稿</td>-->
      <!--    <td>2024年12月1日</td>-->
      <!--    <td>2024年12月15日</td>-->
      <!--</tr>-->
      
    </tbody>
  </table>
  
  @if(!isset($users))
    <p class="mt-10 text-xl">タスクがありません。</p>
  @endif
</div>

@endsection