<header class="px-3 bg-lime-700 text-white">
    <nav class="flex justify-between align-middle">
        <div class="text-lg flex items-center">
            <a href="/" class="">Tasklist</a>
            
            {{-- ↓↓　開発用コード ↓↓　/////////////////////////////////////　↓↓ --}}
            <!--<ul class="flex ms-5">-->
            <!--    <li class="me-3"><a href="/users">ユーザ一覧</a></li>-->
            <!--    <li><a href="/tasks">タスク一覧</a></li>-->
            <!--</ul>-->
            {{-- ↑↑　開発用コード ↑↑　/////////////////////////////////////　↓↓ --}}
        </div>
        <div>
            <ul class="hidden lg:block lg:p-4">
                @include('layouts.header_menu')
            </ul>
            <div class="dropdown dropdown-end lg:hidden">
                <div tabindex="0" role="button" class="btn m-1 bg-inherit text-white border-none">
                    @auth
                        {{ Auth::user()->name }}
                    @endauth
                    @guest
                        Guest
                    @endguest
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        
                    <!--ハンバーガーメニュー　アイコン-->
                    <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">-->
                    <!--  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />-->
                    <!--</svg>-->
                </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 text-black">
                    @include('layouts.header_menu')
                </ul>
            </div>
        </div>
    </nav>
</header>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>{{ $message }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Please check the form below for errors</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif







<!--<header class="mb-4">-->
<!--    <nav class="navbar bg-neutral text-neutral-content">-->
<!--        {{--トップページへのリンク --}}-->
<!--        <div class="flex-1">-->
<!--            <h1><a class="btn btn-ghost normal-case text-xl" href="/">Tasklist</a></h1>-->
<!--        </div>-->
        
<!--        <div class="flex-none">-->
<!--            <ul tabindex="0" class="menu hidden lg:block lg:menu-horizontal">-->
<!--                {{-- メッセージ作成ページへのリンク --}}-->
<!--                <li><a class="link link-hover" href="{{route('tasks.create')}}">新規メッセージ投稿</a></li>-->
<!--            </ul>-->
            
<!--            <div class="dropdown dropdown-end">-->
<!--                <button type="button" tabindex="0" class="btn btn-square btn-ghost lg:hidden">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">-->
<!--                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />-->
<!--                    </svg>-->
<!--                </button>-->
<!--                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 text-info">-->
<!--                    {{-- メッセージ作成ページへのリンク --}}-->
<!--                    <li><a class="link link-hover" href="{{ route('tasks.create') }}">新規メッセージの投稿</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->
<!--</header>-->


