<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;  // Authファサードの呼び出し
use Illuminate\Support\Facades\Http;     // コントローラからPost送信する

use App\Models\User;

class UsersController extends Controller
{
    // ↓↓　開発用コード　↓↓　//////////////////////////////////////
    public function index(){
        $users = User::all();
        
        return view('users.index', [
            'users' => $users
        ]);
    }
    
    // ↑↑　開発用コード　↑↑　//////////////////////////////////////
    
    
    
    // public function show(){
        
    //     $tasks = [];
    //     if(auth()->user()){
            
    //         // Authファサードでログインユーザ情報取得
    //         // $user = Auth::user();
            
    //         // authヘルパーでログインユーザ情報取得
    //         $user = auth()->user();
            
    //         $tasks = $user->tasks()->get();
    //     }
        
    //     return view('users.show', [
    //         'user'  => $user,
    //         'tasks' => $tasks,
    //     ]);
    // }
}


