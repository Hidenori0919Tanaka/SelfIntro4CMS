<head>
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">user</title></h3>
    {{-- <h4>{{$user}}</h4>
    <h4>{{$id}}</h4> --}}
      @foreach ($users as $user)
    <p>{{$user->id}}</p>
    <p>{{$user->name}}</p>
      @endforeach
    </div>
  </div>
  </div>
  </div>