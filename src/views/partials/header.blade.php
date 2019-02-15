<header>
    <div class="flex items-center">
        <a href="/admin/dashboard" class="logo-admin">
            <svg width="120" height="50" viewBox="0 0 128 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M118.28 20.1638C-92.3278 96.6476 305.735 69.0504 19.4911 77.9866C-5.20218 78.7575 57.5798 46.0688 57.5798 20.1638C57.5798 -5.74127 -19.8392 0.714207 4.86489 0.714207C29.569 0.714207 164.979 3.20463 118.28 20.1638Z"
                      fill="#379BD4"/>
            </svg>
            <span class="text-2xl">Admin Panel</span>
        </a>
        <nav class="flex items-center w-3/5">
            @include("zadmin::partials.nav")
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