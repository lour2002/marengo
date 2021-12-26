<!DOCTYPE html>
<html class="page" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Marengo</title>

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="page__body">
        <input name="type-drink" id="vermouth" type="radio" class="visually-hidden" checked>
        <input name="type-drink" id="sparkling" type="radio" class="visually-hidden" >

        <header class="page__header main__header header">
            {{-- Desktop --}}
            <nav class="w-9/12 h-full">
                <div class="header__navigation">
                    <a href="#top" class="header__logo order-2"><img src="/images/logo.png" width="204" height="72" alt="Marengo"></a>
                    <div class="header__menu order-1">
                        <a href="#products" class="link">{{ __('Продукція') }}</a>
                        <a href="#coctails" class="link">{{ __('Коктейлі') }}</a>
                        <a href="#history" class="link">{{ __('Історія') }}</a>
                    </div>
                    <x-switch-drink class="header__drinks order-3" />
                </div>
{{-- TODO: uncommited for step 2 --}}
{{--                <div>--}}
{{--                    <select>--}}
{{--                        <option value="uk">Укр</option>--}}
{{--                        <option value="ru">Рус</option>--}}
{{--                        <option value="en">Eng</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

            </nav>
            {{-- Mobile --}}
            <button class="hidden" type="button">Меню</button>
            <div class="hidden">
                <x-switch-drink />
                <div>
                    <ul>
                        <li>
                            <a class="font-bold text-blue link" href="#">{{ __('Продукція') }}</a>
                        </li>
                        <li>
                            <a class="font-bold text-blue link" href="#">{{ __('Коктейлі') }}</a>
                        </li>
                        <li>
                            <a class="font-bold text-blue link" href="#">{{ __('Історія') }}</a>
                        </li>
                    </ul>
                </div>
                {{-- TODO: uncommited for step 2 --}}
{{--                <ul>--}}
{{--                    <li data-value="uk"><a href="/">Укр</a></li>--}}
{{--                    <li data-value="ru"><a href="/ru">Рус</a></li>--}}
{{--                    <li data-value="en"><a href="/en">Eng</a></li>--}}
{{--                </ul>--}}
                <x-socials />
            </div>
        </header>
        <main class="main__content">
            <h1 class="visually-hidden">Marengo</h1>
            <div id="top">
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
                                <button class="nav-arrow --circle --backward rotate-180" type="button" disabled></button>
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
            <section id="products" class="sku-list container">
                <h2 class="visually-hidden">{{ __('Продукція') }}</h2>
                <x-slider.nav direction="backward" disabled />
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

                <x-slider.nav direction="forward" />

            </section>
            <section id="coctails" class="cocktails container">
                <h2 class="visually-hidden">{{ __('Коктейлі') }}</h2>
{{-- TODO: uncommited for step 2 --}}
{{--                <select>--}}
{{--                    <option value="all">{{ __('Усі коктейлі') }}</option>--}}
{{--                    <option value="marengo-mojito">Marengo Mojito</option>--}}
{{--                </select>--}}
                <x-slider.nav direction="backward" disabled />
                <ul class="cocktails__slide">
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
                    <li>
                        {{-- TODO: entities [img] --}}
                        <img src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                    </li>
                </ul>

                <article class="hidden">
                    {{-- TODO: entities [img] --}}
                    <img src="/images/coctail.png" alt="Сицилия Sicilia" width="227" height="526">
                    <div class="text-blue bg-white/88">
                        <button type="button">x</button>
                        {{-- TODO: entities [string] --}}
                        <h3 class="recipe__title text-center">Сицилия Sicilia</h3>
                        {{-- TODO: entities [text] --}}
                        <p>Сонячна Сицилія славиться своїми садами сицилійських апельсинів. Саме вони надихнули мастера Marengo (NAME) на створення вермута Di Fiore.</p>
                        <p>Коктейль на основі Di Fiore поєднує в собі шарм Середземного моря Італії, перчинку вулкана Етна і пряний цитрусовий смак.</p>

                        {{-- TODO: entities [recipe] --}}
                        <table>
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
                        <p>Наповніть винний келих доверху кубиками льоду, залийте всі інгредієнти і перемішайте барною ложкою.</p>
                    </div>

                    {{-- TODO: entities [recipe] --}}
                    <div class="text-white bg-blue/88">
                        <button type="button">x</button>
                        {{-- TODO: entities [string] --}}
                        <h3 class="recipe__title text-center">Сироп гвоздики та перцю</h3>
                        {{-- TODO: entities [text] --}}
                        <p>Нам понадобится, что бы приготовить этот ароматный и пряный сироп на 1 л, это всего:</p>

                        {{-- TODO: entities [recipe] --}}
                        <table>
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
                </article>

                <x-slider.nav direction="forward" />
            </section>

            {{-- TODO: entities [img] --}}
            <section class="history image-background" id="history" style="background-image: url('/images/background.png')">
                <div class="container">
                    <div class="history__info">
                        {{-- TODO: entities [string] --}}
                        <h2 class="visually-hidden">Історія MARENGO</h2>
                        <header class="history__title">Історія <b>MARENGO</b></header>
                        {{-- TODO: entities [text] --}}
                        <p>История нашего бренда началась в 2001 году, когда была разлита первая бутылка Marengo на винзаводе Коблево. Сама идея создания высококачественного вермута появилась с момента основания завода в 1982 году.  Именно поэтому на символике Marengo выбита эта цифра.</p>
                        <p>Основным ингредиентом нашего вермута является виноград, из которого мы производим вино высочайшего качества для приготовления Marengo. Наши технологи долго экспериментировали с различными сортами европейского винограда и разнообразным сочетанием трав и пряностей, чтобы получить сбалансированный вкус и аромат, которым вы наслаждаетесь. </p>
                        <p>История нашего бренда началась в 2001 году, когда была разлита первая бутылка Marengo на винзаводе Коблево. Сама идея создания высококачественного вермута появилась с момента основания завода в 1982 году.  Именно поэтому на символике Marengo выбита эта цифра.</p>
                    </div>
                </div>
            </section>
        </main>
        <footer class="page__footer">
            <div class="main__footer container">
                <x-doc-list />
                <img src="/images/logo.png" width="163" height="58" alt="Marengo">
                <x-socials />
            </div>
        </footer>
        {{-- Modal 18+ --}}
        <section class="modal eighteen-modal">
            <h2 class="visually-hidden"></h2>
            <img src="/images/logo.png" width="284" height="100" alt="Marengo">
            {{-- TODO: entities [text] --}}
            <p class="uppercase">Ви повинні відповідати юридичному <br> віку, щоб зайти на даний сайт</p>

            <p class="font-semibold ">{{ __('Вам уже виповнилося 18 років?') }}</p>
            <button type="button" class="button text-red border-2 border-solid border-red">{{ __('Ні') }}</button>
            <button type="button" class="button text-white bg-blue border-2 border-solid border-blue">{{ __('Так') }}</button>
            {{-- TODO: localisation --}}
            <p class="font-semibold ">{{ __('Виберіть мову сайту') }}</p>
{{-- TODO: uncommented for step 2 --}}
{{--            <select>--}}
{{--                <option value="uk">Українська</option>--}}
{{--                <option value="ru">Русский</option>--}}
{{--                <option value="en">English</option>--}}
{{--            </select>--}}
            <br>
            {{-- TODO: entities [text] --}}
            <p>Цей сайт призначений для особистого використання особами, яким на законних підставах дозволено купувати та вживати алкогольні напої в Україні.</p>
            {{-- TODO: entities [text] --}}
            <p>Входячи на цей сайт, ви погоджуєтесь з нашими <a  class="font-semibold" href="">умовами використання</a> та <a class="font-semibold" href="#">політикою конфіденційності</a>.</p>
            {{-- TODO: entities [text] --}}
            <p>Насолоджуйтесь відповідально.</p>
            <p>© {{ now()->year }} MARENGO </p>
        </section>
        {{-- Scripts --}}
    </body>
</html>
