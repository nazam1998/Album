@extends('layout.main')
@section('content')
    <section class="text-center">

        <table>
            <thead>
                <tr>
                    <th colspan="7">User Table</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                <td><a href="{{route('showAlbum',$user->id)}}" class="btn btn-success">Show Album</a></td>
                    <td><a href="{{route('editUser',$user->id)}}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{route('deleteUser',$user->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{route('addUser')}}" class="btn btn-primary">Ajouter Utilisateur</a>
        
    </section>
        @endsection