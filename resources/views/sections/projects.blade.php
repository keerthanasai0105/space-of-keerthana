<section class="sw projects" id="projects">

    <div class="sh reveal">
        <!-- <div class="sh__num">// 04</div> -->
        <h2 class="sh__title">Selected <em>Projects</em></h2>
    </div>

    <div class="projects-grid reveal">
        @foreach($projects as $index => $project)
        <div class="project-card">

            <div class="project-card__num">
                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }} / {{ str_pad(count($projects), 2, '0', STR_PAD_LEFT) }}
            </div>

            <div class="project-card__name">{{ $project['name'] }}</div>
            <p class="project-card__desc">{{ $project['desc'] }}</p>

            @if(isset($project['link']))
                <a href="{{ $project['link'] }}" target="_blank" class="project-card__link">
                    View Project ↗
                </a>
            @endif

            <div class="project-card__stack">
                @foreach($project['stack'] as $tech)
                    <span class="stack-tag">{{ $tech }}</span>
                @endforeach
            </div>

        </div>
        @endforeach
    </div>

</section>
