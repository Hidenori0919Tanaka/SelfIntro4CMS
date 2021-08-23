<head>
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">item</title></h3>
      @if(is_null($item))
      <p>{{$item}}</p>
        {{ Form::open(['route' => 'item.store']) }} 
        <div class=''>                      
          {{ Form::label('item1', '名前:') }}
          {{ Form::text('item1', null, ['placeholder'=>'名前を入力']) }}
        </div>
        <div class="">                      
          {{ Form::submit('登録ボタン', ['class' => '']) }}
          <a href='{{ route("menu") }}'>Menuに戻る</a>
        </div>
        {{ Form::close() }}
      @else
      <p>{{$item}}</p>
      @endif
    </div>
  </div>
  </div>