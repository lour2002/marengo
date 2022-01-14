<header class="header --mob-menu-active w-full h-[60px] xl:h-[55px] bg-white fixed z-30 select-none">
    {{-- Desktop --}}
    <nav class="h-full">
        <div class="header__navigation h-full grid items-center px-x lg:px-0">
            <a href="#top" class="header__logo order-0 lg:order-2 xl:w-[204px]">
                <img class="w-[112px] xl:w-[204px] xl:absolute xl:top-[17px]"
                     src="/images/logo.png" width="204" height="72" alt="Marengo">
            </a>
            <div class="header__menu hidden lg:block lg:order-0">
                <div class="lg:flex lg:items-center lg:justify-around lg:max-w-[550px] lg:ml-auto ">
                    <a href="#products" class="link font-bold text-md text-blue px-2">{{ __('Продукція') }}</a>
                    <a href="#coctails" class="link font-bold text-md text-blue px-2">{{ __('Коктейлі') }}</a>
                    <a href="#history" class="link font-bold text-md text-blue px-2">{{ __('Історія') }}</a>
                </div>
            </div>
            <x-block.switch-drink class="header__drinks hidden md:flex md:justify-center md:items-center md:order-1 lg:order-2 xl:justify-start" />
            <button class="header__mob-btn relative w-4x h-4x order-2 lg:hidden" type="button"></button>
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
    <div class="mob-menu w-full px-2x py-[60px] bg-white overflow-auto absolute top-[60px] lg:hidden">
        <div class="mob-menu__wrap grid grid-flow-row gap-2x h-full">
            <x-block.switch-drink class="grid grid-cols-2 gap-2x sm:gap-4x text-center" />
            <div class="flex w-full">
                <ul class="my-auto">
                    <li>
                        <a class="text-[32px] leading-4x font-bold text-blue link block py-x" href="#">{{ __('Продукція') }}</a>
                    </li>
                    <li>
                        <a class="text-[32px] leading-4x font-bold text-blue link block py-x" href="#">{{ __('Коктейлі') }}</a>
                    </li>
                    <li>
                        <a class="text-[32px] leading-4x font-bold text-blue link block py-x" href="#">{{ __('Історія') }}</a>
                    </li>
                </ul>
            </div>
            {{-- TODO: uncommited for step 2 --}}
    {{--                <ul>--}}
    {{--                    <li data-value="uk"><a href="/">Укр</a></li>--}}
    {{--                    <li data-value="ru"><a href="/ru">Рус</a></li>--}}
    {{--                    <li data-value="en"><a href="/en">Eng</a></li>--}}
    {{--                </ul>--}}
            <x-block.socials />
        </div>
    </div>
</header>
