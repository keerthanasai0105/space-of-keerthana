<section class="hero" id="home">

    <div class="hero__grid"></div>
    <div class="orb orb--1"></div>
    <div class="orb orb--2"></div>

    <div class="hero__content">

        <div class="hero__eyebrow">
            <div class="hero__dot"></div>
            {{ $personal['status'] }} · {{ $personal['location'] }}
        </div>

        <h1 class="hero__name">
            <em>{{ $personal['name_first'] }}</em>
        </h1>
        <span class="hero__name-last">{{ $personal['name_last'] }}</span>

        <div class="hero__tagline">
            <div class="hero__tagline-line"></div>
            <p>{{ $personal['role'] }}</p>
        </div>

        <p class="hero__desc">
            Building intelligent systems and backend solutions.
            Experienced in Python ML pipelines, Laravel development,
            and data analytics — currently growing at Sails Software Solutions.
        </p>

        <div class="hero__actions">
            <a href="#projects" class="btn-glow">View Projects</a>
            <a href="#contact"  class="btn-ghost">Let's Talk →</a>
        </div>

    </div>

    {{-- Floating stats --}}
    <div class="hero__stats">
        @foreach($stats as $stat)
        <div class="hero__stat">
            <div class="hero__stat-num">{{ $stat['number'] }}</div>
            <div class="hero__stat-label">{{ $stat['label'] }}</div>
        </div>
        @endforeach
    </div>

    <div class="hero__scroll">
        <div class="hero__scroll-line"></div>
        <span class="hero__scroll-text">Scroll</span>
    </div>

</section>
