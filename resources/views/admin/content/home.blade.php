@extends('admin.partials.layout')
@section('content')
<section class="content">
        <div class="container-fluid">
            <h1>Selamat datang di,</h1>
            <h1>Admin Panel COEM NEWS</h1>
            <hr>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <div class="icon bg-red">
                      <i class="material-icons">shopping_cart</i>
                  </div>
                  <div class="content">
                      <div class="text">JUMLAH BERITA</div>
                      <div class="number count-to" data-from="100" data-to="{{ $jlhberita }}" data-speed="1000" data-fresh-interval="20">{{ $jlhberita }}</div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                  <div class="icon bg-indigo">
                      <i class="material-icons">face</i>
                  </div>
                  <div class="content">
                      <div class="text">JUMLAH USER</div>
                      <div class="number count-to" data-from="100" data-to="{{ $jlhuser }}" data-speed="1000" data-fresh-interval="20">{{ $jlhuser }}</div>
                  </div>
              </div>
          </div>
        </div>
    </section>
@endsection