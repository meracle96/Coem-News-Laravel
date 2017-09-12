@extends('front.partials.layout')
@section('content')
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <img class="img-fluid" src="{{asset('/assets/front/img/profile.png') }}" alt="">
        <div class="intro-text">
          <span class="name">\\ Coem News \\</span>
          <hr class="star-light">
          <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
        </div>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">Daftar Berita</h2>
        <br><hr><br>
        @foreach($beritas as $berita)
          <div class="row">
            <div class="col-md-4">
               <img src="{{asset('uploads/berita')}}/{{ $berita->foto }}" width="300">
            </div> 
            <div class="col-md-8">
              <h1><a href="{{route('depan.beritaDetail',['id'=>$berita->id]) }}">{{ $berita->judul }}</a></h1>
              <h6>Diposting pada {{ tglIndo($berita->created_at) }}</h6>
              <h6>Oleh : {{ $berita->user->name }}</h6>
              <h6>Kategori Berita : {{ $berita->kategori->nama }}</h6>
              <p>{{ str_limit($berita->isi, 255) }}.......</p>
              <a href="{{route('depan.beritaDetail',['id'=>$berita->id]) }}" class="btn btn-primary">Baca Selengkapnya...</a>
            </div>
          </div>
          <br><hr><br>
        @endforeach
        <div class="row">
          <div class="col-md-12" style="font-size:40px;">
            {{ $beritas->links() }}
          </div>
        </div>
      </div>
    </section>
@endsection