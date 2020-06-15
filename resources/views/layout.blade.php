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
        <div>ログアウト</div>
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
    @yield('scripts')
</body>
</html>