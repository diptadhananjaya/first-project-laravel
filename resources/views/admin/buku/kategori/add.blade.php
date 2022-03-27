@extends('layouts.app')

@section('title')
Tambah Kategori Buku
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb border-0">
        <li class="breadcrumb-item" aria-current="page"> <a href="{{ route('kategori.index') }}"> Kategori </a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Kategori</li>
    </ol>
</nav>
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Kategori Buku</h4>
            <form  action="{{ route('kategori.store') }}" class="forms-sample" method="post">
                @csrf
                <div class="form-group">
                    <label for="category">Nama Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="category" placeholder="Masukkan Kategori Buku">
                </div>
                <div class="form-group">
                    <label for="category">Deskripsi</label>
                    <textarea type="text" class="form-control" style="height: 200px" id="kategori" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <a href="{{ route('kategori.index') }}" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
