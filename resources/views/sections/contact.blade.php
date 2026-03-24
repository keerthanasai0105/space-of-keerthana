<section class="sw contact" id="contact">

    <div class="sh__num reveal" style="text-align:center; margin-bottom:.8rem">// 05</div>

    <div class="contact__heading reveal">
        Let's <em>Connect</em>
    </div>

    <p class="contact__sub reveal">
        Open to roles, collaborations &amp; conversations
    </p>

    <div class="contact__cards reveal">
        @foreach($contact as $link)
        <a href="{{ $link['href'] }}"
           class="contact-card"
           @if(str_starts_with($link['href'], 'http')) target="_blank" @endif>
            <div class="contact-card__icon">{{ $link['icon'] }}</div>
            <div>
                <div class="contact-card__label">{{ $link['label'] }}</div>
                <div class="contact-card__value">{{ $link['value'] }}</div>
            </div>
        </a>
        @endforeach
    </div>

</section>
