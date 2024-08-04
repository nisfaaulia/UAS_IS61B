@extends('layouts.master')

@section('title', 'Tambah Rekamedis')

@section('css')
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2-theme.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css') }}">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tambah Rekam Medis Balita</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form method="post" action="/balita/store/" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nomor Rekam Medis</label>
                        <input type="text" class="form-control" name="no_rekme">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Balita</label>
                        <input type="text" class="form-control" name="nm_pas">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="UMUM" id="umum">
                            <label class="form-check-label" for="umum">UMUM</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="BPJS" id="bpjs">
                            <label class="form-check-label" for="bpjs">BPJS</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" name="nm_ayah">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Umur Ayah</label>
                        <input type="text" class="form-control" name="umur_ayah">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" name="nm_ibu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Umur Ibu</label>
                        <input type="text" class="form-control" name="umur_ibu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berat Lahir</label>
                        <input type="text" class="form-control" name="berat_lahir">
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Status Imunisasi</label>
                <select name="status_imu" class="form-control">
                    <option value="">-Jenis Imunisasi-</option>
                    <option value="BCG">BCG</option>
                    <option value="Pentabio">Pentabio</option>
                    <option value="Polio">Polio</option>
                    <option value="Campak">Campak</option>
                    <option value="Hepatitis B">Hepatitis B</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal di Imunisasi</label>
                <input type="date" class="form-control" name="tgl_imu">
            </div>

            <div class="mb-3">
                <label class="form-label">Pemberian Vitamin/Suplemen</label>
                <select name="suplemen" class="form-control">
                    <option value="">-Pemberian Ke-</option>
                    <option value="Ke-1">Ke-1</option>
                    <option value="Ke-2">Ke-2</option>
                    <option value="Ke-3">Ke-3</option>
                    <option value="Ke-4">Ke-4</option>
                    <option value="Ke-5">Ke-5</option>
                    <option value="Ke-6">Ke-6</option>
                    <option value="Ke-7">Ke-7</option>
                    <option value="Ke-8">Ke-8</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Pemberian Vitamin/Suplemen</label>
                <input type="date" class="form-control" name="tgl_sup">
            </div>

            <div class="mb-3">
                <label class="form-label">Catatan Perkembangan Balita</label>
                <input type="text" class="form-control" name="perkem">
            </div>

            <div class="mb-3">
                <label class="form-label">Petugas Yang Menanganni</label>
                <select name="petugas_id" class="form-control">
                    <option value="">-Pilih Petugas-</option>
                    @foreach ($pet as $item)
                        <option value="{{ $item->id }}">{{ $item->nm_pet }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Desa</label>
                <select name="desas_id" class="form-control">
                    <option value="">-Pilih Desa-</option>
                    @foreach ($des as $item)
                        <option value="{{ $item->id }}">{{ $item->nm_des }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/vendors/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/vendors/js/select2-active.min.js') }}"></script>
<script src="{{ asset('assets/js/common-init.min.js') }}"></script>
<script src="{{ asset('assets/js/leads-view-init.min.js') }}"></script>
<script src="{{ asset('assets/js/theme-customizer-init.min.js') }}"></script>
@endsection
