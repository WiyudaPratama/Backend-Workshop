<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Report Data Peserta Workshop Web</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <style>

    .total-pendapatan p span {
      font-weight: bold;
    }
  </style>

</head>
<body>
  
  <h1 class="h3 text-center">Data Peserta Workshop Web Pada Sabtu, 03 Juli 2021</h1>

  <table  width="100%" class="table table-bordered mt-4">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Email</th>
        <th>No WhatsApp</th>
      </tr>
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
        </tr>
      @endforeach
    </tbody>
  </table>

  <div class="total-pendapatan">
    <p><span>Total Pendapatan : </span> Rp. {{ $income }} </p>
  </div>

</body>
</html>