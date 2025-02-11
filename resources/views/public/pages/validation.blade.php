@extends('public.layouts.main')

@section('container')
    <main class="mt-3 w-full flex justify-center items-center bg-slate-100">
        <section class="quiz-start flex flex-col justify-center items-center h-fit w-full lg:w-1/2 gap-5 mb-5">    
            <div class="flex flex-col w-full p-3">
                <div class="flex flex-col bg-white rounded-xl drop-shadow-xl">
                    <div id="question" class=" font-semibold text-md  lg:text-xl bg-gradient-to-b from-[#222222] to-[#3e3e3e] text-white text-justify rounded-t-xl p-6">
                        Question 
                    </div>
                    <div class="p-2 mt-3 ml-3 font-poppins text-sm lg:text-lg font-light flex flex-col gap-2" id="answers-container">
                    </div>
                    <div class="p-2 text-lg font-normal mt-2 mb-3 flex flex-wrap items-center justify-center gap-2">
                        <div onclick="prevQuestion()" id="back-button" class="hidden px-5 py-2 flex justify-center items-center bg-gradient-to-b from-[#F53F2E] to-[#FF835C] text-white rounded-xl cursor-pointer">
                            Back
                        </div>
                        <div onclick="nextQuestion()" id="next-button" class="px-5 py-2 flex justify-center items-center bg-gradient-to-b from-[#03045E] to-[#03558b] text-white rounded-xl cursor-pointer">
                            Next
                        </div>
                        <div onclick="submitQuiz(this)" id="submit-button" class="hidden px-5 py-2 flex justify-center items-center bg-gradient-to-b from-[#007A43] to-[#08C644] text-white rounded-xl cursor-pointer">
                            Submit
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @if(session('swal'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: "{{ session('swal.title') }}",
                text: "{{ session('swal.text') }}",
                icon: "{{ session('swal.icon') }}",
                confirmButtonText: "OK"
            });
        });
    </script>
    @endif
@endsection

@push('addon-script')
    @include('public.includes.validation-script')
@endpush