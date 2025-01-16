@extends('public.layouts.main')

@section('container')
    <header class="w-full pt-10 flex flex-col gap-7 justify-center items-center font-poppins text-gray-800 relative">
        
    </header>
    <div class="flex flex-col justify-center items-center mt-5 ">
        <p class="text-3xl px-8 lg:text-4xl text-center font-light" id="title">
            Silahkan tekan tombol <span class="font-semibold"><br> START </span> <br> untuk memulai {{ request('title') }} Test.
        </p>
        <div 
            onClick="handleRedirect('{{ request('title') }}')" 
            class="px-6 lg:px-10 py-3 w-fit my-12 lg:my-16 bg-gradient-to-b from-[#03045E] to-[#03558b] text-white text-2xl uppercase tracking-wider rounded-xl cursor-pointer">
            Start
        </div>
    </div>
@endsection

@push('addon-script')
    @include('public.includes.resting-script')
@endpush
