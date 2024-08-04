@extends('layouts.master')

@section('title', 'Posyandu || Desa')

@section('tambah')
<a href="/desa/form/" class="btn btn-md btn-primary">
    <i class="feather-plus me-2"></i>
    <span>Tambah Desa</span>
</a>
@endsection

@section('css')
<!-- Tambahkan CSS kustom di sini jika diperlukan -->
@endsection

@section('content')
<div class="col-lg-12">
    <div class="card stretch stretch-full">
        <div class="card-header">
            <h5 class="card-title">Daftar Desa</h5>
        </div>
        <div class="card-body custom-card-action p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Desa</th>
                            <th>Nama Kepala Desa</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($des as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nm_des }}</td>
                            <td>{{ $item->kpl_des }}</td>
                            <td>
                                <div class="hstack gap-2 justify-content-end">
                                    <a href="/desa/edit/{{$item->id}}" class="btn btn-sm btn-primary">
                                        <i class="feather-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hapus{{$item->id}}">
                                        <i class="feather-trash"></i>
                                    </button>
                                    <!-- Modal Hapus -->
                                    <div class="modal fade" id="hapus{{$item->id}}" tabindex="-1" aria-labelledby="hapusModalLabel{{$item->id}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="hapusModalLabel{{$item->id}}">Peringatan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Yakin ingin menghapus data Desa <b>{{$item->nm_des}}</b>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <form action="/desa/{{$item->id}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data tersedia</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="assets/js/bootstrap.bundle.min.js"></script>
@endsection
