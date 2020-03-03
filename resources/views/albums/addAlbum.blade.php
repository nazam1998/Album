@extends('layout.main')

@section('content')
<section class="w-75 mx-auto">

    <form action="{{route('saveAlbum')}}" method="post">
        @csrf
        <label class="mt-3" for="nom">Nom</label><input class="form-control" type="text" name='nom' placeholder="Name">
        <label class="mt-3" for="id_user">ID_User</label>


        <select name="id_user" id="" class="form-control">
            @foreach ($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <textarea name="description" class="my-4 w-100" id="" cols="30" rows="10"></textarea>
        <button type="submit" class="btn btn-primary mt-2">Add Album</button>
    </form>
</section>
@endsection
