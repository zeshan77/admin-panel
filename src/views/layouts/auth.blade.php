<html class="bg-white antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Name</title>
    <link href="{{ url('css/app.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body class="bg-grey-lighter">

<div class="container mx-auto flex items-center justify-center h-screen">
    <div class="content bg-white min-h-80 w-2/5 rounded-lg">
        <div class="container px-16 py-10">
            <div class="logo">
                <a href="/" class="no-underline">
                <svg width="128" height="78" viewBox="0 0 128 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M118.28 20.1638C-92.3278 96.6476 305.735 69.0504 19.4911 77.9866C-5.20218 78.7575 57.5798 46.0688 57.5798 20.1638C57.5798 -5.74127 -19.8392 0.714207 4.86489 0.714207C29.569 0.714207 164.979 3.20463 118.28 20.1638Z"
                          fill="#379BD4"/>
                </svg>
                </a>
            </div>
            <div class="form mt-4">
                @yield('content')
            </div>
        </div>
    </div>
</div>

</body>
</html>