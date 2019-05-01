<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
        <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
<td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>

    </tr>
  @endforeach
  </tbody>
</table>
{{$users->links()}}
</div>
  </body>
</html>
