<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>data siswa</h1>
   <table border="2">
<tr>
    <td>ID</td>
    <td>nama lengkap</td>
    <td>jenis kelamin</td>
    <td>tanggal lahir</td>
    <td>kelas</td>
</tr>
  @foreach($siswa as $data)
  <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->nama_lengkap}}</td>
      <td>{{$data->jenis_kelamin}}</td>
      <td>{{$data->tanggal_lahir}}</td>
      <td>{{$data->kelas}}</td>
  </tr>
  @endforeach
   </table>
</body>
</html>