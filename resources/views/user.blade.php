
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
<style>
  nav .w-5{
    display: none;
  }
</style>

<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/insert_user" method="POST">
                    @csrf
                    <br>
                    <input type="text" name="name">
                    <br>
                    <br>
                    <input type="email" name="email">
                    <br>
                    <br>
                    <input type="password" name="password">
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">Add User</button>
                </form>
            </div>
        </div>
    </div>
   <br>
    <div class="container">
    <table class="table table-bordered">
        
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
          
        </tr>
        @foreach ($userData as $user)
            
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
           <td><a href="{{ route('delete',$user->id)}}" class="btn btn-danger">Delete</a>
            <a href="{{ route('edit',$user->id)}}" class="btn btn-primary">View</a>
            <a href="{{ route('showUpdate',$user->id)}}" class="btn btn-secondary">Update</a>
        </td>
        </tr>
         @endforeach
        
    </table>
    <div class="mt-5">
            {{$userData->links()}}
         </div>


         <div>
            {{--  Total Users: {{$userData->total()}}  --}}
            <br>
            {{--  Current Page: {{$userData->currentPage()}}  --}}
         </div>
    </div>


</body>
</html>