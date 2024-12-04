@extends ('layouts.base')

@section('content')

<form action="{{  url('pokemon/'.$entity->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{pokemon->name}}" required>
    <input type="text" name=“type” placeholder=“Type”  value="{{pokemon->type}}"required>
    <input number="text" name= “power” placeholder=“Power” value="{{pokemon->power}}" required>

    <button type="submit">Create Prokemon</button>
</form>

@endsection
