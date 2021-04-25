@extends('layouts.master')

@section('content')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Materi Kursus Online </div>
                <div class="card-body">
                    <a href="/admin/validasi" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/admin/validasi/update/{{ $validasi->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama ..." value=" {{ $validasi->name }}">
 
                            @if($errors->has('name'))
                                <div class="text-danger">
                                    {{ $errors->first('name')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="link" class="form-control" placeholder="materi kursus.."> {{ $validasi->link }} </textarea>
 
                             @if($errors->has('link'))
                                <div class="text-danger">
                                    {{ $errors->first('link')}}
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