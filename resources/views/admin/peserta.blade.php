@extends('layouts.dashboard')
@section('title', 'Peserta Workshop BPC')
@section('content')
<div class="row">
  <div class="col-12 col-lg-6">
    <h1 class="h3 mb-4 text-gray-800">Daftar Peserta</h1>
  </div>
  <div class="col-12 col-lg-6">
    @if (session('alert'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('alert') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
  </div>
</div>
<div class="row">
  <div class="col-12">
    <table class="table table-striped table-bordered" style="width: 100%" id="daftarPeserta">
      <thead>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Email</th>
        <th>No WhatsApp</th>
        <th>Status</th>
        <th>Bukti Pembayaran</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($participants as $participant)
          <tr>
            <th>{{ $i++ }}</th>
            <td>{{ $participant->nama }}</td>
            <td>{{ $participant->npm }}</td>
            <td>{{ $participant->email }}</td>
            <td>{{ $participant->nohp }}</td>
            <td>{{ $participant->status }}</td>
            <td>
              <div class="xzoom-container">
                <img src="{{ url('/storage/image', $participant->image) }}" alt="Bukti Pembayaran" width="200px" class="xzoom" id="xzoom-default" xoriginal="{{ url('/storage/image', $participant->image) }}">
              </div>
            </td>
            <td>
              <form action="{{ route('peserta.update', $participant->id) }}" method="POST">
                @csrf
                @method('put')
                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection