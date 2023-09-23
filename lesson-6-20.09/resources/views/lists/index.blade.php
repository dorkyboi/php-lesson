@extends("main_template")

@section("title", "Lists")

@section("body")
    <a href="{{ route("lists.create") }}">Create new list</a>
    <ul>
        @foreach($lists as $list)
            <li>
                {{ $list->title }}
                <a href="{{ route("lists.edit", $list->id) }}">Edit</a>
                <form action="{{ route("lists.destroy", $list->id) }}" method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
