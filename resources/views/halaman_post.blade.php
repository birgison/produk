<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>data post</h1>
   <table border="2">
<tr>
    <td>ID</td>
    <td>title </td>
    <td> content</td>
</tr>
  @foreach($post as $data)
  <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->title }}</td>
      <td>{{$data->content}}</td>
  </tr>
  @endforeach
   </table>
</body>
</html>