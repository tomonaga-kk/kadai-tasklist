@extends('layouts.base')


@section('content')
<h1 class="pb-5">タスクの新規作成</h1>

<form action="{{route('tasks.store')}}" method="POST">
  @csrf
    
  <div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        
        <div class="sm:col-span-4">
          <label for="content" class="block text-sm font-medium leading-6 text-gray-900">タスク内容</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 sm:max-w-md">
              <input type="text" name="content" id="content" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" placeholder="Lesson17を完了する">
            </div>
          </div>
        </div>
        
        <div class="sm:col-span-4">
          <label for="status" class="block text-sm font-medium leading-6 text-gray-900">タスクのステータス</label>
          <div class="mt-2">
            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 sm:max-w-md">
              <!--<input type="text" name="status" id="status" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900" placeholder="未着手">-->
              <select name="status" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900">
                <option value="未着手">未着手</option>
                <option value="対応中">対応中</option>
                <option value="完了">完了</option>
              </select>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    {{--<a href="{{route('tasks.index')}}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a> --}}
    <button type="submit" class="px-3 py-1 bg-lime-700 text-white rounded hover:bg-lime-600">保存</button>
  </div>
</form>




@endsection