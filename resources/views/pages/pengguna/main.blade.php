<x-app-layout>
    <x-slot name="style">
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </x-slot>

    <x-slot name="header_content">
        <h1>Pengguna</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.pengguna') }}">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna</div>
        </div>
    </x-slot>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Pengguna</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="pengguna" width="100%">
                        <thead>
                            <tr>
                                <th width="50px" class="text-center">
                                    #
                                </th>
                                <th width="250px">Nama</th>
                                <th width="250px">No. telp</th>
                                <th width="250px">Email</th>
                                <th width="250px">Desa</th>
                                <th width="250px">Jabatan</th>
                                {{-- <th width="250px">Action</th> --}}
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
                let table = $('#pengguna').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.pengguna') }}",
                    columns: [
                        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                        {data: 'name', name: 'name'},
                        {data: 'phone', name: 'phone'},
                        {data: 'email', name: 'email'},
                        {data: 'village.name', name: 'village'},
                        {data: 'position.name', name: 'position'},
                        // {
                            // data: 'action',
                            // name: 'action',
                            // orderable: false,
                            // searchable: false
                        // },
                    ]
                });
            })
        </script>
    </x-slot>
</x-app-layout>
