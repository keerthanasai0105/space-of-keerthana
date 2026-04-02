<section class="sw about" id="about">
    <div class="about__layout">

        {{-- Photo --}}
        <div class="about__photo-wrap reveal">
            <div class="photo">
                <div class="photo__accent"></div>
                <div class="photo__frame">
                    @if($personal['photo'])
                        <img src="{{ asset($personal['photo']) }}" alt="{{ $personal['name_first'] }} {{ $personal['name_last'] }}"/>
                    @else
                        {{ $personal['initials'] }}
                    @endif
                </div>
                @if($personal['open_to_work'])
                    <div class="photo__tag">✦ Open to Work</div>
                @endif
            </div>
        </div>

        {{-- Text --}}
        <div class="about__text reveal">
            <div class="sh">
                <!-- <div class="sh__num">// 01</div> -->
                <h2 class="sh__title">About <em>Me</em></h2>
            </div>

            @foreach($personal['bio'] as $paragraph)
                <p>{!! $paragraph !!}</p>
            @endforeach

            {{-- Info grid --}}
            <div class="info-grid">
                @foreach($info as $item)
                <div class="info-card">
                    <span class="info-card__key">{{ $item['key'] }}</span>
                    <span class="info-card__val">{{ $item['value'] }}</span>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>
