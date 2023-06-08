@extends('layouts.master-layouts')

<style>
    .centered-cell {
        text-align: center;
        vertical-align: middle;
        word-wrap: break-word;
        white-space: normal;
    }
</style>

@section('title')
    @lang('translation.Data_Pendaftar')
@endsection


@section('content')
    
<div class="row mb-3">
    <div class="col-12">
        <div class="d-flex justify-content-center justify-content-md-end">
            <a href="{{ route('absensi.create') }}" class="btn btn-primary mx-2">Tambah Absen</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive">
                <table id="datatable-buttons" class="table table-bordered dt-responsive w-100 dataTable">
                    <thead>
                        <tr>
                            <th class="centered-cell">No</th>
                            <th class="centered-cell">Tanggal</th>
                            <th class="centered-cell">Anggota</th>
                            <th class="centered-cell">Catatan</th>
                            <th class="centered-cell">Dokumentasi</th>
                            <th class="centered-cell">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($data as $value)
                            <tr>
                                <td class="centered-cell">{{ $loop->iteration }}</td>
                                <td class="centered-cell">{{ $value->tanggal }}</td>
                                <td class="centered-cell">
                                    @foreach (json_decode($value->anggota) as $index => $anggotaName)
                                    {{ $anggotaName }}{{ $index < count(json_decode($value->anggota)) - 1 ? ',' : '' }}<br>
                                @endforeach
                                
                                </td>
                                <td class="centered-cell">{{ $value->keterangan }}</td>
                                <td class="centered-cell"><img src="{{ $value->dokumentasi }}" alt="Foto" width="100px" height="100px"></td>
                                <td class="centered-cell">
                                    <a href="{{ route('absensi.show', $value->id) }}" class="btn btn-primary">Detail</a>
                                    <a href="{{ route('absensi.edit', $value->id) }}" class="btn btn-warning">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
@endsection
