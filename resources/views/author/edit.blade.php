@extends('admin/layout')

@section('content')

<form action="" nethod="post">
@csrf

<div class="form-field">
<label for="name">Name:</label>
<input type="text" name="name">
</div>

<div class="form-field">
<label for="birthdate">Birth year:</label>
<input type="text" name="birthdate">
</div>

<div class="form-field">
<label for="starting_year">Debut:</label>
<input type="text" name="starting_year">
</div>

<input type="submit" value="Save">
</form>

@endsection