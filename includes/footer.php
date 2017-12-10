<script id="simListTplID" type="x-tmpl-mustache">
    <section style="margin-top:5rem;">
        <h3>Также будет интересно</h3>
        {{#simList}}
        <div id="practice_{{id}}" class="f-town">
            <p><a href="{{link}}" class="">{{town}}</a></p>
        </div>
        {{/simList}}
    </section>
</script>

<script>
	$(document).ready(
		function () {
			var town = getObjects(data, 'id', "<?=$id?>")[0] // Returns an array of matching objects
			var similiarListArray = []
			if (town.hasOwnProperty('similiar')) {
				for (i = 0; i < town.similiar.length; i++) {
					var similiarTown = getObjects(data, 'id', town.similiar[i])[0]
					if (similiarTown !== undefined) {
						similiarListArray.push(
							{
								title: similiarTown.hasOwnProperty('title') ? similiarTown.title : '',
								town: similiarTown.hasOwnProperty('town') ? similiarTown.town : '',
								link: '/practices/' + similiarTown.id,
								id: similiarTown.id
							}
						)
					}
				}
			}
			var simListTpl = $('#simListTplID').html()
			Mustache.parse(simListTpl)   // optional, speeds up future uses
			var output = Mustache.render(simListTpl, {simList: similiarListArray})
			if (document.getElementById('similiar')) {
				document.getElementById('similiar').innerHTML = output
			}
		}
	)
</script>

<script>
    $(function() {
        $('.f-town-<?=$id;?>').addClass('active');
        <?php if ($id == 'index'): ?>
        //$('#f-menu-primary').removeClass('hidden');
        //$('#f-menu-secondary').addClass('hidden');
        $('#f-partners-primary').removeClass('hidden');
        $('#f-partners-secondary').addClass('hidden');
        $('#f-contactinfo-secondary').addClass('hidden');
        <?php endif; ?>

        $('.<?=$title;?>').addClass('active');
    });

</script>

<footer class="footer" style="margin-top:5rem;">

    <section id="similiar" style="margin-top:5rem;">

    </section>

    <section class="f-social" style="margin-top:5rem;">

        <h3>Поделиться в социальных сетях</h3>

        <div class="f social-element">
            <p><a href="#">вконтакте</a></p>
        </div>
        <div class="f social-element">
            <p><a href="#">фейсбук</a></p>
        </div>
        <div class="f social-element">
            <p><a href="#">твиттер</a></p>
        </div>
    </section>


    <h2><a href="/">Назад на главную</a></h2>

</footer>






<!-- <footer class="footer">    

    <div class="footer__menu">

        <div id="f-menu-primary" class="footer__menu_primary hidden">

            <ul class="row">

                <li>
                    <a lang="ru" href="/objects/hotel-five-stars/">Гостиничный<br>комплекс<br><span class="asterisk">*****</span></a>
                    <a lang="en" href="/objects/hotel-five-stars/">Hotel<br>complex<br><span class="asterisk">*****</span></a>
                </li>
                <li>
                    <a lang="ru" href="/objects/hotel-four-stars/">Гостиничный<br>комплекс<br><span class="asterisk">****</span></a><a lang="en" href="/objects/hotel-four-stars/">Hotel<br>complex<br><span class="asterisk">****</span></a>
                </li>

            </ul>

            <ul class="row">

                <li>
                    <a lang="ru" href="/objects/villas-and-cottages/">Виллы<br>и коттеджи</a>
                    <a lang="en" href="/objects/villas-and-cottages/">Villas<br>and cottages</a>
                </li>
                <li>
                    <a lang="ru" href="/objects/balneology/">Бальнеологический<br>комплекс</a>
                    <a lang="en" href="/objects/balneology/">Balneological<br>complex</a>
                </li>
                <li>
                    <a lang="ru" href="/objects/spa-and-detox/">СПА<br>и Детокс</a>
                    <a lang="en" href="/objects/spa-and-detox/">SPA<br>and Detox</a>
                </li>

            </ul>

            <ul class="row">

                <li>
                    <a lang="ru" href="/objects/sport/">Спорт</a>
                    <a lang="en" href="/objects/sport/">Sport</a>
                </li>
                <li>
                    <a lang="ru" href="/objects/golf/">Гольф</a>
                    <a lang="en" href="/objects/golf/">Golf</a>
                </li>

            </ul>

            <ul class="row">

                <li>
                    <a lang="ru" href="/objects/horse-club/"><span class="after-hyphen">Конно</span><br>спортивный<br>клуб</a>
                    <a lang="en" href="/objects/horse-club/">Equestrian<br>club</a>
                </li>
                <li>
                    <a lang="ru" href="/objects/ski/">Горнолыжный<br>комплекс</a>
                    <a lang="en" href="/objects/ski/">Ski resort<br>complex</a>
                </li>
                <li>
                    <a lang="ru" href="/objects/commercial/">Коммерция</a>
                    <a lang="en" href="/objects/commercial/">Commercial</a>
                </li>

            </ul>

            <ul class="row">

                <li>
                    <a lang="ru" href="/objects/farm/">Ферма</a>
                    <a lang="en" href="/objects/farm/">Farm</a>
                </li>
                <li>
                    <a lang="ru" href="/objects/stronghold/">Хунзахская<br>крепость</a>
                    <a lang="en" href="/objects/stronghold/">Khunzakh<br>fortress</a>
                </li>
                <li>
                    <a lang="ru" href="/objects/airport/">Аэропорт</a>
                    <a lang="en" href="/objects/airport/">Airport</a>
                </li>

            </ul>

        </div>




        <div id="f-menu-secondary" class="footer__menu_secondary">

            <div class="logo-row">
                <a lang="ru" href="/"><img src="/img/matlas-logo-dark.png"></a>
                <a lang="en" href="/"><img src="/img/matlas-logo-dark-en.png"></a>
            </div>

            <ul class="first-row">

                <li class="startup-school">
                    <a lang="ru" href="/objects/hotel-five-stars/">Гостиничный<br>комплекс 5<span class="asterisk">*</span></a>
                    <a lang="en" href="/objects/hotel-five-stars/">Hotel<br>complex 5<span class="asterisk">*</span></a>
                </li>
                <li class="hotel-four-stars">
                    <a lang="ru" href="/objects/hotel-four-stars/">Гостиничный<br>комплекс 4<span class="asterisk">*</span></a>
                    <a lang="en" href="/objects/hotel-four-stars/">Hotel<br>complex 4<span class="asterisk">*</span></a>
                </li>
                <li class="villas-and-cottages">
                    <a lang="ru" href="/objects/villas-and-cottages/">Виллы и коттеджи</a>
                    <a lang="en" href="/objects/villas-and-cottages/">Villas and cottages</a>
                </li>
                <li class="balneology">
                    <a lang="ru" href="/objects/balneology/">Бальнеология</a>
                    <a lang="en" href="/objects/balneology/">Balneological<br>center</a>
                </li>
                <li class="spa-and-detox">
                    <a lang="ru" href="/objects/spa-and-detox/">СПА и Детокс</a>
                    <a lang="en" href="/objects/spa-and-detox/">SPA and Detox</a>
                </li>

            </ul>

            <ul class="second-row">

                <li class="sport">
                    <a lang="ru" href="/objects/sport/">Активные<br>виды<br>отдыха</a>
                    <a lang="en" href="/objects/sport/">Recreational<br>activities</a>
                </li>
                <li class="golf">
                    <a lang="ru" href="/objects/golf/">Гольф</a>
                    <a lang="en" href="/objects/golf/">Golf</a>
                </li>
                <li class="horse-club">
                    <a lang="ru" href="/objects/horse-club/"><span class="after-hyphen">Конно</span><br>спортивный<br>клуб</a>
                    <a lang="en" href="/objects/horse-club/">Equestrian<br>club</a>
                </li>
                <li class="ski">
                    <a lang="ru" href="/objects/ski/">Горнолыжный<br>комплекс</a>
                    <a lang="en" href="/objects/ski/">Ski<br>resort</a>
                </li>
                <li class="commercial">
                    <a lang="ru" href="/objects/commercial/">Коммерческие<br>площади</a>
                    <a lang="en" href="/objects/commercial/">Commercial<br>spaces</a>
                </li>
                <li class="farm">
                    <a lang="ru" href="/objects/farm/">Ферма</a>
                    <a lang="en" href="/objects/farm/">Farm</a>
                </li>
                <li class="stronghold">
                    <a lang="ru" href="/objects/stronghold/">Хунзахская<br>крепость</a>
                    <a lang="en" href="/objects/stronghold/">Khunzakh<br>fortress</a>
                </li>
                <li class="airport">
                    <a lang="ru" href="/objects/airport/">Аэропорт</a>
                    <a lang="en" href="/objects/airport/">Airport</a>
                </li>

            </ul>

        </div>

    </div>

    <div id="map" class="footer__map">

        <div class="container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.873040777713!2d47.4838979509875!3d42.980947979047734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404ea04f57b06f11%3A0xdfe56dba132d64ca!2z0YPQuy4g0KLQsNC90LrQsNC10LLQsCwgNTQsINCc0LDRhdCw0YfQutCw0LvQsCwg0KDQtdGB0L8uINCU0LDQs9C10YHRgtCw0L0sIDM2NzAwOA!5e0!3m2!1sru!2sru!4v1475001161913" width="900" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="close">
            <a href="#closemap" class="no-border">×</a>
        </div>

    </div>

    <div class="footer__partners">

        <div id="f-partners-primary" class="footer__partners_primary hidden">

            <div class="first-column">
                <div class="partner">
                    <div class="logo">
                        <a href="https://www.summagroup.ru/" target="_blank"><img src="/img/partners/partner-1.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="https://www.summagroup.ru/" target="_blank">Генеральный инвестор</a></span>
                        <span lang="en"><a href="https://www.summagroup.ru/" target="_blank">General investor</a></span>
                    </div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.cushmanwakefield.ru/" target="_blank"><img src="/img/partners/partner-2.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="http://www.cushmanwakefield.ru/" target="_blank">Стратегический консалтинг</a></span>
                        <span lang="en"><a href="http://www.cushmanwakefield.ru/" target="_blank">Strategic consulting</a></span>
                    </div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.exclusivadesign.com/" target="_blank"><img src="/img/partners/partner-3.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="http://www.exclusivadesign.com/" target="_blank">Архитектурное бюро</a></span>
                        <span lang="en"><a href="http://www.exclusivadesign.com/" target="_blank">Architectural bureau</a></span>
                    </div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.cniipz.ru/" target="_blank"><img src="/img/partners/partner-4.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="http://www.cniipz.ru/" target="_blank">Проектное бюро</a></span>
                        <span lang="en"><a href="http://www.cniipz.ru/" target="_blank">Project bureau</a></span>
                    </div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="#" target="_blank">
                            <img lang="ru" src="/img/partners/partner-5-ru.png">
                            <img lang="en" src="/img/partners/partner-5-en.png">
                        </a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="/">Девелопер проекта</a></span>
                        <span lang="en"><a href="/">Project developer</a></span>
                    </div>
                </div>
            </div>

            <div class="second-column">
                <div class="partner">
                    <div class="logo">
                        <a href="http://government.ru/" target="_blank"><img src="/img/partners/partner-6.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="http://government.ru/" target="_blank">Правительство РФ</a></span>
                        <span lang="en"><a href="http://government.ru/" target="_blank">Government<br>of&nbsp;the&nbsp;Russian<br>Federation</a></span>
                    </div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.e-dag.ru/" target="_blank"><img src="/img/partners/partner-7.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="http://www.e-dag.ru/" target="_blank">Правительство
                                <br>Республики
                                <br>Дагестан</a></span>
                        <span lang="en"><a href="http://www.e-dag.ru/" target="_blank">Government<br>of&nbsp;the&nbsp;Dagestan<br>Republic</a></span>
                    </div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://khunzakh.ru/" target="_blank"><img src="/img/partners/partner-8.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="http://khunzakh.ru/" target="_blank">Администрация
                                <br>Хунзахского
                                <br>района</a></span>
                        <span lang="en"><a href="http://khunzakh.ru/" target="_blank">Khunzakh<br>Region<br>Administration</a></span>
                    </div>
                </div>
                <div class="partner">
                    <div class="logo">
                        <a href="http://www.ncrc.ru/" target="_blank"><img src="/img/partners/partner-9.png"></a>
                    </div>
                    <div class="title">
                        <span lang="ru"><a href="http://www.ncrc.ru/" target="_blank">Управляющая
                                <br>компания ОЭЗ</a></span>
                        <span lang="en"><a href="http://www.ncrc.ru/" target="_blank">Northen Caucasus resorts SEZ asset&nbsp;management company</a></span>
                    </div>
                </div>
            </div>

            <div class="third-column">

                <p>
                    <strong>
                    <span lang="ru">Матлас</span>
                    <span lang="en">Matlas</span>
                    </strong>
                    <span lang="ru">
                    <br>г. Махачкала,
                    <br>ул. Танкаева, 54
                    </span>
                    <span lang="en">
                    <br>54 Tankaeva st.,
                    <br>Makhachkala
                    </span>
                    <br><a id="showmap" href="#showmap"><span lang="ru">показать карту</span><span lang="en">show map</span></a>
                    <a id="closemap" class="hidden" href="#closemap"><span lang="ru">скрыть карту</span><span lang="en">close map</span></a>
                    <br><a href="mailto:info@matlasresort.com">info<span class="beige">@</span>matlasresort.com</a>
                    <br>matlasresort.com
                    <br>
                    <?=date("Y")?>
                </p>

            </div>

            <div class="third-column design">

                <p lang="ru">
                    Дизайнер
                    <br>и разработчик сайта —
                    <br><a href="http://www.igormakovsky.ru" target="_blank">Игорь Маковский</a>
                </p>

                <p lang="en">
                    Designer
                    <br>and site developer —
                    <br><a href="http://www.igormakovsky.ru" target="_blank">Igor Makovsky</a>
                </p>

            </div>

        </div>

        <div id="f-partners-secondary" class="footer__partners_secondary">
            <div class="partner">
                <div class="logo">
                    <a href="https://www.summagroup.ru/" target="_blank"><img src="/img/partners/partner-1.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.cushmanwakefield.ru/" target="_blank"><img src="/img/partners/partner-2.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.exclusivadesign.com/" target="_blank"><img src="/img/partners/partner-3.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.cniipz.ru/" target="_blank"><img src="/img/partners/partner-4.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://government.ru/" target="_blank"><img src="/img/partners/partner-6.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.e-dag.ru/" target="_blank"><img src="/img/partners/partner-7.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://khunzakh.ru/" target="_blank"><img src="/img/partners/partner-8.png"></a>
                </div>
            </div>
            <div class="partner">
                <div class="logo">
                    <a href="http://www.ncrc.ru/" target="_blank"><img src="/img/partners/partner-9.png"></a>
                </div>
            </div>
        </div>

    </div>

    <div id="f-contactinfo-secondary" class="footer__contactinfo">

        <p lang="ru">
            <strong>Матлас</strong>
            <br> г. Махачкала, ул. Танкаева, 54
            <br><a href="mailto:info@matlasresort.com">info<span class="beige">@</span>matlasresort.com</a>
            <br>matlasresort.com
            <br>
            <?=date("Y")?>
        </p>

        <p lang="en">
            <strong>Matlas</strong>
            <br>54 Tankaeva st., Makhachkala
            <br><a href="mailto:info@matlasresort.com">info<span class="beige">@</span>matlasresort.com</a>
            <br>matlasresort.com
            <br>
            <?=date("Y")?>
        </p>

    </div>

</footer> -->
