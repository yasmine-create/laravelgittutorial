@extends('layouts.app')
@section('content')







<div  class="container">
<div  class="row">
<div  class="col-md-12">


<hr>
<hr>

  @if(session()->has('light'))

    <div class="alert alert-light">
        {{ session()->get('light') }}
    </div>
  @endif

<h1>La liste de mes cvs</h1>


 <div class="pull-right">
  <a class="btn btn-success" href="{{('cvs/create')}}" role="button">Nouveau cv</a>
  </div>
  <hr>

<table class="table">

  <thead>
    <tr>
      <th>Titre</th>
        <th>Presentation</th>
          <th>action</th>
    </tr>
  </thead>


  <tbody>
  @foreach ($cvs as $cv)

    <tr>
      <td> {{ $cv->titre }} <br>{{ $cv->user->name }}</td>
        <td>{{ $cv->presentation  }}</td>
          <td>{{ $cv->created_at }}</td>
            <td>


            


             <form action="{{ url('cvs/'.$cv->id) }}" method="post">

                {{ csrf_field() }}
    
               {{ method_field('DELETE') }}


               <a class="btn btn-primary" href="{{ url('cvs/'.$cv->id) }}" role="button">Show</a>
               <a class="btn btn-warning" href="{{ url('cvs/'.$cv->id.'/edit') }}" role="button">Editer</a>
             
              @can('delete',$cv)
             <button  type="submit" class="btn btn-danger" role="button">supprimer</button>
             @endcan



        
               
             </form>

            </td>
    </tr>
  @endforeach
  </tbody>
</table>



</div>
</div>
</div>

 @endsection