@extends('layouts.masteru')

@section('content')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Materi Kursus Online
                <div class="card-body">
                    <a href="/user/kursus" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/user/kursus/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_kursus" class="form-control" placeholder="Nama Kursus ..">

                            @if($errors->has('nama_kursus'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kursus')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Materi Kursus</label>
                            <textarea name="isi_kursus" class="form-control" placeholder="Silahkan iis materi.."></textarea>

                             @if($errors->has('isi_kursus'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_kursus')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
@endsection