@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard {{ $user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Selamat datang {{ $user->name }}!</strong> Anda telah melakukan login sebagai {{ $user->role }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <a href="/member/konfirmasi" class="btn btn-warning"> Konfirmasi </a>
        <br>
        <a href="/member/detail" class="btn btn-danger"> Detail </a>
    </div>                        
</div>
@endsection
