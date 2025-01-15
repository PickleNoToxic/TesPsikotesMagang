@extends('public.layouts.main')

@section('container')
    <main class="mt-3 w-full flex justify-center items-center0">
        <section id="register-container" class="flex flex-col justify-center items-center h-fit w-full gap-5 mb-5">    
            <div class="flex justify-center w-full p-3 gap-5 ">
                <div class="w-2/5 flex flex-col h-fit bg-white rounded-2xl shadow-md">
                    <div class="px-5 py-7 mt-3 font-poppins text-lg text-center font-light flex flex-col items-center justify-center gap-1">
                        <h1 class="text-3xl font-bold mb-3">Intelligence Quotient & Personality Test</h1>
                        <p>
                        Tes ini dirancang untuk mengukur tingkat kecerdasan dan kepribadian Anda secara menyeluruh.
                        </p>
                        <p class="mt-5">
                            Berikut tahapan-tahapan yang akan Anda lalui :
                        </p>
                        <img src="/assets/images/flow.png" loading="eager" alt="flow" class="bg-white object-cover mb-5 px-16">
                        
                        <a href="{{ route('registration') }}" class="mt-5 px-7 py-2 w-fit flex justify-center items-center bg-gradient-to-b from-[#03045E] to-[#03558b] text-white text-xl uppercase tracking-wider rounded-xl cursor-pointer">
                            Start
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script>
        const counter = document.getElementById('counter');
        
        counter.classList.toggle('hidden');
    </script>
@endpush