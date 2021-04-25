@extends('layouts.master')

@section('content')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Materi Kursus Online </div>
                <div class="card-body">
                    <a href="/admin/kursus" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/admin/kursus/update/{{ $kursus->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_kursus" class="form-control" placeholder="Nama Kursus .." value=" {{ $kursus->nama_kursus }}">
 
                            @if($errors->has('nama_kursus'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kursus')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="isi_kursus" class="form-control" placeholder="materi kursus.."> {{ $kursus->isi_kursus }} </textarea>
 
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
        </div>

@endsection