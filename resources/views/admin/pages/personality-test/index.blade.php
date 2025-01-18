@extends('admin.layouts.main')

@section('container')
    <!-- modal detail -->
    <div id="modal-detail"
        class="hidden w-screen h-screen bg-black/90 fixed top-0 left-0 z-50 font-poppins flex justify-center text-white overflow-y-auto">
        <div class="w-full max-h-[100vh] overflow-y-scroll flex justify-center items-start py-10"
            style="-ms-overflow-style: none; scrollbar-width: none;">
            <form id="modal-detail-content" method="POST" enctype="multipart/form-data"
                class="w-11/12 md:w-1/2 lg:w-4/12 bg-white/30 rounded-2xl py-5 px-5 md:px-10 flex flex-col justify-center gap-3 items-center">
                @method('PUT')
                @csrf
                <h1 class="font-poppins font-semibold text-white text-3xl capitalize tracking-wider" id="detail-title">detail
                    Statement </h1>

                <div class="flex flex-col w-full gap-2 mb-3 mt-10">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 1</span>
                    <div class="w-full">
                        <textarea required id="detail-option-1" name="option_1"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                            rows="1"></textarea>
                    </div>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 1</span>
                    <select id="detail-category-option-1" name="category_option_1" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 1</span>
                    <input name="statement_1" required id="detail_statement_1"
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>

                <div class="flex flex-col w-full gap-2 mb-3">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 2</span>
                    <div class="w-full">
                        <textarea required id="detail-option-2" name="option_2"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                            rows="1"></textarea>
                    </div>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 2</span>
                    <select id="detail-category-option-2" name="category_option_2" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 2</span>
                    <input name="statement_2" required id="detail_statement_2"
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>

                <div class="flex flex-col w-full gap-2 mb-3">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 3</span>
                    <div class="w-full">
                        <textarea required id="detail-option-3" name="option_3"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                            rows="1"></textarea>
                    </div>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 3</span>
                    <select id="detail-category-option-3" name="category_option_3" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 3</span>
                    <input name="statement_3" required id="detail_statement_3"
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>

                <div class="flex flex-col w-full gap-2 mb-3">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 4</span>
                    <div class="w-full">
                        <textarea required id="detail-option-4" name="option_4"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                            rows="1"></textarea>
                    </div>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 4</span>
                    <select id="detail-category-option-4" name="category_option_4" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 4</span>
                    <input name="statement_4" required id="detail_statement_4"
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>
                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Status</span>
                    <div class="w-full h-9 rounded-xl">
                        <select required id="detail-status" name="is_active"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full h-full px-5 placeholder:italic focus:outline-none focus:ring-0">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end gap-4 w-full flex-row mt-14 mb-3">
                    <div onclick="toggleModalDetail()"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium border border-white rounded-xl cursor-pointer tracking-wider">
                        Close
                    </div>
                    <button type="submit"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium bg-blue-500 rounded-xl cursor-pointer tracking-wider">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal add -->
    <div id="modal-add"
        class="hidden w-screen h-screen bg-black/90 fixed top-0 left-0 z-50 font-poppins flex justify-center text-white overflow-y-auto">
        <div class="w-full max-h-[100vh] overflow-y-scroll flex justify-center items-start py-10"
            style="-ms-overflow-style: none; scrollbar-width: none;">
            <form id="modal-add-content"
                class="w-11/12 md:w-1/2 lg:w-4/12 bg-white/30 rounded-2xl py-5 px-5 md:px-10 flex flex-col justify-center gap-3 items-center"
                action="{{ route('personality-test.store') }}" method="POST">
                @csrf
                <h1 class="font-poppins font-semibold text-white text-3xl capitalize tracking-wider">add new Statement</h1>

                <div class="flex flex-col w-full gap-2 mt-10 mb-3">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 1</span>
                    <textarea name="option_1" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                        rows="1"></textarea>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 1</span>
                    <select name="category_option_1" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 1</span>
                    <input name="statement_1" required
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>

                <div class="flex flex-col w-full gap-2 mb-3">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 2</span>
                    <div class="w-full">
                        <textarea name="option_2" required
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                            rows="1"></textarea>
                    </div>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 2</span>
                    <select name="category_option_2" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 2</span>
                    <input name="statement_2" required
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>

                <div class="flex flex-col w-full gap-2 mb-3">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 3</span>
                    <div class="w-full">
                        <textarea name="option_3" required
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                            rows="1"></textarea>
                    </div>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 3</span>
                    <select name="category_option_3" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 3</span>
                    <input name="statement_3" required
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>

                <div class="flex flex-col w-full gap-2 mb-3">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Option 4</span>
                    <div class="w-full">
                        <textarea name="option_4" required
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 min-h-[100px] resize-none"
                            rows="1"></textarea>
                    </div>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Category Option 4</span>
                    <select name="category_option_4" required
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                        <option value="Koleris">Koleris</option>
                        <option value="Phlegmatis">Phlegmatis</option>
                        <option value="Sanguinis">Sanguinis</option>
                        <option value="Melankolis">Melankolis</option>
                    </select>
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Attribute 4</span>
                    <input name="statement_4" required
                        type="text"
                        class="font-poppins text-sm bg-white text-black rounded-xl w-full h-10 px-5 placeholder:italic focus:outline-none focus:ring-0">
                </div>

                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Status</span>
                    <div class="w-full h-9 rounded-xl">
                        <select required name="is_active"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full h-full px-5 placeholder:italic focus:outline-none focus:ring-0">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end gap-4 w-full flex-row mt-14 mb-3">
                    <div onclick="toggleModalAdd()"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium border border-white rounded-xl cursor-pointer tracking-wider">
                        Close
                    </div>
                    <button type="submit"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium bg-blue-400 rounded-xl cursor-pointer tracking-wider">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- modal change master web -->
    <div id="modal-edit-master-web"
        class="hidden w-screen h-screen bg-black/90 fixed top-0 left-0 z-50 font-poppins flex justify-center text-white overflow-y-auto">
        <div class="w-full max-h-[100vh] overflow-y-scroll flex justify-center items-start py-10"
            style="-ms-overflow-style: none; scrollbar-width: none;">
            <form id="modal-detail-master-web" method="POST" action="{{ route('master-web.updatePersonalityTest') }}"
                enctype="multipart/form-data"
                class="w-11/12 md:w-1/2 lg:w-4/12 bg-white/30 rounded-2xl py-5 px-5 md:px-10 flex flex-col justify-center gap-3 items-center">
                @method('PUT')
                @csrf
                <h1 class="font-poppins font-semibold text-white text-3xl capitalize tracking-wider text-center" id="detail-title">
                    Personality Test's Configuration </h1>
                <div class="flex flex-col w-full gap-1 mt-10">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Number of Statements</span>
                    <div class="w-full h-9 rounded-xl">
                        <input type="number"
                            min="1"
                            required
                            id="detail-number-of-questions"
                            value={{ $master_web_data->number_of_questions_personality_test }}
                            name="number_of_questions_personality_test"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full h-full px-5 placeholder:italic focus:outline-none focus:ring-0">
                    </div>
                </div>
                <div class="flex justify-end gap-4 w-full flex-row mt-14 mb-3">
                    <div onclick="toggleModalChangeMasterWeb()"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium border border-white rounded-xl cursor-pointer tracking-wider">
                        Close
                    </div>
                    <button type="submit"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium bg-blue-500 rounded-xl cursor-pointer tracking-wider">
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
            <div class="font-poppins font-bold text-2xl md:text-3xl capitalize">Personality Test Statements</div>
            <div class="flex flex-row gap-2">
                <div onclick="toggleModalAdd()"
                    class="px-5 md:px-7 py-2 text-white text-sm font-poppins font-medium bg-blue-400 rounded-xl cursor-pointer flex flex-row justify-center items-center gap-3">
                    <span>Add Data</span>
                </div>
                <div onclick="toggleModalChangeMasterWeb()"
                    class="px-5 md:px-7 py-2 text-white text-sm font-poppins font-medium bg-gray-400 rounded-xl cursor-pointer flex flex-row justify-center items-center gap-3">
                    <span>Change</span>
                </div>
            </div>
        </div>

        <div class="w-auto pl-6 pr-6 md:pl-20 md:pr-20 flex flex-col mb-5 mt-3">
            <p class="font-poppins text-lg md:text-xl capitalize">Number of Statements per Test:
                <b>{{ $master_web_data->number_of_questions_personality_test }}</b> Statements</p>
        </div>

        <!-- Section cards -->
        <div class="mt-10 pl-6 pr-6 md:pl-20 md:pr-20 font-poppins flex flex-col gap-5 max-h-[75vh] overflow-y-scroll custom-scrollbar"
            style="-ms-overflow-style: none; scrollbar-width: none;">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-auto font-poppins">
                @foreach ($datas as $data)
                    <div
                        class="h-[100px] w-full bg-white/80 hover:bg-white rounded-2xl p-5 flex justify-start gap-5 items-center">
                        <div class="flex-1 w-full flex flex-col justify-center items-center gap-2">
                            <div class="flex flex-row gap-2 items-center">
                                <h3 class="text-base font-semibold">Statement {{ $data->id }}</h3>
                            </div>
                            <div class="flex flex-row gap-3">
                                @if ($data->is_active)
                                    <form method="POST" action="{{ route('personality-test-inactive') }}"
                                        class="text-greenPrimary text-xs font-poppins font-light flex flex-row gap-2 text-white bg-green-500 px-7 py-1 rounded-xl justify-center items-center cursor-pointer"
                                        onclick="this.submit()">
                                        @csrf
                                        <span>Active</span>
                                        <input type="hidden" name="inactiveId" id="inactiveId"
                                            value="{{ $data->id }}">
                                    </form>
                                @else
                                    <form method="POST" action="{{ route('personality-test-active') }}"
                                        class="text-grayPrimary text-xs font-poppins font-light text-white bg-red-500 px-7 py-1 rounded-xl flex flex-row gap-2 justify-center items-center cursor-pointer"
                                        onclick="this.submit()">
                                        @csrf
                                        <span>Inactive</span>
                                        <input type="hidden" name="activeId" id="activeId"
                                            value="{{ $data->id }}">
                                    </form>
                                @endif
                                <div onclick="showModalDetail({{ $data }})"
                                    class="px-4 md:px-7 py-1 text-xs font-poppins font-light border border-blue-400 rounded-xl cursor-pointer">
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
            if (!modalAddContent.contains(e.target)) {
                toggleModalAdd();
            }
        })

        document.addEventListener('DOMContentLoaded', function() {
            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(textarea => {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px';
                });
            });
        });

        const modalDetail = document.querySelector('#modal-detail');
        const modalDetailContent = document.querySelector('#modal-detail-content');
        const toggleModalDetail = () => {
            modalDetail.classList.toggle('hidden');
        }
        modalDetail.addEventListener('click', (e) => {
            if (!modalDetailContent.contains(e.target)) {
                toggleModalDetail();
            }
        })

        const showModalDetail = (data) => {
            const form = document.getElementById('modal-detail-content');
            form.action = `{{ route('personality-test.update', ':id') }}`.replace(':id', data.id);

            document.querySelector('#detail-title').innerText = 'Detail Question ' + data.id;
            document.querySelector('#detail-option-1').value = data.option_1;
            document.querySelector('#detail-option-2').value = data.option_2;
            document.querySelector('#detail-option-3').value = data.option_3;
            document.querySelector('#detail-option-4').value = data.option_4;
            document.querySelector('#detail-category-option-1').value = data.category_option_1;
            document.querySelector('#detail-category-option-2').value = data.category_option_2;
            document.querySelector('#detail-category-option-3').value = data.category_option_3;
            document.querySelector('#detail-category-option-4').value = data.category_option_4;
            document.querySelector('#detail_statement_1').value = data.statement_1;
            document.querySelector('#detail_statement_2').value = data.statement_2;
            document.querySelector('#detail_statement_3').value = data.statement_3;
            document.querySelector('#detail_statement_4').value = data.statement_4;
            document.querySelector('#detail-status').value = data.is_active ? 1 : 0;

            // Show modal
            modalDetail.classList.remove('hidden');
        };

        const modalChangeMasterWeb = document.querySelector('#modal-edit-master-web');
        const modalChangeMasterWebContent = document.querySelector('#modal-detail-master-web');
        const toggleModalChangeMasterWeb = () => {
            modalChangeMasterWeb.classList.toggle('hidden');
        }
        modalChangeMasterWeb.addEventListener('click', (e) => {
            if (!modalChangeMasterWebContent.contains(e.target)) {
                toggleModalChangeMasterWeb();
            }
        })

        const showModalChangeMasterWeb = () => {
            const form = document.getElementById('modal-detail-master-web');

            // Show modal
            modalChangeMasterWeb.classList.remove('hidden');
        };
    </script>
@endpush
