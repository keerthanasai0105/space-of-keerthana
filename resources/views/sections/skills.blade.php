<section class="sw skills" id="skills">

    <div class="sh reveal">
        <!-- <div class="sh__num">// 02</div> -->
        <h2 class="sh__title">Skills & <em>Technologies</em></h2>
    </div>

    <div class="skill-table reveal">
        @foreach($skills as $group)
        <div class="skill-table__row">
            <div class="skill-table__cat">
                <span>{{ $group['icon'] }}</span>
                <span class="skill-table__cat-name">{{ $group['category'] }}</span>
            </div>
            <div class="skill-table__items">
                @foreach($group['items'] as $item)
                    <span class="skill-chip">{{ $item }}</span>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

</section>
