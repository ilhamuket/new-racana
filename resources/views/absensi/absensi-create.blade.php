@extends('layouts.master')

<style>
    .select2-dropdown-container-custom .select2-selection {
        border-radius: 0;
        box-shadow: none;
        border: 1px solid #ced4da;
    }

    .select2-dropdown-container-custom .select2-selection__placeholder {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: 8px;
        color: #999;
        font-size: 14px;
        line-height: 1.5;
    }
</style>

@section('title')
    @lang('translation.Dashboards')
@endsection

@section('content')
    {{-- card BIODATA --}}
    <div class="row mb-2">
        <section>
            <div class="row justify-content-center">
                <div class="card shadow-none border col-12">
                    <h3 class="text-center bold mt-3 mb-3">Tambah Absensi</h3>
                    <div id="alert-container"></div>
                    <form method="post" action="{{ route('absensi.store') }}" class="my-4" id="form-registration"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="row row justify-content-center">
                            <div class="col-lg-8">
                                <div class="col-lg-12" id="judulInput">
                                    <div class="mb-3">
                                        <label for="tanggal">Tanggal</label>
                                        @php
                                            $currentDate = date('Y-m-d');
                                        @endphp
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" required
                                            value="{{ $currentDate }}">
                                    </div>
                                </div>

                                <div class="col-lg-12" id="jenis_kategori">
                                    <div class="mb-3">
                                        <label for="categories">Anggota</label>
                                        <select class="form-control select2" multiple style="width: 100%;" id="anggota"
                                            name="anggota[]" required>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12" id="jenis_kategori">
                                    <div class="mb-3">
                                        <label for="keterangan">Keterangan</label>
                                        <textarea class="form-control" name="keterangan" id="keterangan"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="dokumentasi">Dokumentasi</label>
                                        <input type="file" class="form-control" name="dokumentasi" id="dokumentasi"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12 mb-5">
                                    <button type="submit"
                                        class="btn btn-info waves-effect waves-light float-end mx-2">
                                        <i class="bx bx-save font-size-16 align-middle me-2"></i> SIMPAN
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            let registrationForm = $("#form-registration");
            let alertContainer = $("#alert-container");

            registrationForm.on("submit", function (event) {
                event.preventDefault();

                // Get the form data
                let formData = new FormData(this);

                $.ajax({
                    url: registrationForm.attr("action"),
                    method: registrationForm.attr("method"),
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        // Handle success response
                        if (response.success) {
                            // Show success alert
                            let alert = $('<div>').addClass('alert alert-success').text('Sukses tambah data');
                            alertContainer.html(alert);

                            // Redirect after a certain time
                            setTimeout(function () {
                                window.location.href = "{{ route('absensi.index') }}";
                            }, 3000);
                        } else {
                            // Show error alert
                            let alert = $('<div>').addClass('alert alert-danger').text('Gagal tambah data');
                            alertContainer.html(alert);
                        }

                        // Optional: Hide the alert after a certain time
                        setTimeout(function () {
                            alertContainer.empty();
                        }, 3000);

                        // Reset the form
                        registrationForm[0].reset();
                    },

                    error: function (xhr, status, error) {
                        // Handle error response
                        let errorMessage = 'Terjadi kesalahan saat mengirim permintaan AJAX: ' + error;
                        let alert = $('<div>').addClass('alert alert-danger').text(errorMessage);
                        alertContainer.html(alert);

                        // Optional: Hide the alert after a certain time
                        setTimeout(function () {
                            alertContainer.empty();
                        }, 3000);
                    }
                });
            });
        });

    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#keterangan'))
            .catch(error => {
                console.error(error);
            });

    </script>


    <script>

        $(document).ready(function () {
            $.ajax({
                url: "{{ route('anggota.list') }}",
                type: 'GET',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                cache: false,
                success: function (data) {
                    let element = '';
                    for (let i = 0; i < data.length; i++) {
                        element += '<option value="' + data[i]['id'] + '">' +
                            data[i]['name'] +
                            '</option>'
                    }

                    $('#anggota').html(element);

                    // Initialize Select2
                    $('#anggota').select2({
                        placeholder: 'Pilih Anggota',
                        allowClear: true,
                        dropdownCssClass: 'select2-dropdown-container-custom'
                    });
                },
            });
        });

    </script>
@endsection
