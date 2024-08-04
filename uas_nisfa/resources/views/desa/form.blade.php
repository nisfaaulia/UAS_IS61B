@extends('layouts.master')

@section('title', 'Tambah Desa')

@section('css')
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2-theme.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/theme.min.css') }}">
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Tambah Desa</h5>
        </div>
        <div class="card-body">
            <form action="/desa/store/" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nm_des">Nama Desa</label>
                    <input type="text" name="nm_des" id="nm_des" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kpl_des">Nama Kepala Desa</label>
                    <input type="text" name="kpl_des" id="kpl_des" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Simpan</button>
            </form>
        </div>
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
