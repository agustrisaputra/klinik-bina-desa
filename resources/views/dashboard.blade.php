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
                        10
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
                        250
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
                        500
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
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-right">
                                                    <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#detail-approval-modal" title="Detail Approval"><i class="fas fa-bars"></i></button> -->
                                                    <button class="btn btn-success" title="Lihat Pengaduan"><i class="fas fa-check"></i></button>
                                                </div>
                                                <div class="media-title">Pengaduan 1</div>
                                                <div class="text-muted text-small">by <a href="#">User 1</a>
                                                    <div class="bullet"></div> 14-10-2021
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-right">
                                                    <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#detail-approval-modal" title="Detail Approval"><i class="fas fa-bars"></i></button> -->
                                                    <button class="btn btn-success" title="Lihat Pengaduan"><i class="fas fa-check"></i></button>
                                                </div>
                                                <div class="media-title">Pengaduan 2</div>
                                                <div class="text-muted text-small">by <a href="#">User 2</a>
                                                    <div class="bullet"></div> 14-10-2021
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- for empty data -->
                                    <!-- <div class="text-center">
                                        No data available
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fleet-approval-tab" role="tabpanel" aria-labelledby="fleet-approval-btn-tab">
                            <div class="summary">
                                <div class="summary-item">
                                    <ul class="list-unstyled list-unstyled-border">
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-right">
                                                    <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#detail-approval-modal" title="Detail Approval"><i class="fas fa-bars"></i></button> -->
                                                    <button class="btn btn-success" title="Lihat Laporan"><i class="fas fa-check"></i></button>
                                                    <!-- <button class="btn btn-danger" title="Reject Fleet"><i class="fas fa-times"></i></button> -->
                                                </div>
                                                <div class="media-title">Konsultasi 1</div>
                                                <div class="text-muted text-small">by <a href="#">User 1</a>
                                                    <div class="bullet"></div> 14-10-2021
                                                </div>
                                            </div>
                                        </li>
                                        <li class="media">
                                            <div class="media-body">
                                                <div class="media-right">
                                                    <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#detail-approval-modal" title="Detail Approval"><i class="fas fa-bars"></i></button> -->
                                                    <button class="btn btn-success" title="Lihat Laporan"><i class="fas fa-check"></i></button>
                                                    <!-- <button class="btn btn-danger" title="Reject Fleet"><i class="fas fa-times"></i></button> -->
                                                </div>
                                                <div class="media-title">Konsultasi 2</div>
                                                <div class="text-muted text-small">by <a href="#">User 2</a>
                                                    <div class="bullet"></div> 14-10-2021
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- for empty data -->
                                    <!-- <div class="text-center">
                                        No data available
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
