<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TasksController extends Controller
{
    public function index()
    {
        $user = [];
        $tasks = [];
        if(auth()->user()){
            
            // Authファサードでログインユーザ情報取得
            // $user = Auth::user();
            
            // authヘルパーでログインユーザ情報取得
            $user = auth()->user();
            
            $tasks = $user->tasks()->get();
        }
        
        return view('users.show', [
            'user'  => $user,
            'tasks' => $tasks,
        ]);
        
        // $tasks = Task::all();
        
        // // return view('tasks.index', compact('tasks'));
        // return view('tasks.index', [
        //     'tasks' => $tasks,    
        // ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'content' => 'required',         // 入力必須
            'status'  => 'required|max:10|in:"未着手","対応中","完了"', // 入力必須、10文字以内
        ]);
        
        // DBに保存
        $task = new Task;
        $task->content = $request->content;
        $task->status  = $request->status;
        $task->user_id = Auth::user()->id;
        $task->save();
        
        return redirect('/');
    }

    public function show(string $id)
    {
        
        // 「ログインユーザ =タスク所有者」の時のみ処理を許可する
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id){
            return view('tasks.show', compact('task'));
        }
        
        return redirect('/');
    }

    public function edit(string $id)
    {
        // 「ログインユーザ =タスク所有者」の時のみ処理を許可する
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id){
            $task = Task::findOrFail($id);
            return view('tasks.edit', compact('task'));
        }
        return redirect('/');
    }

    public function update(Request $request, string $id)
    {
        // 「ログインユーザ =タスク所有者」の時のみ処理を許可する
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id){
            
            // バリデーション
            $request->validate([
                'content' => 'required',         // 入力必須
                'status'  => 'required|max:10' // 入力必須、10文字以内
            ]);
            
            // DBに保存
            $task = Task::findOrFail($id);
            $task->content = $request->content;
            $task->status  = $request->status;
            $task->save();
        
            return redirect()->route('tasks.show', [$task->id]);
        }
        
        return redirect('/');
    }

    public function destroy(string $id)
    {
        // 「ログインユーザ =タスク所有者」の時のみ処理を許可する
        $task = Task::findOrFail($id);
        if(Auth::user()->id == $task->user_id){
            
            $task = Task::findOrFail($id);
            $task->delete();
            
            return redirect('/')->with('success', 'Delete Successful');
            
        }
        return redirect('/')->with('Delete Failed!');
    }
}
