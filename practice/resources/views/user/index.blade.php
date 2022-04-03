<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">User</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <tbody>
           @foreach($users as $user) 
          <tr>
            <th scope="row"><a href="/users/{{$user->id}}">{{$user->id}}</a></th>
            <td>&nbsp&nbsp&nbsp&nbsp{{$user->name}}</td>
            <td>&nbsp&nbsp&nbsp&nbsp{{$user->email}}</td>
            <td>{{$user->phone}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <hr>
      <a href="/users/create"><button>Create User</button></a>
      <a href="/users/phone/create"><button>Assign number</button></a>
</body>
</html>