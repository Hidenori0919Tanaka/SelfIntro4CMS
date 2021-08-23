<head>
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">title</title></h3>
      @if(!$model)
      
      {{ Form::open(['route' => 'title.store']) }} 
      <div class=''>                      
        {{ Form::label('title', 'タイトル:') }}
        {{ Form::text('title', null, ['placeholder'=>'名前を入力']) }}
      </div>
      <div class="">                      
        {{ Form::submit('登録ボタン', ['class' => '']) }}
        <a href='{{ route("menu") }}'>Menuに戻る</a>
      </div>
      {{ Form::close() }}
      {{-- <form method="POST" action={{ route('user.store')}}>
        @csrf
      
        <div>
          <label for="form-name">名前</label>
          <input type="text" name="name" id="form-name" required>
        </div>
        <button type="submit">登録</button>
      
      </form> --}}
    
    @else
    <p>{{$model->title}}</p>
    @endif
    </div>
  </div>
  </div>
