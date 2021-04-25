@extends('layouts.app')

@section('content')
<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Tambahan Member </div>
                <div class="card-body">
                    <a href="/member/detail" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                   
                 <form method="post" action="/member/detail/update/{{ $detail->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat .." value=" {{ $detail->alamat }}">

                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

                            </div>

                            <div class="form-group">
                                <label>No Telepon</label>
                                <input type="text" name="no_tlp" class="form-control" placeholder="No telepon.." value=" {{ $detail->no_tlp }}">

                                @if($errors->has('no_tlp'))
                                    <div class="text-danger">
                                        {{ $errors->first('no_tlp')}}
                                    </div>
                                @endif

                                    </div>

                                    <div class="form-group">
                                        <label>Tujuan</label>
                                        <textarea name="tujuan" class="form-control" placeholder="tujuan kursus.."> {{ $detail->tujuan }} </textarea>

                                        @if($errors->has('tujuan'))
                                            <div class="text-danger">
                                                {{ $errors->first('tujuan')}}
                                            </div>
                                        @endif

                                    </div>

                                    <div class="form-group">
                                        <label>Pendidikan </label>
                                        <input type="text" name="pendidikan" class="form-control" placeholder="pendidikan .." value=" {{ $detail->pendidikan }}">

                                        @if($errors->has('pendidikan'))
                                            <div class="text-danger">
                                                {{ $errors->first('pendidikan')}}
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