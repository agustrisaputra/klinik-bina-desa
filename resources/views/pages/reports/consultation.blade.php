<x-app-layout>
    <x-slot name="style">
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </x-slot>

    <x-slot name="header_content">
        <h1>Konsultasi Tatap Muka</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Konsultasi Tatap Muka</div>
        </div>
    </x-slot>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Konsultasi Tatap Muka</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="konsultasi" width="100%">
                        <thead>
                            <tr>
                                <th width="50px" class="text-center">
                                    #
                                </th>
                                <th width="250px">Judul laporan</th>
                                {{-- <th width="250px">Isi Laporan</th> --}}
                                <th width="250px">Bidang</th>
                                <th width="250px">Tanggal Permintaan</th>
                                <th width="250px">Pelapor</th>
                                <th width="250px">Konfirmasi</th>
                                <th width="250px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                let table = $('#konsultasi').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('konsultasi') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'title', name: 'name'},
                        // {data: 'description', name: 'phone'},
                        {data: 'division.name', name: 'division'},
                        {data: 'date', name: 'date'},
                        {data: 'pelapor', name: 'pelapor'},
                        {data: 'confirmed', name: 'confirmed'},
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            })
        </script>
    </x-slot>
</x-app-layout>
