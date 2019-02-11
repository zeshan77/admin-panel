<html class="bg-white antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name</title>
    <link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body class="bg-grey-lighter">
<div class="bg-white">
    <div class="container">
        <header class="">
            <div class="flex items-center">
                <a href="/admin/dashboard" class="logo-admin">
                    <svg width="120" height="50" viewBox="0 0 128 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M118.28 20.1638C-92.3278 96.6476 305.735 69.0504 19.4911 77.9866C-5.20218 78.7575 57.5798 46.0688 57.5798 20.1638C57.5798 -5.74127 -19.8392 0.714207 4.86489 0.714207C29.569 0.714207 164.979 3.20463 118.28 20.1638Z"
                              fill="#379BD4"/>
                    </svg>
                    <span class="text-2xl">Admin Panel</span>
                </a>
                <nav class="flex items-center w-3/5">
                    <ul class="list-reset flex">
                        <li class="nav-item active">
                            <a href="/" class="link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="link" href="/">Menu 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="link" href="/">Menu 2</a>
                        </li>
                    </ul>
                </nav>
                <div class="w-1/5 text-right">
                    <div class="flex items-center justify-end">
                        <div>
                            <a href="/" class="no-underline text-black">Zeshan Khattak &#9660;</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>


<div class="container w-2/3 flex justify-center py-6 flex-col">
    <div class="header pb-6 text-2xl">
        Dashboard
    </div>
    <div class="container bg-white h-80 w-full">
        @yield('content')
    </div>
</div>
</body>
</html>