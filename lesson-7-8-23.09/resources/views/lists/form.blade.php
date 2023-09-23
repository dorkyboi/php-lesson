@extends("main_template")

@section("title", "Create new list")

@section("body")
    <form action="{{ route("lists.store") }}" method="POST">
        @csrf
        <label>
            Title
            <input name="title" type="text" value="{{ isset($list) ? $list['title'] : "" }}" />
        </label>

        <label>
            Color
            <input name="color" type="color" />
        </label>

        <button type="submit">Submit</button>
    </form>
@endsection
