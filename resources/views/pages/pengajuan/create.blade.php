@extends('layouts.base')

@section('title', 'Pengajuan Bansos')

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
                        Pengajuan Bansos
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
                    <form class="card" method="POST" action="{{ route('pengajuan.store') }}">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Form Pengajuan</h3>
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
                                <label class="form-label required">Nama</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">NIK</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="NIK" name="nik">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">No KK</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Nama" name="no_kk">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Domisili</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Domisili" name="domisili">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Pekerjaan</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Penghasilan</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="1000000" name="penghasilan">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Nama Kepala Keluarga</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Nama Kepala Keluarga"
                                        name="nm_kepala_keluarga">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Pekerjaan Kepala Keluarga</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Pekerjaan Kepala Keluarga"
                                        name="pekerjaan_kepala_keluarga">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Jumlah Tanggungan</label>
                                <div>
                                    <input type="number" class="form-control" placeholder="2" name="jumlah_tanggungan">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Jumlah Anggota Keluarga(KK)</label>
                                <div>
                                    <input type="number" class="form-control" placeholder="3"
                                        name="jumlah_anggota_keluarga">
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
