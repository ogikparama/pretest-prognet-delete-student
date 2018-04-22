@extends('layouts.app')

@section('title','Band')

@section('page-title','Band')

@section('dashboard-content')
    <a href="{{ URL('band/create')}}" class="btn btn-primary">
        Tambah
    </a>
	<form method="POST" action="{{ URL('band')}}" >
		{{ csrf_field() }}
	<div class="form-group">
		<label for="Name">Name</label>
	<input type="text" class="form-control" id="Name" name="Name" placeholder="Name">
	</div>
	<div class="form-group">
    <label for="Vocalist">Vocalist</label>
    <input type="text" class="form-control" id="Vocalist" name="Vocalist" placeholder="Vocalist">
	</div>
   <div class="form-group">
    <label for="Genre">Genre</label>
    <input type="text" class="form-control" id="Genre" name="Genre" placeholder="Genre">
  </div>
    <div class="form-group">
    <label for="Since">Since</label>
    <input type="text" class="form-control" id="Since" name="Since" placeholder="Since">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    
@endsection
