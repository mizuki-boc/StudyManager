<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Manager</title>
    @yield('styles')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/destyle.css') }}">
    <meta name=”viewport” content=”width=device-width, initial-scale=1”>
</head>
<body>
    <header>
        <div>Study Manager</div>
        <div>USERNAME ,ようこそ!</div>
        <!-- <a href="#" id="logout">ログアウト</a> -->
        <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">ログアウト</button>
        </form> -->
        @if(Auth::check())
            <span class="my-navbar-item">ようこそ, {{ Auth::user()->name }}さん</span>
            ｜
            <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            </form>
        @else
            <a href="{{ route('login') }}">ログイン</a>
            ｜
            <a href="{{ route('register') }}">会員登録</a>
        @endif
    </header>
    <main>
        <div class="wrapper">
            <!-- サイドバー -->
            <div class="sidebar-container">
                <ul>
                    <li class="top">Menu</li>
                    <li>Timer</li>
                    <li>Edit</li>
                    <li>History</li>
                </ul>
            </div>
            @yield('content')
        </div>
    </main>
    @if(Auth::check())
    <script>
        document.getElementById('logout').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
        });
    </script>
    @endif
    @yield('scripts')
</body>
</html>