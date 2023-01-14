@extends('layouts.base')

@section('title', 'Pengaduan')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Pengaduan
                    </h2>
                </div>
                <!-- Page title actions -->
                {{-- <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-white">
                            New view
                        </a>
                    </span>
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                        Create new report
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                        data-bs-target="#modal-report" aria-label="Create new report">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <line x1="12" y1="5" x2="12" y2="19" />
                            <line x1="5" y1="12" x2="19" y2="12" />
                        </svg>
                    </a>
                </div>
            </div> --}}
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards justify-content-md-center">
                <div class="col-md-6">
                    <form class="card" method="POST" action="{{ route('pengaduan.store') }}">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Form Pengaduan</h3>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    <h4 class="alert-title">Success!</h4>
                                    <div class="text-muted">{{ session('success') }}</div>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-title">Error!</h4>
                                    <div class="text-muted">{{ session('error') }}</div>
                                </div>
                            @endif
                            <div class="mb-3">
                                <label class="form-label required">No. Kartu Keluarga</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="NO KK" name="no_kk">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Nama</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">No. Telepon/HP</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="No Telepon/Hp" name="tlp">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Alamat</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">RT/RW</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="RT/RW" name="rtrw">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Keterangan Pengaduan</label>
                                <div>
                                    <textarea name="ket_pengaduan" class="form-control" id="" cols="10" rows="30"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
