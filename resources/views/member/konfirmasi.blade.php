@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <p> Dashboard {{ $user->name }} </p>
                <a href="/member">Kembali</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Halaman konfirmasi  {{ $user->name }}!.</strong></p>
                    <br>
                    <p>  Link berikut akan digunakan untuk mengakses kursus</p>
                    <a href="/member/materi">{{ $user->link }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection