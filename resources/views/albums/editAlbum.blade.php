@extends('layout.main')

@section('content')
<section class="w-75 mx-auto">

    <form action="{{route('updateAlbum',$album->id)}}" method="post">
        @csrf
        <label class="mt-3" for="nom">Nom</label><input class="form-control" type="text" name='nom'
            value="{{$album->nom}}">
        <label class="mt-3" for="id_user">ID_User</label>
        <select name="id_user" id="" class="form-control">
            @foreach ($users as $user)
            @if ($album->id_user==$user->id)
            <option value="{{$user->id}}" selected>{{$user->name}}</option>
            @else
            <option value="{{$user->id}}">{{$user->name}}</option>        
            @endif
        
            @endforeach
        </select>
        <textarea class="my-5 w-100" name="description" id="" cols="30" rows="10">{{$album->description}}</textarea>
        <button type="submit" class="btn btn-primary mt-2">Add Album</button>
    </form>
</section>
@endsection
