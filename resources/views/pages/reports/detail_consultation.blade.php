<x-app-layout>
    <x-slot name="header_content">
        <h1>Konsultasi</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item active"><a href="{{ route('admin.konsultasi') }}">Konsultasi</a></div>
            <div class="breadcrumb-item">{{ $report->title }}</div>
        </div>
    </x-slot>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>{{ $report->title }}</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="company-name">Judul</label>
                    <input type="text" class="form-control" id="company-name" value="{{ $report->title }}" readonly>
                </div>
                <div class="form-group">
                    <label for="company-name">Isi laporan</label>
                    <textarea class="form-control" name="" id="" rows="6" style="overflow: hidden; overflow-wrap: break-word; height: 157px;" readonly>{{ $report->description }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="company-address">Bidang</label>
                    <input type="text" class="form-control" id="company-address" value="{{ $report->division->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="company-address">Tanggal Permintaan</label>
                    <input type="text" class="form-control" id="company-address" value="{{ $report->date }}" readonly>
                </div>
                <div class="form-group">
                    <label for="company-address">Pelapor</label>
                    <input type="text" class="form-control" id="company-address" value="{{ $report->pelapor }}" readonly>
                </div>
                @if (!$report->confirmed)
                    <div class="form-group float-right">
                        <form action="{{ route('admin.konfirmasi', $report->id) }}" method="POST">
                            @method('patch')
                            @csrf
                            <button type="submit" class="btn btn-save btn-info">Sudah Ditanggapi</button>
                        </form>
                    </div>
                @endif
                <div class="form-group float-right">
                    <button class="btn btn-save btn-primary" data-toggle="modal" data-target="#email_form" title="Tanggapi">Tanggapi Lewat Email</button>
                    <a class="btn btn-save btn-success" href="whatsapp://send?phone={{ $report->user->phone }}&text=">Tanggapi Lewat WhatsApp</a>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="modal">
        @include('pages.reports.send_email')
    </x-slot>
</x-app-layout>
