<!DOCTYPE html>
<html class="page" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Marengo</title>

        {{-- SEO tags --}}
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    {{-- TODO: to add '--active-modal' class --}}
    <body class="page__body">
        <input name="type-drink" id="vermouth" type="radio" class="visually-hidden" checked>
        <input name="type-drink" id="sparkling" type="radio" class="visually-hidden" >

        <x-layout.header />

        <main class="main__content">
            <h1 class="visually-hidden">Marengo</h1>
            <div id="top" class="hidden">
                <section>
                    <h2 class="visually-hidden">{{ __("Вермути") }}</h2>
                    <ul>
                        <li class="flex relative">


                            {{-- Tablet / Phone --}}
    {{--                        <picture>--}}
    {{--                            --}}{{-- TODO: entities [img] --}}
    {{--                            <source srcset="" media="" sizes="">--}}
    {{--                            --}}{{-- TODO: entities [img] --}}
    {{--                            <source srcset="" media="" sizes="">--}}
    {{--                            --}}{{-- TODO: entities [img] --}}
    {{--                            <source srcset="" media="" sizes="">--}}
    {{--                            --}}{{-- TODO: entities [img, string] --}}
    {{--                            <img src="" alt="Marengo Mojito">--}}
    {{--                        </picture>--}}

                            <div class="list-drinks__part-one w-9/12">
                                {{-- BIG Video / Image --}}
                                <img class="drink-slide__picture" src="/images/mojito_slide_big.png" alt="Marengo Mojito" width="1420" height="904">

                                <div class="list-drinks__info-wrap right-2/4">
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
                            <img class="drink-slide__bottle right-1/4 translate-x-2/4" src="/images/mojito_bottle.png" alt="Marengo Mojito" width="469" height="1038">
                            {{--                        <picture>--}}
                            {{--                            --}}{{-- TODO: entities [img] --}}
                            {{--                            <source srcset="" media="" sizes="">--}}
                            {{--                            --}}{{-- TODO: entities [img] --}}
                            {{--                            <source srcset="" media="" sizes="">--}}
                            {{--                            --}}{{-- TODO: entities [img] --}}
                            {{--                            <source srcset="" media="" sizes="">--}}
                            {{--                            --}}{{-- TODO: entities [img, string] --}}
                            {{--                            <img src="" alt="Marengo Mojito">--}}
                            {{--                        </picture>--}}

                            <div class="list-drinks__navigation right-1/4 translate-x-2/4 bottom-2/4 translate-y-2/4">
                                {{-- Buttons --}}
                                <button class="nav-arrow --circle --backward rotate-180" type="button"></button>
                                <button class="nav-arrow --circle --forward" type="button"></button>
                            </div>

                            {{-- SMALL --}}
                            <div class="list-drinks__part-two w-3/12">
                                <img class="drink-slide__picture" src="/images/mojito_slide_small.png" alt="Marengo Mojito" width="500" height="904">
                            </div>
    {{--                        <picture>--}}
    {{--                            --}}{{-- TODO: entities [img] --}}
    {{--                            <source srcset="" media="" sizes="">--}}
    {{--                            --}}{{-- TODO: entities [img] --}}
    {{--                            <source srcset="" media="" sizes="">--}}
    {{--                            --}}{{-- TODO: entities [img] --}}
    {{--                            <source srcset="" media="" sizes="">--}}
    {{--                            --}}{{-- TODO: entities [img, string] --}}
    {{--                            <img src="" alt="Marengo Mojito">--}}
    {{--                        </picture>--}}

                        </li>
                    </ul>

                </section>
                <section>
                    <h2 class="visually-hidden">{{ __('Ігристі') }}</h2>
                </section>
            </div>
            <section id="products" class="hidden py-32 items-center sku-list container">
                <h2 class="visually-hidden">{{ __('Продукція') }}</h2>
                <x-slider.nav class="mx-4" direction="backward" />
                <ul class="sku-slide">
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="/images/product.png" alt="Marengo Mojito" width="362" height="362">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                </ul>

                <x-slider.nav class="mx-4" direction="forward" />

            </section>
            <section id="coctails" class="hidden py-32 items-center cocktails container">
                <h2 class="visually-hidden">{{ __('Коктейлі') }}</h2>
{{-- TODO: uncommited for step 2 --}}
{{--                <select>--}}
{{--                    <option value="all">{{ __('Усі коктейлі') }}</option>--}}
{{--                    <option value="marengo-mojito">Marengo Mojito</option>--}}
{{--                </select>--}}
                <x-slider.nav class="mx-4" direction="backward" />
                <ul class="cocktails__slide relative">
                    <li class="cocktail">
                        {{-- TODO: entities [img] --}}
                        <img src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                        <article class="cocktail__desc cocktails__item-desc">
                            {{-- TODO: entities [img] --}}
                            <img class="cocktail__picture" src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                            <div class="text-blue bg-white/88 overflow-auto">
                                <button class="close --blue absolute top-4 right-4" type="button"></button>
                                {{-- TODO: entities [string] --}}
                                <div class="cocktail__info">
                                    <h3 class="recipe__title text-center">Сицилия <br> Sicilia</h3>
                                    {{-- TODO: entities [text] --}}
                                    <p class="text-justify">Сонячна Сицилія славиться своїми садами сицилійських апельсинів. Саме вони надихнули мастера Marengo (NAME) на створення вермута Di Fiore.</p>
                                    <p class="text-justify">Коктейль на основі Di Fiore поєднує в собі шарм Середземного моря Італії, перчинку вулкана Етна і пряний цитрусовий смак.</p>

                                    {{-- TODO: entities [recipe] --}}
                                    <table class="cocktail__ingredients">
                                        {{-- TODO: entities [ingrifient] --}}
                                        <tr>
                                            <td class="font-semibold">80 мл</td>
                                            <td>Вермут <b class="font-semibold">Marengo Di Fiore</b></td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">20 мл</td>
                                            <td>Кордіал сицилійського апельсина копчений</td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">5 г</td>
                                            <td>
                                                Сироп гвоздики та перцю
                                                <button>*</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-semibold">30 г</td>
                                            <td>Грейпфрут палений</td>
                                        </tr>
                                    </table>
                                    {{-- TODO: entities [text] --}}
                                    <p class="text-justify">Наповніть винний келих доверху кубиками льоду, залийте всі інгредієнти і перемішайте барною ложкою.</p>
                                </div>
                            </div>
                        </article>

                        {{-- TODO: entities [recipe] --}}
                        <div class="cocktail__recipe recipe">
                            <button class="close --white absolute top-4 right-4" type="button"></button>
                            {{-- TODO: entities [string] --}}
                            <h3 class="recipe__title">Сироп <br> гвоздики та перцю</h3>
                            {{-- TODO: entities [text] --}}
                            <p>Нам понадобится, что бы приготовить этот ароматный и пряный сироп на 1 л, это всего:</p>

                            {{-- TODO: entities [recipe] --}}
                            <table class="recipe__ingredients">
                                {{-- TODO: entities [ingrifient] --}}
                                <tr>
                                    {{-- TODO: entities [string] --}}
                                    <td class="font-semibold">20 г</td>
                                    {{-- TODO: entities [string] --}}
                                    <td>Гвоздика</td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">30 г</td>
                                    <td>Перемолотый чёрный перц</td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">600 г</td>
                                    <td>Сахар</td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">800 г</td>
                                    <td>Вода фильтрованная</td>
                                </tr>
                            </table>
                            {{-- TODO: entities [text] --}}
                            <ul>
                                <li>Смешать специи с фильтрованной водой</li>
                                <li>Проварить всего 5мин на маленьком огне</li>
                                <li>Отфильтровать и добавить Сахар</li>
                                <li>Растворить, так же на маленьком огне</li>
                                <li>Охладить и наслаждаться этим ингредиентом в коктейле Сицилия</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        {{-- TODO: entities [img] --}}
                        <img src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                    </li>
                    <li>
                        {{-- TODO: entities [img] --}}
                        <img src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                    </li>
                    <li>
                        {{-- TODO: entities [img] --}}
                        <img src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                    </li>
                    <li>
                        {{-- TODO: entities [img] --}}
                        <img src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                    </li>
                </ul>



                <x-slider.nav class="mx-4" direction="forward" />
            </section>

            <x-section.history />
        </main>

        <x-layout.footer />

        <x-modal.eighteen />
        {{-- Scripts --}}
    </body>
</html>
