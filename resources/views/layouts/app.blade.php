<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ config('portfolio.personal.name_first') }} {{ config('portfolio.personal.name_last') }} — Portfolio</title>
    <meta name="description" content="{{ config('portfolio.personal.role') }} · {{ config('portfolio.personal.location') }}"/>

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;0,700;1,300;1,400&family=Syne:wght@400;500;600;700;800&family=JetBrains+Mono:wght@300;400;500&display=swap" rel="stylesheet"/>

    {{-- Portfolio CSS --}}
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}"/>

    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}"/>
</head>
<body>

    {{-- Custom Cursor --}}
    <div class="cursor" id="cursor"></div>
    <div class="cursor-ring" id="cursorRing"></div>

    {{-- Navigation --}}
    <nav class="nav">
        <div class="nav__logo">
            {{ config('portfolio.personal.initials') }}.
        </div>
        <ul class="nav__links">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="footer">
        <span class="footer__name">
            {{ config('portfolio.personal.name_first') }} {{ config('portfolio.personal.name_last') }}
        </span>
        <span class="footer__copy">
            © {{ date('Y') }} · Built with Laravel · All rights reserved
        </span>
    </footer>

    {{-- Portfolio JS --}}
    <script src="{{ asset('js/portfolio.js') }}"></script>

</body>
</html>
