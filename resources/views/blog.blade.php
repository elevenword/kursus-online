@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-10">
          @foreach($kursus as $p)
           
           <a href="/{{$p->id }}"> {{$p->nama_kursus }} </a>
            <!-- <p>{{ $p->isi_kursus }}</p> -->
            <p>@excerpt($p->isi_kursus)</p>
          <br>
              @endforeach
              @if(!empty($pesan))
            <div class="alert alert-danger">
          {{ $pesan }}
            </div>
              @endif

      <div class="d-flex justify-content-center">
      {!! $kursus->links() !!}
      </div>
      
    </div>

    <div class="col-sm-2"> 
    <a href="">Tentang</a><br>
    <a href="">Contact </a><br>
    <a href="">GitHub</a>
    <form class="form" action="" method="get">
      <div>
        <label for="search" class="d-block mr-2"> Pencarian</label>
        <input type="text" name="search" id="search">
        <button type="submit"> Cari</button>
      </div>
    </form>
    </div>
  </div>



  <div class="row">

    <div class="col-sm">col-sm</div>


    <div class="col-sm">col-sm</div>


    <div class="col-sm">col-sm</div>
  </div>
</div>

@endsection