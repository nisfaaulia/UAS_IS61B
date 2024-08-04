@extends('layouts.master')

@section('title', 'Edit Desa')

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
            <h5 class="card-title">Edit Desa</h5>
        </div>
        <div class="card-body">
            <form action="/desa/{{$des->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nm_des">Nama Desa</label>
                    <input type="text" name="nm_des" id="nm_des" class="form-control" value="{{$des->nm_des}}" required>
                </div>
                <div class="form-group">
                    <label for="kpl_des">Nama Kepala Desa</label>
                    <input type="text" name="kpl_des" id="kpl_des" class="form-control" value="{{$des->kpl_des}}" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
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
