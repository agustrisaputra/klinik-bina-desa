<x-guest-layout>
    <div class="card-header">
        <h4>Daftar</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Username -->
            <x-form-group>
                <x-label for="Username" :value="__('Username')" />

                <x-input id="username" type="text" name="username" :value="old('username')" required autofocus autocomplete="off"/>
            </x-form-group>

            <!-- Name -->
            <x-form-group>
                <x-label for="Name" :value="__('Nama Lengkap')"/>

                <x-input type="text" id="name" name="name" :value="old('name')" required autocomplete="off"/>
            </x-form-group>

            <!-- Email Address -->
            <x-form-group>
                <x-label for="Email" :value="__('Email')"/>

                <x-input type="email" id="email" name="email" :value="old('email')" required autocomplete="off"/>
            </x-form-group>

            <!-- Phone-->
            <x-form-group>
                <x-label for="Phone" :value="__('No. Telp')"/>

                <x-input type="text" id="phone" name="phone" :value="old('phone')" required autocomplete="off"/>
            </x-form-group>

            <div class="row">
                <!-- Password -->
                <x-form-group class="col-6">
                    <x-label for="password" :value="__('Password')" />
                    <x-input type="password" id="password" name="password" required autocomplate="off" />
                </x-form-group>

                <!-- Confirm Password -->
                <x-form-group class="col-6">
                    <x-label for="password_confirmation" :value="__('Konfirmasi Password')" />

                    <x-input type="password" id="password_confirmation" name="password_confirmation" required />
                </x-form-group>
            </div>

            <div class="form-divider">Data Desa</div>

            <div class="row">
                <!-- District -->
                <x-form-group class="col-6">
                    <x-label for="district" :value="__('Kecamatan')"/>

                    <x-select-option class="selectric" id="district" name="district" :label="__('Pilih Kecamatan')" :values="$districts"/>
                </x-form-group>

                <!-- Village -->
                <x-form-group class="col-6">
                    <x-label for="village" :value="__('Desa')"/>

                    <x-select-option class="selectric" disabled id="village" name="village" :label="__('Pilih Desa')" />
                </x-form-group>
            </div>

            <!-- Position -->
            <x-form-group>
                <x-label for="position" :value="__('Jabatan')"/>

                <x-select-option class="selectric" id="position" name="position" :label="__('Pilih Jabatan')" :values="$positions"/>
            </x-form-group>

            <x-form-group>
                <x-button class="btn-danger btn-lg btn-block">
                    {{ __('Daftar') }}
                </x-button>
            </x-form-group>
        </form>
    </div>

    <x-slot name="script">
        <script type="text/javascript">
            $(document).ready(function() {
                $('#district').on('change', function() {
                    const districtId = $(this).val()

                    if(districtId !== '') {
                        let url = "{{ route('get-villages', ":id") }}"

                        $.ajax({
                            url: url.replace(':id', districtId),
                            type: 'GET',
                            dataType: 'json',
                            success: function(result) {
                                const data = result.data
                                // console.log(data)
                                if(data) {
                                    $('#village').removeAttr('disabled')
                                    $('#village').empty()
                                    $('#village').append(`<option value="">Pilih Desa</option>`)

                                    $.each(data, function(key, item) {
                                        $('#village').append(`<option value="${item.id}">${item.name}</option>`)
                                    })
                                }
                            }
                        })
                    } else {
                        $('#village').attr('disabled', 'disabled')
                        $('#village').empty()
                        $('#village').append(`<option value="">Pilih Desa</option>`)
                    }
                })
            })
        </script>
    </x-slot>
</x-guest-layout>
