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
            <form action="/petugas/{{$pet->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nm_p">Nama Petugas</label>
                    <input type="text" name="nm_pet" id="nm_pet" class="form-control" value="{{$pet->nm_pet}}" required>
                </div>
                <div class="mb-3">
                    <label for="desa" class="form-label">Pilih Desa</label>
                    <select name="desa" id="desa" class="form-control">
                        <option value="">-Pilih Desa-</option>
                        @foreach ($des as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $pet->desa_id ? 'selected' : '' }}>
                                {{ $item->nm_des }}
                            </option>
                        @endforeach
                    </select>
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
