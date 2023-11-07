@extends('dashboard.layouts.main')

@section('links')
{{-- Simple DataTable --}}
<link rel="stylesheet" href="{{ asset('assets/extensions/simple-datatables/style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/compiled/css/table-datatable.css') }}" />
{{-- Sweetalert --}}
<link rel="stylesheet" href="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.css') }}" />
@endsection

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>SKTP</h3>
                <p class="text-subtitle text-muted">Silahkan input form dibawah ini.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input SKTP</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Input SKTP -->
    <form form method="post" action="" class="form-horizontal" role="form">
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Surat Pengantar KTP</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Enter provinsi" required>
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Kabupaten</label>
                                <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Enter kecamatan" required>
                            </div>

                            <div class="form-group">
                                <label for="basicInput">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Enter kabupaten" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Enter kelurahan" required>
                            </div>
                            <div class="form-group">
                                <label for="nik">Permohonan KTP</label>
                                <select name="jenis_permohonan" class="form-control" required>
                                    <option>--- Pilih Permohonan ---</option>
                                    <option>Baru</option>
                                    <option>Perpanjang</option>
                                    <option>Penggantian</option>
                                </select>

                            </div>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basicInput">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama " required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">No KK</label>
                                <input type="text" class="form-control" id="kk" name="kk" placeholder="Enter No KK" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Enter NIK" required>
                            </div>
                            <div class="form-group">
                                <label for="basicInput">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat" required>
                            </div>
                        </div>
                        <br><br>
                        <div class="d-flex justify-left-end mt-6">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>

</div>
@endsection

@section('scripts')
{{-- SweetAlert --}}
<script src="{{ asset('assets/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
@vite(['resources/js/sweetalert/swalMulti.js'])
{{-- Simple DataTable --}}
<script src="{{ asset('assets/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
@vite(['resources/js/simple-datatable/complaints.js'])
@endsection