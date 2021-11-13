<section class="section">
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

                <div class="card card-danger">
                    <div class="card-header"><h2>Sampaikan Laporan Anda</h2></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('report') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-label">Pilih Klasifikasi Laporan</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="report_type" id="report_1" value="pengaduan_masalah" class="selectgroup-input" checked="">
                                        <span class="selectgroup-button"><b>Pengaduan Masalah</b></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="report_type" id="report_2" value="tatap_muka" class="selectgroup-input">
                                        <span class="selectgroup-button"><b>Tatap Muka</b></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" id="bidang" style="display: none;">
                                <label>Bidang</label>
                                <select class="form-control selectric" name="division">
                                    <option value="">Pilih Bidang</option>
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group" id="date" style="display: none;">
                                <label>Pilih Tanggal Konsultasi</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fas fa-calendar"></i>
                                        </div>
                                    </div>
                                    <input type="text" name="date" class="form-control datepicker">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nama">Judul laporan</label>
                                <input id="nama" type="text" class="form-control" name="title">
                                <div class="invalid-feedback">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Isi Laporan</label>
                                <textarea class="form-control" name="description" spellcheck="false" rows="6" style="overflow: hidden; overflow-wrap: break-word; height: 157px;"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Lampiran</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-danger btn-lg btn-block">LAPOR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
