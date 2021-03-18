@extends('layouts.app')   
@section('content')



<div  class="container" id="app">
<div  class="row">
<div  class="col-md-12">

<h1> @{{ message }} </h1>

                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="row">
                    <div class="col-md-10"><h3 class="panel-title">Experience</h3></div>
                    <div class="col-md-2 text-right">
                    <button type="button" class="btn btn-success" @click="open = true">Ajouter
                    </button>

                    </div>
                    </div>
                    </div>

                    <div class="panel-body" >


                    <div v-if="open"> 

                            <div class="form-group">
                            <label>Titre :</label>
                            <input type="text" class="Form-control" placeholder="le Titre" v-model="experience.titre">
                            </div>
                           

                            <div class="Form-group">
                            <label>Body : </label>
                            <textarea name="body" class="form-control" placeholder="le contenu"v-model="experience.body">
                            </textarea>            
                            </div>
                        


                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>Date Debut</label>
                            <input type="date" class="Form-control" placeholder="Debut"v-model="experience.debut">
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                            <label>Date Fin </label>
                            <input type="date" class="from-control" placeholder="Fin"v-model="experience.fin">
                            </div>
                            </div>
                            </div>

                            <button  v-if="edit"    class="btn btn-danger btn-block" 
                            @click="updateExperience">Modifier</button>

                            <button  v-else         class="btn btn-info btn-block"  
                            @click="addExperience">Ajouter </button>
                    </div>


                    <ul class="list-group">
                    <li class="list-group-item" v-for="experience in experiences" >
                    <div class="pull-right">

                    <button   class="btn btn-warning btn-sm"    @click="editExperience(experience)">
                    Editer </button>

                    <button  class="btn btn-danger btn-sm"     @click="deleteExperience(experience)">
                     Supprimer </button>

                   </div>

                   <h3>@{{ experience.titre }}</h3>
                   <p> @{{ experience.body }}</p>
                   <small>@{{ experience.debut }} - @{{ experience.fin }}</small>

                   </li>
                   </ul>
                   </div>
                   </div>


<hr>

<div class="panel panel-primary">
<div class="panel-heading">
<div  class="row">
<div  class="col-md-10">
<h3  class="panel-title">Portfolio</h3>
</div>
<div  class="col-md-2 text-right">
<button class="btn btn-success">Ajouter</button>
</div>
</div>
</div>
<div class="panel-body">	
<ul class="list-group">
<li class="list-group-item">
<div  class="pull-right">
<button class="btn btn-warning btn-sm">Editer</button>
</div>	
<br>
<h3>ipsum dolor sit amet, con</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud </p>
<small>12/03/2020 - 03/10/2021</small>
</li>
</ul>
</div>
</div>


<hr>


<div class="panel panel-primary">
<div class="panel-heading">
<div  class="row">
<div  class="col-md-10">
<h3  class="panel-title">Formation</h3>
</div>
<div  class="col-md-2 text-right">
<button class="btn btn-success">Ajouter</button>
</div>
</div>
</div>
<div class="panel-body">
<ul class="list-group">
<li class="list-group-item">
<div  class="pull-right">
<button class="btn btn-warning btn-sm">Editer</button>
</div>	
<br>
<h3>ipsum dolor sit amet, con</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud </p>
<small>12/03/2020 - 03/10/2021</small>
</li>
</ul>
</div>
</div>

<hr>

<div class="panel panel-primary">
<div class="panel-heading">
<div  class="row">
<div  class="col-md-10">
<h3  class="panel-title">Competence</h3>
</div>
<div  class="col-md-2 text-right">
<button class="btn btn-success">Ajouter</button>
</div>
</div>
</div>
<div class="panel-body">
<ul class="list-group">
<li class="list-group-item">
<div  class="pull-right">
<button class="btn btn-warning btn-sm">Editer</button>
</div>	
<br>
<h3>ipsum dolor sit amet, con</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud </p>
<small>12/03/2020 - 03/10/2021</small>
</li>
</ul>
</div>
</div>

<hr>

</div>
</div>
</div> 
@endsection


@section('javascripts')
<script  src="{{ asset('js/vue.js') }}"> </script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>

<script>
window.Laravel = {!! json_encode([
'csrfToken' => csrf_token(),
'idExperience' => $id,
'url'          =>('/')
 ]) !!};
</script>


<script src="{{ asset('js/script.js') }}"></script>
@endsection














