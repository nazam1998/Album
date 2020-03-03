@extends('layout.main')

@section('content')
<section class="w-75 mx-auto">

    <form action="{{route('updateUser',$user->id)}}" method="post">
        @csrf
        <label class="mt-3" for="name">Name</label><input class="form-control" type="text" name='name'
            placeholder="Name" value="{{$user->name}}">
            
        <label class="mt-3" type='email' for="email">Email</label><input class="form-control" type="text" name='email'
            placeholder="email" value="{{$user->email}}">
            
        <label class="mt-3" for="password">Password</label><input type='password' class="form-control" type="text"
            name='password' placeholder="password" value="{{$user->password}}">
            
        <button type="submit" class="btn btn-primary mt-2">Add User</button>
    </form>
</section>
@endsection
