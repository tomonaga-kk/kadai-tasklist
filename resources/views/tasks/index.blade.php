@extends('layouts.base')


@section('content')
<h1 class="pb-5">タスク一覧</h1>

<div class="overflow-x-auto">
  <div class="flex justify-end">
    <a href="{{route('tasks.create')}}" class="px-3 py-1 bg-lime-700 text-white rounded hover:bg-lime-600">タスクの新規作成</a>
  </div>

  <table class="my-3 table table-zebra border">
    <thead>
      <tr>
        <th>ID</th>
        <th>タスク内容</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
    </thead>
    <tbody>
      @if(isset($tasks))
        @foreach($tasks as $task)
          <tr>
            <th>{{$task->id}}</th>
            <td><a href="{{route('tasks.show', $task->id)}}" class="text-blue-500 hover:text-blue-400 hover:border-b hover:border-blue-500">{{$task->content}}</a></td>
            <td>{{date('Y年m月d日 H:i', strtotime($task->created_at))}}</td>
            <td>{{date('Y年m月d日 H:i', strtotime($task->updated_at))}}</td>
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
  
  @if(!isset($tasks))
    <p class="mt-10 text-xl">タスクがありません。</p>
  @endif
</div>

@endsection