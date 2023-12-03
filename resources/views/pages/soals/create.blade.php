@extends('layouts.app') @section('title', 'Add Soal') @push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}" />
<link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}" />
<link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}" />
<link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}" />
<link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" />
<link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" />
@endpush @section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active">
                    <a href="#">Dashboard</a>
                </div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Soals</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Soal</h2>
            <div class="col-12 ">
                <div class="card">
                    <form action="{{ route('soal.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="pertanyaan">Pertanyaan</label>
                                <input id="pertanyaan" type="text"
                                    class="form-control 
                                @error('pertanyaan') 
                                is-invalid 
                                @enderror"
                                    name="pertanyaan" autofocus />
                                @error('pertanyaan')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <div class=" selectgroup  w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="Numeric" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Numerik</span>
                                    </label>

                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="Verbal" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Verbal</span>
                                    </label>

                                    <label class="selectgroup-item">
                                        <input type="radio" name="roles" value="Logika" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Logika</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jawaban">Jawaban A</label>
                                <input id="jawaban" type="text"
                                    class="form-control 
                                @error('jawaban_a')
                                is-invalid
                                @enderror"
                                    name="jawaban_a" />
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jawaban">Jawaban b</label>
                                <input id="jawaban" type="text"
                                    class="form-control 
                                @error('jawaban_b')
                                is-invalid
                                @enderror"
                                    name="jawaban_a" />
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jawaban">Jawaban c</label>
                                <input id="jawaban" type="text"
                                    class="form-control 
                                @error('jawaban_c')
                                is-invalid
                                @enderror"
                                    name="jawaban_a" />
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jawaban">Jawaban d</label>
                                <input id="jawaban" type="text"
                                    class="form-control 
                                @error('jawaban_d')
                                is-invalid
                                @enderror"
                                    name="jawaban_a" />
                                @error('kategori')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kategori">Kunci</label>
                                <div class=" selectgroup  w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="kunci" value="a" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">A</span>
                                    </label>

                                    <label class="selectgroup-item">
                                        <input type="radio" name="kunci" value="b" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">B</span>
                                    </label>

                                    <label class="selectgroup-item">
                                        <input type="radio" name="kunci" value="c"
                                            class="selectgroup-input" checked="">
                                        <span class="selectgroup-button">C</span>
                                    </label>

                                    <label class="selectgroup-item">
                                        <input type="radio" name="kunci" value="d"
                                            class="selectgroup-input" checked="">
                                        <span class="selectgroup-button">D</span>
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection @push('scripts')
<!-- JS Libraies -->
<script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
<script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
<script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
<script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

<!-- Page Specific JS File -->
<script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush