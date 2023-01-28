@extends('layouts.admin')

@section('title', 'Blank Page')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Input Kategori</h1>
            </div>
            <div class="section-body">
                <form  method="POST" action="{{ route('category.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary">Simpan Kategori</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
