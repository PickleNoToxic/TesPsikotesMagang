@extends('admin.layouts.main')

@section('container')
    <div class="flex-none flex flex-col justify-start px-2 w-[calc(100vw-350px)]">
        <!-- header -->
        <div class="w-full pl-3 pr-3 md:pl-7 md:pr-7 lg:pl-20 lg:pr-0 flex justify-between">
            <div class="text-black font-poppins font-bold text-2xl md:text-3xl capitalize">Dashboard</div>
        </div>
        
        <!-- Section cards -->
        <div class="mt-10 pl-6 pr-6 md:pl-20 md:pr-20 font-poppins text-white flex flex-col gap-5 max-h-[75vh] overflow-y-scroll custom-scrollbar" style="-ms-overflow-style: none; scrollbar-width: none;">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-auto font-poppins" >
                <a href="{{ route("inteligence-quotient-test.index") }}" class="min-h-[100px] md:min-h-[150px] w-full bg-black/50 hover:bg-black/30 rounded-2xl px-5 py-3 flex flex-wrap justify-start items-start gap-3">
                    <div class="font-poppins flex justify-start gap-5 items-center">
                        <h1 class="text-7xl md:text-5xl text-white font-extrabold">
                            {{ $inteligence_quotient_tests }}
                        </h1>
                        <h3 class="text-xl font-semibold">Active Inteligence Quotient Test</h3>
                    </div>
                    <div class="w-full flex flex-row justify-center items-center gap-3 font-poppins text-white">
                        <span>More Detail</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                    </div>
                </a>
                <a href="{{ route("personality-test.index") }}" class="min-h-[100px] md:min-h-[150px] w-full bg-black/50 hover:bg-black/30 rounded-2xl px-5 py-3 flex flex-wrap justify-start items-start gap-3">
                    <div class="font-poppins flex justify-start gap-5 items-center">
                        <h1 class="text-7xl md:text-5xl text-white font-extrabold">
                            {{ $personality_tests }}
                        </h1>
                        <h3 class="text-xl font-semibold">Active Personality Test</h3>
                    </div>
                    <div class="w-full flex flex-row justify-center items-center gap-3 font-poppins text-white">
                        <span>More Detail</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                    </div>
                </a>
                <a href="{{ route("participants-all") }}" class="min-h-[100px] md:min-h-[150px] w-full bg-black/50 hover:bg-black/30 rounded-2xl px-5 py-3 flex flex-wrap justify-start items-start gap-3">
                    <div class="font-poppins flex justify-start gap-5 items-center">
                        <h1 class="text-7xl md:text-5xl text-white font-extrabold">
                            {{ $participants }}
                        </h1>
                        <h3 class="text-xl font-semibold">Participants</h3>
                    </div>
                    <div class="w-full flex flex-row justify-center items-center gap-3 font-poppins text-white">
                        <span>More Detail</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M9 18l6-6-6-6"></path>
                        </svg>
                    </div>
                </a>
                
            </div>
        </div>
    </div>
@endsection