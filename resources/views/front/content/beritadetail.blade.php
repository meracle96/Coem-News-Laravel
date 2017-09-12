@extends('front.partials.layout')
@section('content')
    <!-- Portfolio Grid Section -->
    <section id="portfolio" style="margin-top:50px;">
      <div class="container text-center">
        <h1>{{ $berita->judul }}</h1>
        <h6>Diposting pada {{ tglIndo($berita->created_at) }}</h6>
        <h6>Oleh : {{ $berita->user->name }}</h6>
        <h6>Kategori Berita : {{ $berita->kategori->nama }}</h6>
        <img src="{{asset('uploads/berita')}}/{{$berita->foto}}"  style="margin:40px 0;">
        <p>{{ $berita->isi }}</p>
      </div>
    </section>
@endsection