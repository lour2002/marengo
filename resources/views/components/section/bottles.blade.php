<div id="bottles">
    <section data-drink="vermouth" class="hidden">
        <h2 class="visually-hidden">{{ __("Вермути") }}</h2>
        <ul>
            <li class="flex relative">


                {{-- Tablet / Phone --}}
{{--                        <picture>--}}
{{-- TODO: entities [img] --}}
{{--                            <source srcset="" media="" sizes="">--}}
{{-- TODO: entities [img] --}}
{{--                            <source srcset="" media="" sizes="">--}}
{{-- TODO: entities [img] --}}
{{--                            <source srcset="" media="" sizes="">--}}
{{-- TODO: entities [img, string] --}}
{{--                            <img src="" alt="Marengo Mojito">--}}
{{--                        </picture>--}}

                <div class="list-drinks__part-one relative w-full xl:w-9/12">
                    {{-- BIG Video / Image --}}
                    <picture >
                        {{-- TODO: entities [img] --}}
                        <source srcset="/images/mojito_slide_phone.png" media="(max-width: 767px)" sizes="">
                        {{-- TODO: entities [img] --}}
                        <source srcset="/images/mojito_slide_tablet.png" media="(max-width: 1240px)" sizes="">
                        {{-- TODO: entities [img] --}}
                        <source srcset="/images/mojito_slide_big.png" media="(min-width: 1240px)" sizes="">
                        {{-- TODO: entities [img, string] --}}
                        <img class="h-full w-full object-cover object-center"
                             src="/images/mojito_slide_tablet.png" alt="Marengo Mojito">
                    </picture>

                    <div class="hidden list-drinks__info-wrap right-2/4">
                        <div class="relative">
                            {{-- TODO: entities [string] --}}
                            <h3 class="drink-slide__title">Marengo Mojito</h3>
                            {{-- TODO: entities [text] --}}
                            <div class="drink-slide__desc ">
                                <p>Відчуйте справжній смак Куби у вашому келиху!</p>
                                <p>Ароматний, свіжий та соковитий, з довгим м’ятно-лаймовим післясмаком та легкою солодкістю, створений освіжати і тонізувати під час літньої спеки — це все про MARENGO MOJITO!</p>
                                <br>
                                <p>Виготовлений за новітньою рецептурою, цей вермут — справжній король літнього відпочинку і пляжних вечірок. Прекрасно поєднується з льодом, фруктами, легкими десертами та драйвовую музикою.</p>
                                <br>
                                <p>Температура подачі вермуту/коктейлю: 10-15 °С</p>
                                <p>Вміст спирту: 15 % об</p>
                                <p>Вміст цукру: 16 % мас</p>
                                <p>Місткість: 0,5 л; 1,0 л</p>
                            </div>
                            {{-- TODO: entities [link] --}}
                            <a href="#" class="drink-slide__link bg-red">{{ __('Купити') }}</a>
                            <a href="#" class="drink-slide__link bg-blue">{{ __('Коктейлі') }}</a>
                        </div>
                    </div>

                </div>

                {{-- Bottle --}}
                {{-- TODO: entities [img, string] --}}
                <img class="hidden drink-slide__bottle right-1/4 translate-x-2/4" src="/images/mojito_bottle.png" alt="Marengo Mojito" width="469" height="1038">
                {{--                        <picture>--}}
                {{-- TODO: entities [img] --}}
                {{--                            <source srcset="" media="" sizes="">--}}
                {{-- TODO: entities [img] --}}
                {{--                            <source srcset="" media="" sizes="">--}}
                {{-- TODO: entities [img] --}}
                {{--                            <source srcset="" media="" sizes="">--}}
                {{-- TODO: entities [img, string] --}}
                {{--                            <img src="" alt="Marengo Mojito">--}}
                {{--                        </picture>--}}

                <div class="absolute flex right-2/4 translate-x-2/4 bottom-2/4 translate-y-2/4">
                    {{-- Buttons --}}
                    <button class="nav-arrow --circle --backward rotate-180" type="button"></button>
                    <button class="nav-arrow --circle --forward" type="button"></button>
                </div>

                {{-- SMALL --}}
                <div class="list-drinks__part-two w-0 xl:w-3/12">
                    <img class="drink-slide__picture" src="/images/mojito_slide_small.png" alt="Marengo Mojito" width="500" height="904">
                </div>
            </li>
        </ul>

    </section>
    <section data-drink="vermouth" class="hidden">
        <h2 class="visually-hidden">{{ __('Ігристі') }}</h2>
    </section>
</div>
