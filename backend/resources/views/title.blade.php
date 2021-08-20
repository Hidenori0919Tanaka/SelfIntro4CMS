<head>
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">title</title></h3>
      @foreach ($titles as $title)
    <p>{{$title->id}}</p>
    <p>{{$title->title}}</p>
      @endforeach
    </div>
  </div>
  </div>