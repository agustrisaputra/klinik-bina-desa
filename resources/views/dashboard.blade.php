<x-app-layout>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-users-cog"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pengguna</h4>
                    </div>
                    <div class="card-body">
                        {{ $users }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                <i class="fas fa-bullhorn"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Pengaduan Masalah</h4>
                    </div>
                    <div class="card-body">
                        {{ $reportCount }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                <i class="fas fa-broadcast-tower"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Konsultasi</h4>
                    </div>
                    <div class="card-body">
                        {{ $consultationCount }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Laporan Terbaru</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-pills nav-fill" id="myTab3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active show" id="customer-approval-btn-tab" data-toggle="tab" href="#customer-approval-tab" role="tab" aria-controls="customer-approval-btn-tab" aria-selected="true">
                                Pengaduan Masalah
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fleet-approval-btn-tab" data-toggle="tab" href="#fleet-approval-tab" role="tab" aria-controls="fleet-approval-btn-tab" aria-selected="false">
                            Konsultasi Tatap Muka
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent2">
                        <div class="tab-pane fade active show" id="customer-approval-tab" role="tabpanel" aria-labelledby="customer-approval-btn-tab">
                            <div class="summary">
                                <div class="summary-item">
                                    <ul class="list-unstyled list-unstyled-border">
                                        @if ($reports->count() > 0)
                                            @foreach ($reports as $report)
                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-right">
                                                            <a href="{{ route('detail-pengaduan', $report->id) }}" class="btn btn-info" title="Lihat Pengaduan"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                        <div class="media-title">{{ $report->title }}</div>
                                                        <div class="text-muted text-small">Pelapor: {{ $report->pelapor }}
                                                            <div class="bullet"></div> {{ $report->created_at }}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <div class="empty-state" data-height="400" style="height: 400px;">
                                                <div class="empty-state-icon">
                                                  <i class="fas fa-question"></i>
                                                </div>
                                                <h2>Belum ada laporan baru</h2>
                                            </div>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fleet-approval-tab" role="tabpanel" aria-labelledby="fleet-approval-btn-tab">
                            <div class="summary">
                                <div class="summary-item">
                                    <ul class="list-unstyled list-unstyled-border">
                                        @if ($consultations->count() > 0)
                                            @foreach ($consultations as $consultation)
                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-right">
                                                            <a href="{{ route('detail-konsultasi', $consultation->id) }}" class="btn btn-info" title="Lihat Pengaduan"><i class="fas fa-eye"></i></a>
                                                        </div>
                                                        <div class="media-title">{{ $consultation->title }}</div>
                                                        {{-- <div class="media-description">{{ $consultation->description }}</div> --}}
                                                        <div class="text-muted text-small">Pelapor: {{ $consultation->pelapor }}
                                                            <div class="bullet"></div> {{ $consultation->created_at }}
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <div class="empty-state" data-height="400" style="height: 400px;">
                                                <div class="empty-state-icon">
                                                  <i class="fas fa-question"></i>
                                                </div>
                                                <h2>Belum ada laporan baru</h2>
                                            </div>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
