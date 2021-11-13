// Daterangepicker
if(jQuery().daterangepicker) {
    if($(".datepicker").length) {
    $('.datepicker').daterangepicker({
        locale: {format: 'YYYY-MM-DD'},
        singleDatePicker: true,
    });
    }
    if($(".datetimepicker").length) {
    $('.datetimepicker').daterangepicker({
        locale: {format: 'YYYY-MM-DD HH:mm'},
        singleDatePicker: true,
        timePicker: true,
        timePicker24Hour: true,
    });
    }
    if($(".daterange").length) {
    $('.daterange').daterangepicker({
        locale: {format: 'YYYY-MM-DD'},
        drops: 'down',
        opens: 'right'
    });
    }
}

$('#report_1').click(fn => {
    $('#bidang').hide()
    $('#date').hide()
})

$('#report_2').click(fn => {
    $('#bidang').show()
    $('#date').show()
})

$(function() {
    $('form').submit(function(e) {
        e.preventDefault();

        const url = $(this).attr('action')

        Swal.fire({
            title: 'Apakah Anda Yakin?',
            text: 'Laporkan dengan data yang anda inputkan',
            icon:'warning',
            showCancelButton: false,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Simpan'
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
