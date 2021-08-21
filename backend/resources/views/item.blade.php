<head>
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">item</title></h3>
      @if($items == null)
      
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
        {{-- <form method="POST" action={{ route('user.store')}}>
          @csrf
        
          <div>
            <label for="form-name">名前</label>
            <input type="text" name="name" id="form-name" required>
          </div>
          <button type="submit">登録</button>
        
        </form> --}}
      
      @else
      <p>{{$model->admin_id}}</p>
      <p>{{$model->title}}</p>
      @endif
    </div>
  </div>
  </div>