<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.10/dist/sweetalert2.all.min.js"></script>
<script src="{{ asset('assets/stisla/js/stisla.js') }}"></script>
<script src="{{ asset('assets/stisla/js/scripts.js') }}"></script>
<script src="{{ asset('assets/stisla/js/custom.js') }}"></script>

<script>
    $(document).ready(function() {
        $('form').submit(function(e) {
            e.preventDefault();

            const url = $(this).attr('action')

            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: '',
                icon:'warning',
                showCancelButton: false,
                confirmButtonColor: '#dc3545',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya'
            }).then((res) => {
                if (res.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: new FormData(this),
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
                            Swal.fire('Laporan sedang dikirim, mohon ditunggu...')
                            swal.showLoading()
                        },
                        success: function(result) {
                            Swal.fire(
                                'Success!',
                                result.data.message,
                                'success'
                            ).then(function() {
                                if (result.data.location) window.location.hash = result.data.location

                                if (result.data.redirect) {
                                    window.location.replace(result.data.redirect)
                                } else if (result.data.debug) {
                                    console.log(result.data.debug)
                                } else if (!result.data.norefresh) {
                                    location.reload(true)
                                }

                                if (result.data.reset) {
                                    form[0].reset()
                                }
                            })
                        },
                        error: function(err) {
                            console.log(err)
                            if (err.status == 422) {
                                let errors = document.createElement('ul');

                                $.each(err.responseJSON.error.errors, function (i, error) {
                                    let item = document.createElement('li')
                                    item.innerHTML = error.message
                                    errors.appendChild(item)
                                })

                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan!',
                                    footer: errors
                                })
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Terjadi kesalahan!',
                                })
                            }
                        }
                    })
                }
            })


        })
    })
</script>
@if (isset($script))
    {{ $script }}
@endif
