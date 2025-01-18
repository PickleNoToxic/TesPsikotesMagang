@extends('admin.layouts.auth')

@section('container')
    <main class="mt-14 w-full flex justify-center items-center0">
        <section id="register-container" class="flex flex-col justify-center items-center h-fit w-full gap-5 mb-5">    
            <div class="flex justify-center w-full p-3 gap-5 ">
                <div class="w-2/5 flex flex-col h-fit bg-white rounded-2xl shadow-md">
                    <div class="px-5 py-7 mt-3 font-poppins text-lg text-center font-light flex flex-col items-center justify-center gap-1">
                        <h1 class="text-3xl font-bold mb-3">Admin Zone</h1>
                        <p>
                            Halaman hanya untuk admin dari Psychological Test
                        </p>
                        <form class="mt-5 w-full flex flex-col px-20 gap-2" method="POST" action="{{ route('admin-authenticate') }}">
                            @csrf
                            <div class="flex flex-col mb-2.5">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1 tes">
                                    Email
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded-lg py-2.5 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="email" placeholder="address@mail.com" id="email" name="email" required>
                            </div>
                            <div class="flex flex-col mb-2.5">
                                <label class="tracking-wide text-gray-700 text-base font-medium mb-1">
                                    Password
                                </label>
                                <input class="appearance-none block w-full bg-gray-100 text-gray-700 text-sm border border-gray-200 rounded-lg py-2.5 px-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="password" id="password" name="password" required>
                            </div>
                            <button type="submit" class="self-center mt-5 px-7 py-2 w-fit flex justify-center items-center bg-gradient-to-b from-[#03045E] to-[#03558b] text-white text-xl uppercase tracking-wider rounded-xl cursor-pointer">
                                LOGIN
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection