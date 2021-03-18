<div class="container" id="app">
   <div class="row">
       <div class="col-md-12">
           <div class="panal-heading">
                <div class="panel panal-heading">
                    <div class="row">
                        <div class="col-md-10">
                                <h3 class="panel-title">Experience </h3>

                        </div>
                    </div>
                 </div>   
  </div>
  </div>   
</div>
</div>


<div class="col-md-2">  
    <button class="btn btn-success" @ click="open=true">Ajouter</button>
    <div class="panel-body">
        <div V-if="open.experience">
            <form V-on: sub mit.prevent="validateForm ('formExperince')" data-vv-scope="fromExperience">
                <div : class="{'form-group' : true,'has-error':errors.has('formExperience.titre')}">
                    <label for="">Title</label>
                        <input name="title" type="text" V-validate="'required'" class="form-control"
                            place holder="letitre" v-model="experince.titre">
                    
                    <label class="control-label" v-show="errors.has('fotmeExperience.titre')">@{{erreurs.first('fromExperience.titre')}}</label>
                </div>
             
                <div class="Form-group">
                   <label>Body</label>
                    <textarea v-validate="  |min:5|max:255" name="body" class="form-control" placeholder="le conten" V-model="experince.body"  ></textarea>             </div>
                     <span V-show="errors.has ('formExperience.body')">@{{errors.first('formExperience.body')}}</span>

                      </div>

                   <div class="row">
                       <div class="col-md-6">
                          <div class="form-group">
                            <label >Date Debut</label>
                            <input type="date" class="Form-control" placeholder="Debut" V-model="experience.debut">
                          </div>
                      </div>

                       <div class="col-md-6">
                            <div class="form-group">
                                <label >Date Fin </label>
                                    <input type="date" class="from-control" placeholder="Fin" V-model="experience.Fin" >

                            </div>
                        </div>
                   </div>

                    <div class="btn-group">
                        <button V-if="edit.experience" class="btn btn-danger"
                        a click="updateExperience">Modifier</button>
                        <button type="submit" V-else class="btn btn-info">Ajouter</button>
                        <button class="btn btn-default" @click="open.experience = false">Fermer </button>

                    </div>

                    <hr>
                </div>
            </form>
        </div>
        <ul class="list-groupe">
            <li class="list-group-item" V-for="experience in experiences">
                <div class="pull-right">
                    <button class="btn btn-warnning btn-sm" @ click="editExperience(experience) "> Editer </button>
                    <button class="btn btn-danger btn-sm" @ click="deleteExperience(experience)"> Supprimer</button>

                </div>
                <h3>@ {{experince.titre}}</h3>
                <p>@ {{experience.body}}</p>
                <small> @ {{experience.debut}}-{{experience.fin}}</small>
            
        
                <h3>@ {{experince.titre}}</h3>
                <p>@{{experience.body}}</p>
                 <small>@{{experience.debut}}-{{experience.fin}}</small>
            </li>  
        </ul>     
    </div>    
    <hr>
    @ section('Java script')
    <script src="{{asset('JS/vue.js')}}"></script>            
    <script src="{{asset('JS/vueValidate.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>

    <script >
        Vue.use(vueValidate);
        window.laravel={!! Json_encode({
            'csrfToken'=> csrf-token(),
            'idExperience'=>$id,
            'url'=> url('/'),
        }) !!};
    </script>
    <script src="{{asset('JS/script.js')}}"></script>
     a endsection




</div>









<div class="">

</div>
<div class="col-md-12">

</div>
<div class="fill-group">

</div>