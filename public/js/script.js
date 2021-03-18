




var app = new Vue({
    el: '#app',
    data: {
    message: 'Hello Vue !',
    experiences: [],
    open: false,
    experience: {
    id: 0,
    cv_id: window.Laravel.idExperience,
    titre: '',
    body: '',
    debut: '',
    fin: ''
    },

    edit: false
  },


  methods: {


  getExperiences: function() {
  axios.get(window.laravel.url+'/getexperiences/'+window.laravel.idExperience)
  .then(response => {
  console.log(responsedata);
  this.experiences = response.data;
  })
  .catch(error =>  {
  console.log(' errors :', error);
  })
  },


  addExperience: function() {
  axios.get(window.laravel.url+'/addexperience/',this.experience)

  .then(response => {
  if(response.data.etat) {
  this.open = false;
  this.experiences.unshift(this.experience);

  this.experience = {
  id: 0,
  cv_id: window.Laravel.idExperience,
  titre: '',
  body: '',
  debut: '',
  fin: ''
  };  } } })

  .catch(error =>  {
  console.log(' errors :', error);
  })
  },


  editExperience:function(experience){
  this.open = true;
  this.edit = true;
  },


  updateExperience:function(){
  axios.put(window.laravel.url+'/updateexperience/', this.experience)

  .then(response => {
  if(response.data.etat) {
  this.open = false;

  this.experience = {
  id: 0,
  cv_id: window.Laravel.idExperience,
  titre: '',
  body: '',
  debut: '',
  fin: ''
  };  }
  this.edit = false;    })

  .catch(error =>  {
  console.log(error);  })   },


deleteExperience:function(experience){
Swal.fire({   //sweet alert2
title: 'Are you sure?',
text: "You won't be able to revert this!",
icon: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Yes, delete it!'
}).then(() => {


axios.delete(window.laravel.url+'/deleteexperience/'+experience.id)
.then(response => {
if(response.data.etat) {
var position = this.experiences.indexOf(experience);
this.experiences.splice(position, 1); }      }) 
.catch(error =>  {
console.log(error);  })   }


   //sweet alert2
Swal(
'Deleted!',
'Your file has been deleted.',
'success'
    )
  
})

},
     



created:function () {
this.getExperiences();
 } 

 