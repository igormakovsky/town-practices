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
        function() {
            var town = getObjects(data, 'id', "<?=$id?>")[0] // Returns an array of matching objects
            var similiarListArray = []
            if (town.hasOwnProperty('similiar')) {
                for (i = 0; i < town.similiar.length; i++) {
                    var similiarTown = getObjects(data, 'id', town.similiar[i])[0]
                    if (similiarTown !== undefined) {
                        similiarListArray.push({
                            title: similiarTown.hasOwnProperty('title') ? similiarTown.title : '',
                            town: similiarTown.hasOwnProperty('town') ? similiarTown.town : '',
                            link: '/practices/' + similiarTown.id,
                            id: similiarTown.id
                        })
                    }
                }
            }
            var simListTpl = $('#simListTplID').html()
            Mustache.parse(simListTpl) // optional, speeds up future uses
            var output = Mustache.render(simListTpl, {
                simList: similiarListArray
            })
            if (document.getElementById('similiar')) {
                document.getElementById('similiar').innerHTML = output
            }
        }
    )

</script>

<footer class="f" style="margin-top:5rem;">

    <!-- <section id="similiar" style="margin-top:5rem;"></section> -->

    <section class="center" style="margin-top:5rem;">

        <h3>Поделитесь практикой и вдохновите друзей</h3>

        <div class="f-social">

            <div class="f-social__element">
                <p><a href="#">Вконтакте</a></p>
            </div>

            <div class="f-social__element">
                <p><a href="#">Фейсбук</a></p>
            </div>

            <div class="f-social__element">
                <p><a href="#">Твиттер</a></p>
            </div>

        </div>

    </section>

    <section class="center" style="margin-top:5rem;">

        <h3>Другие практики</h3>

        <script>
            $(document).ready(function() {
                var template = $('#f-practices__template').html()
                Mustache.parse(template) // optional, speeds up future uses
                var output = Mustache.render(template, {
                    practices: practicesListArray
                })
                if (document.getElementById('f-practices')) {
                    document.getElementById('f-practices').innerHTML = output
                }
            })

        </script>

        <script id="f-practices__template" class="" type="x-tmpl-mustache">
            {{#practices}}
            <a href="{{link}}" class="f-practices-link">
                <div class="f-practices card f-town-{{id}} {{types}}">
                    <p>
                        <span class="card-town">{{town}}</span><br><span class="card-title">{{title}}</span>
                    </p>
                </div>
            </a>
            {{/practices}}
        </script>

        <div id="f-practices" class="f-practices">

        </div>

    </section>

    <section class="f-contactinfo">

        <div class="f-contactinfo__container">

            <div class="logo">
                <a href="/"><img src="/img/townpractices-logo.svg"></a>
            </div>

            <div class="thanks_1">
                <p>
                    Сайт разработан на средства гранта Президента Российской Федерации для поддержки творческих проектов общенационального значения в области культуры и искусства
                    <span class="thanks_1__year"><?=date("Y")?></span>
                </p>
            </div>

            <div class="thanks_2">
                <p>
                    Проект создан при поддержке министерства культуры
                </p>
            </div>

            <div class="year">

            </div>

        </div>

    </section>

</footer>

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

        $('.<?=$id;?>').addClass('active');
    });

</script>
