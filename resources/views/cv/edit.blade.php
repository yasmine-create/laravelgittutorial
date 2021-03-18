@extends('layouts.app')
@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">

<form action="{{ url('cvs/'.$cv->id) }}" method="post">

<input type="hidden" name="_method" value="PUT">
	
	
  {{ csrf_field() }}

	
<div class="form-group">
 <label>Titre</label>
<input type="text" name="titre" class="form-control"    value="{{ $cv->titre }}">

</div>


<div class="form-group">
<label>presentation</label>
<textarea class="form-control" type="text" name="presentation"> {{ $cv->presentation }}
</textarea>

</div>

<div class="form-group">
<label>Image</label>
<input class="form-control"  type="file" name="photo">
</div>


<div class="form-group">
<input type="submit" class="form-control  btn btn-danger" value="Modifier">
</div>

</form>

</div>
</div>
</div>

@endsection