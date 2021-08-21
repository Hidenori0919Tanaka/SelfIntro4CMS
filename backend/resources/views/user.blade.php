<head>
    <title>Admin Menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <div class="container ops-main">
  <div class="row">
    <div class="col-md-12">
      <h3 class="ops-title">user</title></h3>
      @if($user == null)
      
        {{ Form::open(['route' => 'user.store']) }} 
        <div class=''>                      
          {{ Form::label('name', '名前:') }}
          {{ Form::text('name', null, ['placeholder'=>'名前を入力']) }}
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
      <p>{{$user->admin_id}}</p>
      <p>{{$user->name}}</p>
      @endif
    </div>
  </div>
  </div>
  </div>