<section class="sw experience" id="experience">

    <div class="sh reveal">
        <!-- <div class="sh__num">// 03</div> -->
        <h2 class="sh__title">Work <em>Experience</em></h2>
    </div>

    <div class="exp-table reveal">
        @foreach($experience as $job)
        <div class="exp-card">
            <div class="exp-card__meta">
                <span class="exp-card__period">{{ $job['period'] }}</span>
                <span class="exp-card__company">{{ $job['company'] }}</span>
                <span class="exp-card__role">{{ $job['role'] }}</span>
            </div>
            <div class="exp-card__body">
                <ul class="exp-card__points">
                    @foreach($job['points'] as $point)
                        <li>{{ $point }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endforeach
    </div>

</section>
