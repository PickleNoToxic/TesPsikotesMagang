@extends('public.layouts.main')

@section('container')
    <main class="mt-3 w-full flex justify-center items-center bg-slate-100">
        <section class="quiz-start flex flex-col justify-center items-center h-fit lg:w-1/2 gap-5 mb-5">
            <div class="flex flex-col w-full p-3">
                <div class="flex flex-col bg-white rounded-xl drop-shadow-xl">
                    <div
                        class="font-semibold text-2xl bg-gradient-to-b from-indigo-800 to-violet-600 text-white text-center rounded-t-xl p-5">
                        Congratulation, You've Finished the Test
                    </div>

                    <div class="flex flex-col lg:flex-row px-4 mt-4 space-y-4 lg:space-y-0 lg:space-x-4 justify-center ">
                        {{-- Inteligent Quotient Score --}}
                        <div
                            class="flex flex-col  flex-1 rounded-md lg:w-1/5 text-center items-center bg-gradient-to-t from-indigo-700 to-violet-500  p-4 shadow-lg">
                            <p class=" text-sm text-violet-300 font-bold">Inteligent Quotient</p>
                            <div
                                class=" flex flex-1 my-8 items-center justify-center font-bold ">
                                <div class="flex flex-col rounded-full bg-gradient-to-t from-indigo-800 to-violet-600 w-40 h-40 items-center justify-center">
                                    <p class="text-6xl text-white">{{ $score }}</p>
                                    <p class="text-violet-300 ">of {{ $maxScore }}</p>
                                </div>
                            </div>
                        </div>

                        {{-- Personality Score --}}
                        <div
                            class="flex flex-col space-y-4 flex-1 rounded-md lg:w-1/5 text-center items-center bg-gradient-to-t from-indigo-700 to-violet-500  p-4 shadow-lg">
                            <p class=" text-sm text-violet-300 font-bold">Personality</p>
                            <div
                                class="flex flex-col items-center rounded-full bg-gradient-to-t from-indigo-800 to-violet-600 w-20 h-20 flex items-center justify-center font-bold shadow-inner">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-12 h-12">
                                    <path fill="#ffffff"
                                        d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z" />
                                </svg>
                            </div>
                            <div
                                class="rounded-md shadow-lg w-full bg-red-200 px-2 py-2 text-red-500 text-sm flex justify-between font-bold">
                                Koleris<span>{{ $score_koleris }} %</span></div>
                            <div
                                class="rounded-md shadow-lg w-full bg-yellow-200 px-2 py-2 text-yellow-500 text-sm flex justify-between font-bold">
                                Melankolis<span>{{ $score_melankolis }} %</span></div>
                            <divz
                                class="rounded-md shadow-lg w-full bg-green-200 px-2 py-2 text-green-500 text-sm flex justify-between font-bold">
                                Phlegmatis<span>{{ $score_phlegmatis }} %</span></divz>
                            <div
                                class="rounded-md shadow-lg w-full bg-indigo-200 px-2 py-2 text-indigo-500 text-sm flex justify-between font-bold">
                                Sanguinis<span>{{ $score_sanguinis }} %</span></div>

                        </div>

                    </div>




                    <div class="p-2 text-lg font-normal mt-2 mb-3 flex flex-wrap items-center justify-center gap-2">
                        <span onclick="clearAll()"
                            class="px-5 py-2 flex justify-center items-center bg-gradient-to-b from-[#03045E] to-[#03558b] text-white rounded-xl cursor-pointer">
                            Exit
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('addon-script')
    <script>
        const counterHeader = document.getElementById('counter');
        counterHeader.classList.toggle('hidden');

        const clearAll = () => {
            localStorage.clear();
            window.location.href = "{{ route('home') }}";
        }

        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 10000);
    </script>
@endpush
