<div class="modal fade" tabindex="-1" role="dialog" id="email_form">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="{{ route('admin.kirim-email', $report->id) }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">
                        Kirim Email
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="company-name">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="company-name">Tanggapan</label>
                        <textarea class="form-control" name="body" id="body" rows="6" style="overflow: hidden; overflow-wrap: break-word; height: 157px;" required></textarea>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-save btn-success">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
