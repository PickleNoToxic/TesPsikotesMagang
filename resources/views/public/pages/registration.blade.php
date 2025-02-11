@extends('public.layouts.main')

@section('container')
    <main class="mt-3 w-full flex justify-center items-center0">
        <section id="register-container" class="flex flex-col justify-center items-center h-fit w-full gap-5 mb-5">
            <div class="flex justify-center w-full p-3 gap-5 ">
                <div class="hidden lg:block w-2/5 flex flex-col h-fit bg-white rounded-2xl shadow-md">
                    <div
                        class=" px-5 py-7 space-y-3 mt-3 font-poppins text-lg text-center font-light flex flex-col items-center justify-center gap-2">
                        <h1 class="text-3xl font-bold mb-3">Psychological Test</h1>
                        <div class="mx-10 space-y-4">
                            <p>
                                Selama proses tes, usahakan untuk fokus dan menjawab pertanyaan yang ada dengan baik demi hasil yang akurat.
                            </p>
                            <p>
                                Selamat mengikuti Psychological Test.
                            </p>
                        </div>
                    </div>

                </div>
                <div class="lg:w-2/5 flex flex-col bg-white rounded-2xl shadow-md">
                    <form id="registrasi-form" class="px-7 py-7 mt-3 font-poppins text-lg font-light flex flex-col gap-2">
                        @csrf
                        <h5 class="text-2xl text-center font-bold mb-7">Isi data diri Anda</h5>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Nama Lengkap
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nama Lengkap" id="fullname" name="fullname" required>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Email
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="email" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Tanggal Lahir
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="date" id="birthday" name="birthday" 
                                    required>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    No. WhatsApp
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="number" placeholder="Nomor WhatsApp" id="whatsapp_number" name="whatsapp_number"
                                    required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Jenis Kelamin
                                </label>
                                <div class="relative">
                                    <select
                                        class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 mr-5 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="gender" name="gender" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <span class="absolute bottom-2.5 right-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="flex flex-col mb-2.5 flex-auto w-1/2">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Alamat
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Alamat" id="address" name="address" required>
                            </div>
                        </div>
                        <div class="flex flex-row gap-5">
                            <div class="flex flex-col mb-2.5 flex-auto w-full">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Posisi Yang Dilamar
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded py-2 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Posisi" id="position" name="position" required>
                            </div>
                        </div>
                        <div class="mt-5 flex flex-row justify-center gap-5">
                            <button type="submit" id="submit-button"
                                class="bg-green-700 tracking-wider text-white text-base hover:bg-green-800 hover:text-gray-200 ease-in-out delay-300 px-5 py-2 rounded-md">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection


@push('addon-script')
    @include('public.includes.registration-script')
@endpush
