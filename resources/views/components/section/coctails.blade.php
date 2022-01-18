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
            <div class="hidden cocktail__recipe recipe">
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