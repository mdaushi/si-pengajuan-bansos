@extends('layouts.base')

@section('title', 'Dashboard')

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
                        Dashboard
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
            <div class="row row-deck row-cards">

                @can('admin')
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Pengajuan Calon Penerima Bansos</h3>
                                <p class="text-muted">Daftar Calon Penerima Bansos yang telah terdaftar</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Penerima Bansos</h3>
                                <p class="text-muted">Daftar Penerima Bansos yang telah terdaftar</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Data Pengajuan</h3>
                                <p class="text-muted">Daftar komplain/pengajuan masyarakat</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                @endcan

                @can('user')
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Pengajuan Data</h3>
                                <p class="text-muted">Daftar pengajuan</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="{{ route('pengajuan.index') }}" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Cek Status Pengajuan</h3>
                                <p class="text-muted">Lihat progres pengajuan</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="{{ route('pengajuan.status') }}" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Data Penerima Bansos</h3>
                                <p class="text-muted">Data Penerima Bansos</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="{{ route('penerima.index') }}" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Info Kriteria</h3>
                                <p class="text-muted">Kriteria penerima bansos</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Pengaduan</h3>
                                <p class="text-muted">Ajukan komplain/pengaduan</p>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <a href="{{ route('pengaduan.index') }}" class="btn btn-primary">Lihat</a>
                            </div>
                        </div>
                    </div>
                @endcan

            </div>
        </div>
    </div>

@endsection
