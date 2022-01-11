{{-- Modal 18+ TODO: to add '--show' class --}}
<section class="modal fixed z-50 text-blue text-center w-screen h-screen">
    <div class="absolute h-full w-full backdrop-blur bg-beige/85"></div>
    <div class="eighteen-modal__wrap overflow-auto relative z-50 h-full m-auto grid grid-flow-row justify-center gap-[20px] p-[20px] md:pb-[40px] md:gap-[40px] xl:pt-[80px] xl:pb-[40px] max-w-screen-lg">
        <h2 class="visually-hidden">{{ __('Підтвердження віку') }}</h2>
        <img class="m-auto w-[170px] md:w-[284px]" src="/images/logo.png" width="284" height="100" alt="Marengo">
        {{-- TODO: entities [text] --}}
        <p class="uppercase text-mb md:text-[30px] md:leading-[36px]">Ви повинні відповідати юридичному <br> віку, щоб зайти на даний сайт</p>
        <div>
            <p class="font-semibold text-mb md:text-lg">{{ __('Вам уже виповнилося 18 років?') }}</p>
            <div class="grid grid-cols-2 gap-[20px] lg:gap-[40px]">
                <button type="button" class="w-full max-w-[180px] h-[40px] md:h-[55px] border-2 border-solid text-mb leading-[40px] md:leading-[55px] justify-self-center md:justify-self-end text-red border-red">{{ __('Ні') }}</button>
                <button type="button" class="w-full max-w-[180px] h-[40px] md:h-[55px] border-2 border-solid text-mb leading-[40px] md:leading-[55px] justify-self-center md:justify-self-start text-white bg-blue border-blue">{{ __('Так') }}</button>
            </div>
{{-- TODO: uncommented for step 2 --}}
        {{-- TODO: localisation --}}
        {{-- <p class="font-semibold text-lg">{{ __('Виберіть мову сайту') }}</p> --}}
{{--            <select>--}}
{{--                <option value="uk">Українська</option>--}}
{{--                <option value="ru">Русский</option>--}}
{{--                <option value="en">English</option>--}}
{{--            </select>--}}
        </div>
        <div class="text-sm lg:text-base">
            {{-- TODO: entities [text] --}}
            <p>Цей сайт призначений для особистого використання особами, яким на законних підставах дозволено купувати та вживати алкогольні напої в Україні.</p>
            {{-- TODO: entities [text] --}}
            <p>Входячи на цей сайт, ви погоджуєтесь з нашими <a  class="font-semibold" href="">умовами використання</a> та <a class="font-semibold" href="#">політикою конфіденційності</a>.</p>
            {{-- TODO: entities [text] --}}
            <p>Насолоджуйтесь відповідально.</p>
            <p>© {{ now()->year }} MARENGO </p>
        </div>
    </div>
</section>
