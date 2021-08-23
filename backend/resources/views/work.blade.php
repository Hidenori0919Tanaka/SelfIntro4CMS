<head>
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">title</title></h3>
      @if(!$model)
      
      {{ Form::open(['route' => 'work.store']) }} 
      <div class=''>                      
        {{ Form::label('title', '名前:') }}
        {{ Form::text('title', null, ['placeholder'=>'名前を入力']) }}
      </div>
      <div class="">                      
        {{ Form::submit('登録ボタン', ['class' => '']) }}
        <a href='{{ route("menu") }}'>Menuに戻る</a>
      </div>
      {{ Form::close() }}
    @else
    <p>{{$model->title}}</p>
    @endif
    </div>
  </div>
  </div>
