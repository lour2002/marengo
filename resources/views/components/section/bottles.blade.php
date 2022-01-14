<div id="bottles">
    <section data-drink="vermouth" class="hidden">
        <h2 class="visually-hidden">{{ __("Вермути") }}</h2>
        <ul>
            <li class="flex relative">
                <div class="list-drinks__part-one relative w-full xl:w-9/12">
                    {{-- BIG Video / Image --}}
                    <picture >
                        {{-- TODO: entities [img] --}}
                        <source srcset="/images/mojito_slide_phone.png" media="(max-width: 767px)" sizes="">
                        {{-- TODO: entities [img] --}}
                        <source srcset="/images/mojito_slide_tablet.png" media="(max-width: 1279px)" sizes="">
                        {{-- TODO: entities [img] --}}
                        <source srcset="/images/mojito_slide_big.png" media="(min-width: 1280px)" sizes="">
                        {{-- TODO: entities [img, string] --}}
                        <img class="h-full w-full object-cover object-center"
                             src="/images/mojito_slide_tablet.png" alt="Marengo Mojito">
                    </picture>

                    <div class="list-drinks__info-wrap w-full absolute z-20 bottom-x left-2/4 -translate-x-2/4 md:bottom-2x xl:bottom-4x xl:max-w-screen-md xl:px-x">
                        <div class="relative flex flex-col h-full xl:text-left">
                            {{-- TODO: entities [string] --}}
                            <h3 class="drink-slide__title self-center font-normal text-lg text-white bg-blue/88 p-2x md:text-[36px] md:leiding-[44px] xl:self-start">Marengo Mojito</h3>
                            <button class="close --white hidden absolute top-4 right-4" type="button"></button>
                            {{-- TODO: entities [text] --}}
                            <div class="drink-slide__info hidden grow  p-2x  md:max-w-[458px] xl:block xl:static xl:max-w-none xl:bg-white/88 xl:text-blue">
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
                            <div class="self-center xl:self-start">
                                <a href="#" class="w-[130px] sm:w-[140px] text-center inline-block no-underline text-white mt-2x mr-2x py-x bg-red ">{{ __('Купити') }}</a>
                                <a href="#" class="w-[130px] sm:w-[140px] text-center inline-block no-underline text-white mt-2x py-x bg-blue ">{{ __('Коктейлі') }}</a>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Bottle --}}
                {{-- TODO: entities [img, string] --}}
                <img class="drink-slide__bottle absolute z-10 h-3/4 w-auto object-contain right-2/4 translate-x-2/4 translate-y-[10%] md:portrait:h-[65%] md:portrait:translate-y-1/4  xl:object-cover xl:right-1/4 xl:translate-y-0 3xl:z-30" src="/images/mojito_bottle.png" alt="Marengo Mojito" width="469" height="1038">
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

                <div class="absolute flex right-2/4 translate-x-2/4 bottom-2/4 translate-y-2/4 xl:right-1/4">
                    {{-- Buttons --}}
                    <button class="nav-arrow --circle --backward rotate-180" type="button"></button>
                    <button class="nav-arrow --circle --forward" type="button"></button>
                </div>

                {{-- SMALL --}}
                <div class="list-drinks__part-two hidden w-0 xl:block xl:w-3/12">
                    <img class="h-full w-full object-cover object-center" src="/images/mojito_slide_small.png" alt="Marengo Mojito" width="500" height="904">
                </div>
            </li>
        </ul>

    </section>
    <section data-drink="vermouth" class="hidden">
        <h2 class="visually-hidden">{{ __('Ігристі') }}</h2>
    </section>
</div>
