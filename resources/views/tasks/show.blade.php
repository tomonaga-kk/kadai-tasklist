@extends('layouts.base')


@section('content')
<h1 class="pb-5">タスク詳細</h1>

<table class="my-3 table border">
  <tr>
    <th>ID</th>
    <th>{{$task->id}}</th>
  </tr>
  <tr>
    <th>タスク内容</th>
    <td>{{$task->content}}</td>
  </tr>
  <tr>
    <th>作成日時</th>
    <td>{{date('Y年m月d日 H:i', strtotime($task->created_at))}}</td>
  </tr>
  <tr>
    <th>更新日時</th>
    <td>{{date('Y年m月d日 H:i', strtotime($task->updated_at))}}</td>
  </tr>
</table>

<div class="flex justify-evenly">
    <a href="{{route('tasks.edit', $task->id)}}" class="px-3 py-1 w-1/4 bg-lime-700 text-white rounded hover:bg-lime-600 text-center">編集</a>
    <form action="{{route('tasks.destroy', $task->id)}}" method="POST" class="w-1/4">
        @csrf
        @method('DELETE')
        
        <button class="px-3 py-1 size-full bg-red-500 text-white rounded hover:bg-red-400 text-center" type='submit' onclick="return confirm('削除してもよろしいですか？')">削除</button>
    </form>
</div>


@endsection