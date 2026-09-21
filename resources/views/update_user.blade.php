
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awsome.css') }}">

</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                 @foreach ($data as $user)
                <form action="{{ route('updateUser',$user->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <br>
                   
                    <input type="text" value="{{$user->name}}" name="name">
                    {{--  <input type="hidden" name="id" value="{{$user->id}}">  --}}

                    <br>
                    <br>
                    <input type="email" value="{{$user->email}}" name="email">
                    <br>
                    <br>
                    <input type="password" value="{{$user->password}}" name="password">
                    @endforeach
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Update </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>