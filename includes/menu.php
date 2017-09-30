<header class="header">

    <div id="header__opener" class="header__opener">

        <div id="line-1" class="header__opener_line_1"></div>
        <div id="line-2" class="header__opener_line_2"></div>
        <div id="line-3" class="header__opener_line_3"></div>

    </div>

    <nav id="header__nav" class="header__nav">

        <div class="logo">
            <a lang="ru" href="/"><img src="/img/matlas-logo-white.png"></a>
            <a lang="en" href="/"><img src="/img/matlas-logo-white-en.png"></a>
        </div>

        <div class="language">
            <form action="/includes/switch_languages.php" method="post" id="switch-lang-form">
                <input type="hidden" name="lang" value="<?=!ru()?'ru':'en'?>">
                <a href="#" id="switch-lang">
                    <?=$settolang;?>
                </a>
            </form>
        </div>

        <ul>

            <li class="hotel-five-stars">
                <a lang="ru" href="/objects/hotel-five-stars/">Гостиничный комплекс 5<span class="asterisk">*</span></a>
                <a lang="en" href="/objects/hotel-five-stars/">Hotel complex 5<span class="asterisk">*</span></a>
            </li>

            <li class="hotel-four-stars">
                <a lang="ru" href="/objects/hotel-four-stars/">Гостиничный комплекс 4<span class="asterisk">*</span></a>
                <a lang="en" href="/objects/hotel-four-stars/">Hotel complex 4<span class="asterisk">*</span></a>
            </li>

            <li class="villas-and-cottages">
                <a lang="ru" href="/objects/villas-and-cottages/">Виллы и коттеджи</a>
                <a lang="en" href="/objects/villas-and-cottages/">Villas and cottages</a>
            </li>

            <li class="balneology">
                <a lang="ru" href="/objects/balneology/">Бальнеология</a>
                <a lang="en" href="/objects/balneology/">Balneology</a>
            </li>

            <li class="spa-and-detox">
                <a lang="ru" href="/objects/spa-and-detox/">СПА и Детокс</a>
                <a lang="en" href="/objects/spa-and-detox/">SPA and Detox</a>
            </li>

            <li class="sport">
                <a lang="ru" href="/objects/sport/">Активные виды отдыха</a>
                <a lang="en" href="/objects/sport/">Recreational activities</a>
            </li>

            <li class="golf">
                <a lang="ru" href="/objects/golf/">Гольф</a>
                <a lang="en" href="/objects/golf/">Golf</a>
            </li>

            <li class="horse-club">
                <a lang="ru" href="/objects/horse-club/">Конно-спортивный клуб</a>
                <a lang="en" href="/objects/horse-club/">Equestrian club</a>
            </li>

            <li class="ski">
                <a lang="ru" href="/objects/ski/">Горнолыжный комплекс</a>
                <a lang="en" href="/objects/ski/">Ski resort</a>
            </li>

            <li class="commercial">
                <a lang="ru" href="/objects/commercial/">Коммерческие площади</a>
                <a lang="en" href="/objects/commercial/">Commercial spaces</a>
            </li>

            <li class="farm">
                <a lang="ru" href="/objects/farm/">Ферма</a>
                <a lang="en" href="/objects/farm/">Farm</a>
            </li>

            <li class="stronghold">
                <a lang="ru" href="/objects/stronghold/">Хунзахская крепость</a>
                <a lang="en" href="/objects/stronghold/">Khunzakh fortress</a>
            </li>

            <li class="airport">
                <a lang="ru" href="/objects/airport/">Аэропорт</a>
                <a lang="en" href="/objects/airport/">Airport</a>
            </li>

        </ul>

    </nav>

</header>