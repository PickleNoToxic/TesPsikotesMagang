@extends('admin.layouts.main')

@section('container')
    <!-- modal detail -->
    <div id="modal-detail" class="hidden w-screen h-screen bg-black/90 fixed top-0 left-0 z-50 font-poppins flex justify-center text-white ">
        <div class="w-full max-h-[100vh] overflow-y-scroll flex justify-center items-start py-10" style="-ms-overflow-style: none; scrollbar-width: none;">
            <form
                id="modal-detail-content"
                method="POST" 
                enctype="multipart/form-data"
                class="w-11/12 md:w-1/2 lg:w-4/12 bg-white/30 rounded-2xl py-5 px-5 md:px-10 flex flex-col justify-center gap-3 items-center"
            >
                @method('PUT')
                @csrf
                <h1 class="font-poppins font-semibold text-white text-3xl capitalize tracking-wider">detail event</h1>
                <div class="flex flex-col w-full gap-1 mt-10">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Name</span>
                    <div class="w-full h-9 rounded-full">
                        <input type="text"
                            required
                            id="detail-name"
                            name="name"
                            class="font-poppins text-sm bg-white text-black rounded-full w-full h-full px-5 placeholder:italic focus:outline-none focus:ring-0">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Status</span>
                    <div class="w-full h-9 rounded-full">
                        <select required
                            id="detail-status"
                            name="is_active"
                            class="font-poppins text-sm bg-white text-black rounded-full w-full h-full px-5 placeholder:italic focus:outline-none focus:ring-0">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end gap-4 w-full flex-row mt-14 mb-3">
                    <div onclick="toggleModalDetail()" class="px-7 py-2 text-white text-sm text-center font-poppins font-medium border border-white rounded-full cursor-pointer tracking-wider">
                        Close
                    </div>
                    <button type="submit" class="px-7 py-2 text-white text-sm text-center font-poppins font-medium bg-blue-500 rounded-full cursor-pointer tracking-wider">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal add -->
    <div id="modal-add" class="hidden w-screen h-screen bg-black/90 fixed top-0 left-0 z-50 font-poppins flex justify-center text-white">
        <div class="w-full max-h-[100vh] overflow-y-scroll flex justify-center items-start py-10" style="-ms-overflow-style: none; scrollbar-width: none;">
            <form id="modal-add-content"
                class="w-11/12 md:w-1/2 lg:w-4/12 bg-white/30 rounded-2xl py-5 px-5 md:px-10 flex flex-col justify-center gap-3 items-center"
                action="{{ route("events.store") }}"
                method="POST" 
            >
                @csrf
                <h1 class="font-poppins font-semibold text-white text-3xl capitalize tracking-wider">add new events</h1>
                <div class="flex flex-col w-full gap-1 mt-10">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Name</span>
                    <div class="w-full h-9 rounded-full">
                        <input type="text" name="name" required class="font-poppins text-sm bg-white text-black rounded-full w-full h-full px-5 placeholder:italic focus:outline-none focus:ring-0">
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Status</span>
                    <div class="w-full h-9 rounded-full">
                        <select
                            required
                            name="is_active"
                            class="font-poppins text-sm bg-white text-black rounded-full w-full h-full px-5 placeholder:italic focus:outline-none focus:ring-0">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end gap-4 w-full flex-row mt-14 mb-3">
                    <div onclick="toggleModalAdd()" class="px-7 py-2 text-white text-sm text-center font-poppins font-medium border border-white rounded-full cursor-pointer tracking-wider">
                        Close
                    </div>
                    <button type="submit" class="px-7 py-2 text-white text-sm text-center font-poppins font-medium bg-blue-400 rounded-full cursor-pointer tracking-wider">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- content --}}
    <div class="flex-none flex flex-col justify-center md:justify-start px-0 lg:px-2 w-screen lg:w-[calc(100vw-350px)]">
        <!-- header -->
        <div class="w-full pl-3 pr-3 md:pl-7 md:pr-7 lg:pl-20 lg:pr-0 flex justify-between">
            <div class="font-poppins font-bold text-2xl md:text-3xl capitalize">Events</div>
            <div onclick="toggleModalAdd()" class="px-5 md:px-7 py-2 text-white text-sm font-poppins font-medium bg-blue-400 rounded-full cursor-pointer flex flex-row justify-center items-center gap-3">
                <span>Add Data</span>
            </div>
        </div>

        <!-- Section cards -->
        <div class="mt-10 pl-6 pr-6 md:pl-20 md:pr-20 font-poppins flex flex-col gap-5 max-h-[75vh] overflow-y-scroll custom-scrollbar" style="-ms-overflow-style: none; scrollbar-width: none;">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-auto font-poppins" >
                @foreach ($datas as $data)
                    <div class="h-[100px] w-full bg-white/80 hover:bg-white rounded-2xl p-5 flex justify-start gap-5 items-center">
                        <div class="flex-1 w-full flex flex-col justify-center items-center gap-2">
                            <div class="flex flex-row gap-2 items-center">
                                <h3 class="text-base font-semibold">{{ $data->name }}</h3>
                            </div>
                            <div class="flex flex-row gap-3">
                                @if ($data->is_active)
                                    <form
                                        method="POST" action="{{ route('event-inactive') }}"
                                        class="text-greenPrimary text-xs font-poppins font-light flex flex-row gap-2 text-white bg-green-500 px-7 py-1 rounded-full justify-center items-center cursor-pointer"
                                        onclick="this.submit()"
                                    >
                                        @csrf
                                        <span>Active</span>
                                        <input type="hidden" name="inactiveId" id="inactiveId" value="{{ $data->id }}">
                                    </form>
                                @else
                                    <form
                                        method="POST" action="{{ route('event-active') }}"
                                        class="text-grayPrimary text-xs font-poppins font-light text-white bg-red-500 px-7 py-1 rounded-full flex flex-row gap-2 justify-center items-center cursor-pointer"
                                        onclick="this.submit()"
                                    >
                                        @csrf
                                        <span>Inactive</span>
                                        <input type="hidden" name="activeId" id="activeId" value="{{ $data->id }}">
                                    </form>
                                @endif
                                <div onclick="showModalDetail({{ $data }})" class="px-4 md:px-7 py-1 text-xs font-poppins font-light border border-blue-400 rounded-full cursor-pointer">
                                    Detail
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


@push('addon-script')
    <script>
        const modalAdd = document.querySelector('#modal-add');
        const modalAddContent = document.querySelector('#modal-add-content');
        const toggleModalAdd = () => {
            modalAdd.classList.toggle('hidden');
        }
        modalAdd.addEventListener('click', (e) => {
            if(!modalAddContent.contains(e.target)){
                toggleModalAdd();
            }
        })

        const modalDetail = document.querySelector('#modal-detail');
        const modalDetailContent = document.querySelector('#modal-detail-content');
        const toggleModalDetail = () => {
            modalDetail.classList.toggle('hidden');
        }
        modalDetail.addEventListener('click', (e) => {
            if(!modalDetailContent.contains(e.target)){
                toggleModalDetail();
            }
        })

        const showModalDetail = (data) => {
            const form = document.getElementById('modal-detail-content');
            form.action = `{{ route('events.update', ':id') }}`.replace(':id', data.id);

            document.querySelector('#detail-name').value = data.name;
            document.querySelector('#detail-status').value = data.is_active ? 1 : 0;

            // Show modal
            modalDetail.classList.remove('hidden');
        };
    </script>
@endpush