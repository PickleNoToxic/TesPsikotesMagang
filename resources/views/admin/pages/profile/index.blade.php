@extends('admin.layouts.main')


@section('container')
    {{-- content --}}
    <div class="flex-none flex flex-col justify-center md:justify-start px-0 lg:px-2 w-screen lg:w-[calc(100vw-350px)]">
        <!-- header -->
        <div class="w-full pl-3 pr-3 md:pl-7 md:pr-7 lg:pl-20 lg:pr-0 flex justify-between">
            <div class="font-poppins font-bold text-2xl md:text-3xl capitalize">Profile</div>
        </div>

        <!-- Section cards -->
        <div class="mt-10 pl-6 pr-6 md:pl-20 md:pr-20 font-poppins flex justify-center py-5 overflow-y-scroll custom-scrollbar"
            style="-ms-overflow-style: none; scrollbar-width: none;">
            <div
                class="h-fit w-[60%] bg-white drop-shadow-md rounded-lg px-8 py-12 flex flex-col items-center justify-between ">
                <div class="space-y-4 flex flex-col items-center">
                    <img class="h-24 w-24" src="{{ asset('assets/images/profile.png') }}" alt="">
                    <p class="font-semibold text-2xl">Change Password</p>
                    <hr class="w-full border-[1.5px] border-gray-400 ">
                </div>
                <form action="{{ route('profile-update') }}" class="flex-grow w-full space-y-6" method="POST">
                    @csrf
                    <div class="flex flex-col gap-1">
                        <label htmlFor='email' class="text-xs md:text-sm font-light italic px-3">Email</label>
                        <div
                            class="h-10 border border-gray-400 rounded-3xl w-full flex flex-row justify-between items-center">
                            <input
                                class="h-full w-full text-xs md:text-sm bg-gray-200 rounded-3xl px-3 focus:outline-none focus:ring-0"
                                value="{{ $email }}" readonly="true" />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label htmlFor='old_password' class="text-xs md:text-sm font-light italic px-3">Old Password</label>
                        <div
                            class="h-10 border border-gray-400 rounded-3xl w-full flex flex-row justify-between items-center">
                            <input
                                class="h-full w-full text-xs md:text-sm bg-gray-100 rounded-3xl px-3 focus:outline-none focus:ring-0"
                                type='password' name="old_password" required />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label htmlFor='new_password' class="text-xs md:text-sm font-light italic px-3">New Password</label>
                        <div
                            class="h-10 border border-gray-400 rounded-3xl w-full flex flex-row justify-between items-center">
                            <input
                                class="h-full w-full text-xs md:text-sm bg-gray-100 rounded-3xl px-3 focus:outline-none focus:ring-0"
                                type='password' name="new_password" required />
                        </div>
                    </div>
                    <div class="flex flex-col gap-1">
                        <label htmlFor='confirm_password' class="text-xs md:text-sm font-light italic px-3">Confirm
                            Password</label>
                        <div
                            class="h-10 border border-gray-400 rounded-3xl w-full flex flex-row justify-between items-center">
                            <input
                                class="h-full w-full text-xs md:text-sm bg-gray-100 rounded-3xl px-3 focus:outline-none focus:ring-0"
                                type='password' name="confirm_password" required />
                        </div>
                    </div>
                    <button class="w-full bg-gray-400 rounded-3xl py-2 text-black hover:bg-gray-500">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection