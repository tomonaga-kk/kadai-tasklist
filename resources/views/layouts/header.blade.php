<header class="px-3 bg-lime-700 text-white">
    <nav class="flex justify-between align-middle">
        <div class="text-lg flex items-center">
            <a href="/" class="">Tasklist</a>
        </div>
        <div>
            <ul class="hidden lg:block">
                <li><a href="{{route('tasks.create')}}">タスクの新規作成</a></li>
            </ul>
            <div class="dropdown dropdown-end lg:hidden">
                <div tabindex="0" role="button" class="btn m-1 bg-inherit text-white border-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 text-black">
                    <li><a href="{{route('tasks.create')}}">タスクの新規作成</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>








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


