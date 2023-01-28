@extends('layouts.admin')

@section('title', 'Blank Page')

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Kategori</h1>
            </div>
            <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>List Kategori</h4>
                        <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Tambah Kategori</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="row">No.</th>
                                        <th scope="row">Nama Kategori</th>
                                        <th scope="row">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $result => $hasil)
                                        <tr>
                                            <td>{{ $result + $categories->firstitem() }}</td>
                                            <td>{{ $hasil->name }}</td>
                                            <td>
                                                <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="http://" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <nav class="d-inline-block">
                            {{ $categories->links() }}
                        </nav>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
