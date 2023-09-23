@extends("main_template")

@section("title", "Lists")

@section("body")
    <a href="{{ route("lists.create") }}">Create new list</a>
    <ul>
       <li>First list <a href="{{ route("lists.edit", 1) }}">Edit</a></li>
    </ul>
@endsection
