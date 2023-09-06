<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Daftar Ekraf</title>
</head>
<body>
    <p>Hallo <b>{{$details['nama']}}</b> berikut ini adalah Pendaftaran Ekonomi Kreatif Anda:</p>
    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$details['nama']}}</td>
      </tr>
      <tr>
        <td>Nama Usaha</td>
        <td>:</td>
        <td>{{$details['nama_usaha']}}</td>
      </tr>
      <tr>
        <td>Website</td>
        <td>:</td>
        <td>{{$details['website']}}</td>
      </tr>
    </table>
    <p>Selamat <b>{{$details['nama_usaha']}}</b> telah Berhasil Mendaftar.</p>
</body>
</html>