<!-- sidebar -->
<div id="sidebar" class="hidden flex-none w-screen lg:w-[260px] h-screen lg:h-auto lg:flex flex-col transform -translate-x-full transition-transform duration-300 lg:translate-x-0 lg:relative p-5 md:p-7 lg:p-0">
    <div class="flex flex-col">
        <a href="{{ route("admin-home") }}" class="uppercase text-3xl font-bold text-black tracking-wide">
            Stimulus EEG
        </a>
        <span class="mt-2 font-poppins capitalize text-base font-light tracking-wide">admin page</span>
    </div>
    <div class="mt-10 md:mt-14 lg:mt-10 flex flex-col gap-5 md:gap-9 lg:gap-5 font-poppins">
        <a href="{{ route("admin-home") }}" class="flex flex-row gap-5 {{ Request::is('cms/dashboard') ? 'bg-gray-400/20' : '' }} hover:bg-gray-400/20 py-2 md:py-5 lg:py-2 pl-3 md:pl-5 items-center rounded-lg cursor-pointer">
            <h4 class="text-2xl md:text-4xl lg:text-xl">Dashboard</h4>
        </a>
        <a href="{{ route('inteligence-quotient-test.index') }}" class="flex flex-row gap-5 {{ Request::is('cms/inteligence-quotient-test') ? 'bg-gray-400/20' : '' }} hover:bg-gray-400/20 py-2 md:py-5 lg:py-2 pl-3 md:pl-5 items-center rounded-lg cursor-pointer">
            <h4 class="text-2xl md:text-4xl lg:text-xl">Inteligence Quotient Test</h4>
        </a>
        <a href="{{ route('personality-test.index') }}" class="flex flex-row gap-5 {{ Request::is('cms/personality-test') ? 'bg-gray-400/20' : '' }} hover:bg-gray-400/20 py-2 md:py-5 lg:py-2 pl-3 md:pl-5 items-center rounded-lg cursor-pointer">
            <h4 class="text-2xl md:text-4xl lg:text-xl">Personality Test</h4>
        </a>
        <a href="{{ route('participants-all') }}" class="flex flex-row gap-5 {{ Request::is('cms/participants') ? 'bg-gray-400/20' : '' }} hover:bg-gray-400/20 py-2 md:py-5 lg:py-2 pl-3 md:pl-5 items-center rounded-lg cursor-pointer">
            <h4 class="text-2xl md:text-4xl lg:text-xl">Participant</h4>
        </a>
        <a href="{{ route("admin-logout") }}" class="mt-10 flex flex-row gap-5 hover:bg-gray-400/20 py-2 md:py-5 lg:py-2 pl-3 md:pl-5 items-center rounded-lg cursor-pointer">
            <h4 class="text-2xl md:text-4xl lg:text-xl">Logout</h4>
        </a>
    </div>
</div>