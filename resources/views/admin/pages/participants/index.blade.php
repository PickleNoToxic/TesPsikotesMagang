@extends('admin.layouts.main')

@push('addon-style')
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css" rel="stylesheet">
@endpush

@section('container')
    <!-- modal detail -->
    <div id="modal-detail"
        class="hidden w-screen h-screen bg-black/90 fixed top-0 left-0 z-50 font-poppins flex justify-center text-white overflow-y-auto">
        <div class="w-full  flex justify-center items-start py-10" style="-ms-overflow-style: none; scrollbar-width: none;">
            <div id="modal-detail-content"
                class="w-11/12 md:w-1/2 lg:w-4/12 bg-white/50 rounded-2xl py-5 px-5 md:px-10 flex flex-col justify-center gap-3 items-center">
                <h1 class="font-poppins font-semibold text-white text-3xl capitalize tracking-wider" id="detail-title">
                    Detail</h1>
                <div class="flex justify-end gap-4 w-full flex-row">
                    <div
                        id="btn-delete"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium border border-white rounded-xl cursor-pointer tracking-wider">
                        Delete
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1 mt-10">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Email</span>
                    <div class="w-full">
                        <input type="text" readonly name="email" id="email"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1 ">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Whatsapp</span>
                    <div class="w-full">
                        <input type="text" readonly id="whatsapp" name="whatsapp"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1 ">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Birthday</span>
                    <div class="w-full">
                        <input type="text" readonly id="birthday" name="birthday"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1 ">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Gender</span>
                    <div class="w-full">
                        <input type="text" readonly id="gender" name="gender"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1 ">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Address</span>
                    <div class="w-full">
                        <textarea required id="address" name="address"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full h-[80px] px-5 py-2 placeholder:italic focus:outline-none focus:ring-0"
                            rows="1"></textarea>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1 ">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Position</span>
                    <div class="w-full">
                        <input type="text" readonly id="position" name="position"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1 mt-10">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Score IQ Test</span>
                    <div class="w-full">
                        <input type="input" readonly id="iq" name="iq"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 resize-none"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Koleris</span>
                    <div class="w-full">
                        <input type="input" readonly id="koleris" name="koleris"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 resize-none"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Phlegmatis</span>
                    <div class="w-full">
                        <input type="input" readonly id="phlegmatis" name="phlegmatis"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 resize-none"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Sanguinis</span>
                    <div class="w-full">
                        <input type="input" readonly id="sanguinis" name="sanguinis"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 resize-none"
                            rows="1"></input>
                    </div>
                </div>
                <div class="flex flex-col w-full gap-1">
                    <span class="ml-3 text-white text-base font-poppins tracking-wide">Melankolis</span>
                    <div class="w-full">
                        <input type="input" readonly id="melankolis" name="melankolis"
                            class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 resize-none"
                            rows="1"></input>
                    </div>
                </div>

                <div id="detail-answers-container" class="flex flex-col w-full gap-1 mt-10">
                </div>

                <div class="flex justify-end gap-4 w-full flex-row mt-14 mb-3">
                    <div onclick="toggleModalDetail()"
                        class="px-7 py-2 text-white text-sm text-center font-poppins font-medium border border-white rounded-xl cursor-pointer tracking-wider">
                        Close
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- content --}}
    <div class="flex-none flex flex-col justify-center md:justify-start px-0 lg:px-2 w-screen lg:w-[calc(100vw-350px)]">
        <!-- header -->
        <div class="w-full pl-3 pr-3 md:pl-7 md:pr-7 lg:pl-20 lg:pr-0 flex justify-between">
            <div class="font-poppins font-bold text-2xl md:text-3xl capitalize">Participants</div>
        </div>

        <!-- Section cards -->
        <div class="mt-10 pl-6 pr-6 md:pl-20 md:pr-20 font-poppins flex flex-col gap-5 max-h-[75vh] overflow-y-scroll custom-scrollbar"
            style="-ms-overflow-style: none; scrollbar-width: none;">
            @php
                use Carbon\Carbon;
            @endphp
            <table id="example" class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        {{-- <th class="py-3 px-6 text-left">Email</th> --}}
                        <th class="py-3 px-6 text-left">Whatsapp</th>
                        {{-- <th class="py-3 px-6 text-left">Birthday</th> --}}
                        <th class="py-3 px-6 text-left">Gender</th>
                        {{-- <th class="py-3 px-6 text-left">Address</th> --}}
                        <th class="py-3 px-6 text-left">Position</th>
                        <th class="py-3 px-6 text-left">IQ Test</th>
                        <th class="py-3 px-6 text-left">Koleris (%)</th>
                        <th class="py-3 px-6 text-left">Phlegmatis (%)</th>
                        <th class="py-3 px-6 text-left">Sanguinis (%)</th>
                        <th class="py-3 px-6 text-left">Melankolis (%)</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($datas as $data)
                        <tr class="border-b border-gray-200 hover:bg-gray-100 cursor-pointer"
                            onclick="showModalDetail({{ $data }})">
                            <td class="py-3 px-6 text-left">{{ $data->id - 1 }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->fullname }}</td>
                            {{-- <td class="py-3 px-6 text-left">{{ $data->email }}</td> --}}
                            <td class="py-3 px-6 text-left">{{ $data->whatsapp }}</td>
                            {{-- <td class="py-3 px-6 text-left">{{ Carbon::parse($data->birthday)->format('d-m-Y') }}</td> --}}
                            <td class="py-3 px-6 text-left">{{ $data->gender }}</td>
                            {{-- <td class="py-3 px-6 text-left">{{ $data->address }}</td> --}}
                            <td class="py-3 px-6 text-left">{{ $data->position }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->score_iq }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->score_koleris }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->score_phlegmatis }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->score_sanguinis }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->score_melankolis }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.2.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['csv', 'excel', 'print']
                    }
                },
                order: [[0, 'desc']]
            });
        });

        const formatDate = (dateString) => {
            const [year, month, day] = dateString.split('-');
            return `${day}-${month}-${year}`;
        };

        const modalDetail = document.querySelector('#modal-detail');
        const modalDetailContent = document.querySelector('#modal-detail-content');
        const container = document.getElementById('detail-answers-container');

        const toggleModalDetail = () => {
            modalDetail.classList.toggle('hidden');
        }
        modalDetail.addEventListener('click', (e) => {
            if (!modalDetailContent.contains(e.target)) {
                toggleModalDetail();
            }
        })

        const showModalDetail = (data) => {
            container.innerHTML = '';
            const form = document.getElementById('modal-detail-content');
            let birthday = formatDate(data.birthday);

            document.getElementById("btn-delete").setAttribute("data-id", data.id);

            document.querySelector('#detail-title').innerText = data.fullname;
            document.querySelector('#email').value = data.email;
            document.querySelector('#whatsapp').value = data.whatsapp;
            document.querySelector('#birthday').value = birthday;
            document.querySelector('#gender').value = data.gender;
            document.querySelector('#address').value = data.address;
            document.querySelector('#position').value = data.position;

            document.querySelector('#iq').value = data.score_iq;
            document.querySelector('#koleris').value = data.score_koleris + '%';
            document.querySelector('#melankolis').value = data.score_melankolis + '%';
            document.querySelector('#sanguinis').value = data.score_sanguinis + '%';
            document.querySelector('#phlegmatis').value = data.score_phlegmatis + '%';

            data.detail_personality_test.forEach((answer, index) => {
                const div = document.createElement('div');
                div.className = 'flex flex-col w-full gap-1 mt-3';

                div.innerHTML = `
                        <span class="ml-3 text-white text-base font-poppins tracking-wide">Personality ${index + 1}</span>
                        <div class="w-full flex flex-col gap-2">
                            <textarea id="detail-option-${index + 1}" name="option_${index + 1}"
                                class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0 h-[100px]"
                                rows="1">${answer.option}</textarea>
                            <input type="text" readonly id="detail-answer-${index + 1}" name="answer_${index + 1}"
                                value="${answer.answer} - ${answer.statement}"
                                class="font-poppins text-sm bg-white text-black rounded-xl w-full px-5 py-2 placeholder:italic focus:outline-none focus:ring-0">
                        </div>
                    `;

                container.appendChild(div);
            });

            modalDetail.classList.remove('hidden');
        };
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            document.getElementById("btn-delete").addEventListener("click", function () {
                let dataId = this.getAttribute("data-id");

                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(`/cms/participants/${dataId}`, {
                            method: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": csrfToken,
                                "Content-Type": "application/json"
                            }
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    Swal.fire("Deleted!", "Data berhasil dihapus.", "success").then(() => {
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire("Error!", "Terjadi kesalahan saat menghapus data.", "error");
                                }
                            })
                            .catch(error => {
                                Swal.fire("Error!", "Gagal menghapus data.", "error");
                            });
                    }
                });
            });
        });
    </script>
@endpush