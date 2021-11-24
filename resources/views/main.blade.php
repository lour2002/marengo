<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marengo</title>

        <!-- Fonts -->

        <!-- Styles -->
    </head>
    <body>
        <header>
            {{-- Desktop --}}
            <div>
                <div>
                    <a href="#">Продукція</a>
                    <a href="#">Коктейлі</a>
                    <a href="#">Історія</a>
                </div>
                <img src="" width="204" height="72" alt="Marengo">
                <div>
                    <button type="button">Вермути</button>
                    <button type="button">Ігристі</button>
                </div>
            </div>
            <div>
                <select>
                    <option value="uk">Укр</option>
                    <option value="ru">Рос</option>
                    <option value="en">Англ</option>
                </select>
            </div>
            {{-- Mobile --}}
            <button type="button"></button>
            <div>
                <div>
                    <button type="button">Вермути</button>
                    <button type="button">Ігристі</button>
                </div>
                <div>
                    <a href="#">Продукція</a>
                    <a href="#">Коктейлі</a>
                    <a href="#">Історія</a>
                </div>
                <ul>
                    <li data-value="uk">Укр</li>
                    <li data-value="ru">Рос</li>
                    <li data-value="en">Англ</li>
                </ul>
                <div>
                    <!-- TODO: Fields [link, title, icon] -->
                    <a href="/" title="Facebook">
                        <img src="" width="31" height="31" alt="Facebook">
                    </a>
                    <!-- TODO: Fields [link, title, icon] -->
                    <a href="/" title="Instagram">
                        <img src="" width="31" height="31" alt="Instagram">
                    </a>
                    <!-- TODO: Fields [link, title, icon] -->
                    <a href="/" title="Youtube">
                        <img src="" width="45" height="32" alt="Youtube">
                    </a>
                </div>
            </div>
        </header>
        <main>
            <section></section>
            <section></section>
            <section></section>

            <section>
                <div>
                    <!-- TODO: Fields [title] -->
                    <h2>Історія MARENGO</h2>
                    <!-- TODO: Fields [text] -->
                    <p>История нашего бренда началась в 2001 году, когда была разлита первая бутылка Marengo на винзаводе Коблево. Сама идея создания высококачественного вермута появилась с момента основания завода в 1982 году.  Именно поэтому на символике Marengo выбита эта цифра.</p>
                    <p>Основным ингредиентом нашего вермута является виноград, из которого мы производим вино высочайшего качества для приготовления Marengo. Наши технологи долго экспериментировали с различными сортами европейского винограда и разнообразным сочетанием трав и пряностей, чтобы получить сбалансированный вкус и аромат, которым вы наслаждаетесь. </p>
                    <p>История нашего бренда началась в 2001 году, когда была разлита первая бутылка Marengo на винзаводе Коблево. Сама идея создания высококачественного вермута появилась с момента основания завода в 1982 году.  Именно поэтому на символике Marengo выбита эта цифра.</p>
                </div>
                <!-- TODO: Fields [] -->
                <img src="" alt="Пейзаж" width="100%" load="lazy">
            </section>
        </main>
        <footer>
            <div>
                <div>
                    <!-- TODO: Fields [link, title] -->
                    <a href="/" title="Положення та умови">Положення та умови</a>
                    <!-- TODO: Fields [link, title] -->
                    <a href="/" title="Політика кондефіційності">Політика кондефіційності</a>
                    <!-- TODO: Fields [link, title] -->
                    <a href="/" title="Політика Cookies">Політика Cookies</a>
                </div>
                <img src="" width="163" height="58" alt="Marengo">
                <div>
                    <!-- TODO: Fields [link, title, icon] -->
                    <a href="/" title="Facebook">
                        <img src="" load="lazy" width="45" height="32" alt="Facebook">
                    </a>
                    <!-- TODO: Fields [link, title, icon] -->
                    <a href="/" title="Instagram">
                        <img src="" load="lazy" width="45" height="32" alt="Instagram">
                    </a>
                    <!-- TODO: Fields [link, title, icon] -->
                    <a href="/" title="Youtube">
                        <img src="" load="lazy" width="45" height="32" alt="Youtube">
                    </a>
                </div>
            </div>
        </footer>
    <!-- Scripts -->
    </body>
</html>
