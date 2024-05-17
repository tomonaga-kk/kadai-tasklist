<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>Tasklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com/3.4.1"></script>
    </head>
    <body>
        {{-- ヘッダー --}}
        @include('layouts.header')
        
        <div class="py-5 container mx-auto">
            {{-- エラーメッセージの表示 --}}
            @include('commons.error_messages')
            
            {{-- メインコンテンツ --}}
            @yield('content')
        </div>
    </body>
</html>