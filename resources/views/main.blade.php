<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marengo</title>

        {{-- Fonts --}}

        {{-- Styles --}}
    </head>
    <body>
        <input name="type-drink" id="drink-vermouth" type="radio" class="visually-hidden">
        <input name="type-drink" id="drink-sparkling" type="radio" class="visually-hidden">
        <header class="main-header">
            {{-- Desktop --}}
            <nav>
              <div>
                  <div>
                      <a href="#products">{{ __('Продукція') }}</a>
                      <a href="#coctails">{{ __('Коктейлі') }}</a>
                      <a href="#history">{{ __('Історія') }}</a>
                  </div>
                  <a href="#top"><img src="" width="204" height="72" alt="Marengo"></a>
                  <div>
                      <button type="button">{{ __('Вермути') }}</button>
                      <button type="button">{{ __('Ігристі') }}</button>
                  </div>
              </div>
              <div>
                  <select>
                      <option value="uk">Укр</option>
                      <option value="ru">Рус</option>
                      <option value="en">Eng</option>
                  </select>
              </div>
            </nav>
            {{-- Mobile --}}
            <button type="button">Меню</button>
            <div>
                <div>
                    <label for="drink-vermouth">{{ __('Вермути') }}</label>
                    <label for="drink-sparkling">{{ __('Ігристі') }}</label>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="#">{{ __('Продукція') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('Коктейлі') }}</a>
                        </li>
                        <li>
                            <a href="#">{{ __('Історія') }}</a>
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
        <main class="main-content">
            <h1 class="visually-hidden">Marengo</h1>
            <div id="top">
                <section>
                    <h2 class="visually-hidden">{{ __("Вермути") }}</h2>
                    <ul>
                        <li></li>
                    </ul>
                    <div>
                        {{-- Tablet / Phone --}}
                        <picture>
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img, string] --}}
                            <img src="" alt="Marengo Mojito">
                        </picture>

                        {{-- BIG Video / Image --}}

                        <picture>
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img , string] --}}
                            <img src="" alt="Marengo Mojito">
                        </picture>

                        <video src="">
                        </video>

                        {{-- Bottle --}}
                        <picture>
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img, string] --}}
                            <img src="" alt="Marengo Mojito">
                        </picture>

                        {{-- SMALL --}}
                        <picture>
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img] --}}
                            <source srcset="" media="" sizes="">
                            {{-- TODO: entities [img, string] --}}
                            <img src="" alt="Marengo Mojito">
                        </picture>
                        <div>
                            {{-- TODO: entities [string] --}}
                            <h3>Marengo Mojito</h3>
                            {{-- TODO: entities [text] --}}
                            <div>
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
                            <a href="#">{{ __('Купити') }}</a>
                            <a href="#">{{ __('Коктейлі') }}</a>
                        </div>
                    </div>

                </section>
                <section>
                    <h2 class="visually-hidden">{{ __('Ігристі') }}</h2>
                </section>
            </div>
            <section id="products">
                <h2 class="visually-hidden">{{ __('Продукція') }}</h2>
                <button type="button" disabled><</button>
                <ul>
                    <li>
                        <figure>
                            {{-- TODO: entities [img] --}}
                            <img src="" alt="Marengo Mojito">
                            {{-- TODO: entities [string] --}}
                            <figcaption class="visually-hidden">Marengo Mojito</figcaption>
                        </figure>
                    </li>
                </ul>
                <button type="button">></button>
            </section>
            <section id="coctails">
                <h2 class="visually-hidden">{{ __('Коктейлі') }}</h2>
{{-- TODO: uncommited for step 2 --}}
{{--                <select>--}}
{{--                    <option value="all">{{ __('Усі коктейлі') }}</option>--}}
{{--                    <option value="marengo-mojito">Marengo Mojito</option>--}}
{{--                </select>--}}
                <button type="button" disabled><</button>
                <ul>
                    <li>
                        {{-- TODO: entities [img] --}}
                        <img src="" alt="">
                        <article>
                            {{-- TODO: entities [img] --}}
                            <img src="" alt="">
                            <div>
                                {{-- TODO: entities [string] --}}
                                <h3>Сицилия Sicilia</h3>
                                {{-- TODO: entities [text] --}}
                                <p>Сонячна Сицилія славиться своїми садами сицилійських апельсинів. Саме вони надихнули мастера Marengo (NAME) на створення вермута Di Fiore.</p>
                                <p>Коктейль на основі Di Fiore поєднує в собі шарм Середземного моря Італії, перчинку вулкана Етна і пряний цитрусовий смак.</p>

                                {{-- TODO: entities [recipe] --}}
                                <table>
                                    {{-- TODO: entities [ingrifient] --}}
                                    <tr>
                                        <td>80 мл</td>
                                        <td>Вермут Marengo Di Fiore</td>
                                    </tr>
                                    <tr>
                                        <td>20 мл</td>
                                        <td>Кордіал сицилійського апельсина копчений</td>
                                    </tr>
                                    <tr>
                                        <td>5 г</td>
                                        <td>
                                            Сироп гвоздики та перцю
                                            <button>*</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>30 г</td>
                                        <td>Грейпфрут палений</td>
                                    </tr>
                                </table>
                                <p>Наповніть винний келих доверху кубиками льоду, залийте всі інгредієнти і перемішайте барною ложкою.</p>
                            </div>

                            {{-- TODO: entities [recipe] --}}
                            <div>
                                {{-- TODO: entities [string] --}}
                                <h4>Сироп гвоздики та перцю</h4>
                                {{-- TODO: entities [text] --}}
                                <p>Нам понадобится, что бы приготовить этот ароматный и пряный сироп на 1 л, это всего:</p>

                                {{-- TODO: entities [recipe] --}}
                                <table>
                                    {{-- TODO: entities [ingrifient] --}}
                                    <tr>
                                        {{-- TODO: entities [string] --}}
                                        <td>20 г</td>
                                        {{-- TODO: entities [string] --}}
                                        <td>Гвоздика</td>
                                    </tr>
                                    <tr>
                                        <td>30 г</td>
                                        <td>Перемолотый чёрный перц</td>
                                    </tr>
                                    <tr>
                                        <td>600 г</td>
                                        <td>Сахар</td>
                                    </tr>
                                    <tr>
                                        <td>800 г</td>
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
                    </li>
                </ul>
                <button type="button">></button>
            </section>

            {{-- TODO: entities [img] --}}
            <section id="history" style="background-image: url('')">
                <div>
                    {{-- TODO: entities [string] --}}
                    <h2>Історія MARENGO</h2>
                    {{-- TODO: entities [text] --}}
                    <p>История нашего бренда началась в 2001 году, когда была разлита первая бутылка Marengo на винзаводе Коблево. Сама идея создания высококачественного вермута появилась с момента основания завода в 1982 году.  Именно поэтому на символике Marengo выбита эта цифра.</p>
                    <p>Основным ингредиентом нашего вермута является виноград, из которого мы производим вино высочайшего качества для приготовления Marengo. Наши технологи долго экспериментировали с различными сортами европейского винограда и разнообразным сочетанием трав и пряностей, чтобы получить сбалансированный вкус и аромат, которым вы наслаждаетесь. </p>
                    <p>История нашего бренда началась в 2001 году, когда была разлита первая бутылка Marengo на винзаводе Коблево. Сама идея создания высококачественного вермута появилась с момента основания завода в 1982 году.  Именно поэтому на символике Marengo выбита эта цифра.</p>
                </div>
            </section>
        </main>
        <footer class="main-footer">
            <div>
                <x-doc-list />
                <img src="" width="163" height="58" alt="Marengo">
                <x-socials />
            </div>
        </footer>
        {{-- Modal 18+ --}}
        {{-- TODO: entities [img] --}}
        <div style="background-image: url()">
            <img src="" width="284" height="100" alt="Marengo">
            {{-- TODO: entities [text] --}}
            <p>ВИ ПОВИННІ ВІДПОВІДАТИ ЮРИДИЧНОМУ <br> ВІКУ, ЩОБ ЗАЙТИ НА ДАНИЙ САЙТ</p>

            <p>{{ __('Вам уже виповнилося 18 років?') }}</p>
            <button type="button">{{ __('Ні') }}</button>
            <button type="button">{{ __('Так') }}</button>
            {{-- TODO: localisation --}}
            <p>{{ __('Виберіть мову сайту') }}</p>
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
            <p>Входячи на цей сайт, ви погоджуєтесь з нашими <a href="">умовами використання</a> та <a href="">політикою конфіденційності</a>.</p>
            {{-- TODO: entities [text] --}}
            <p>Насолоджуйтесь відповідально.</p>
            <p>© {{ now()->year }} MARENGO </p>
        </div>
        {{-- Scripts --}}
    </body>
</html>
