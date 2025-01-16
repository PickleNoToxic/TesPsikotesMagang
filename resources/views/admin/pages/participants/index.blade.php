@extends('admin.layouts.main')

@push('addon-style')
    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/3.2.0/css/buttons.dataTables.css" rel="stylesheet">
@endpush

@section('container')
    {{-- content --}}
    <div class="flex-none flex flex-col justify-center md:justify-start px-0 lg:px-2 w-screen lg:w-[calc(100vw-350px)]">
        <!-- header -->
        <div class="w-full pl-3 pr-3 md:pl-7 md:pr-7 lg:pl-20 lg:pr-0 flex justify-between">
            <div class="font-poppins font-bold text-2xl md:text-3xl capitalize">Participants</div>
        </div>

        <!-- Section cards -->
        <div class="mt-10 pl-6 pr-6 md:pl-20 md:pr-20 font-poppins flex flex-col gap-5 max-h-[75vh] overflow-y-scroll custom-scrollbar" style="-ms-overflow-style: none; scrollbar-width: none;">
            @php
                use Carbon\Carbon;
            @endphp
            <table id="example" class="min-w-max w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Whatsapp</th>
                        <th class="py-3 px-6 text-left">Birthday</th>
                        <th class="py-3 px-6 text-left">Gender</th>
                        <th class="py-3 px-6 text-left">Address</th>
                        <th class="py-3 px-6 text-left">Position</th>
                        <th class="py-3 px-6 text-left">Score IQ Test</th>
                        <th class="py-3 px-6 text-left">Score Koleris</th>
                        <th class="py-3 px-6 text-left">Score Phlegmatis</th>
                        <th class="py-3 px-6 text-left">Score Sanguinis</th>
                        <th class="py-3 px-6 text-left">Score Melankolis</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @foreach ($datas as $data)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left">{{ $data->fullname }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->email }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->whatsapp }}</td>
                            <td class="py-3 px-6 text-left">{{ Carbon::parse($data->birthday)->format('d-m-Y') }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->gender }}</td>
                            <td class="py-3 px-6 text-left">{{ $data->address }}</td>
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

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                layout: {
                    topStart: {
                        buttons: ['csv', 'excel', 'print']
                    }
                }
            });
        });
    </script>
@endpush