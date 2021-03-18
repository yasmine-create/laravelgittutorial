<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use App\Cv;
use Auth;

use App\Http\Requests\cvRequest;

class CvController extends Controller
{
   
        public function  _construct(){
        $this->middleware('auth');}



        public function index(){
        if (Auth::user()->is_admin){
        $listcv=Cv::all();}
        else{
        $listcv=Auth::user()->cvs;}
        return view('cv.index',  ['cvs'=> $listcv]);}



        public function create() { return view('cv.create');}



        public function store(cvRequest $request){
        $cv = new Cv();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id=Auth::user()->id;//recupere id de la personne authentifier
        $cv->save();
        session()->flash('light','Le cv a été bien enregistré !!');
        return redirect('cvs');
         }



        public function edit($id){
        $cv  = Cv::find($id);
        $this->authorize('update', $cv);
        return view('cv.edit',['cv'=> $cv]); }



        public function update(cvRequest $request,$id){
        $cv=Cv::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->save();
        return redirect('cvs');                        }



        public function show($id){
        return view('cv.show',['id'=> $id]); }
      
        

       public function destroy(cvRequest $request,$id){
       $cv = Cv::find($id);
       $cv->delete();
       return redirect('cvs');                        }


       public function getExperiences($id){
       $cv = Cv::find($id);
       return  $cv->experiences()->orderBy('debut', 'desc')->get();   }




        public function addExperience(Request $request){
        $experience = new Experience;
        $experience->titre = $request->titre;
        $experience->body  = $request->body;
        $experience->debut = $request->debut;
        $experience->fin   = $request->fin;
        $experience->cv_id = $request->cv_id;
        $experience->save();
        return Response()->json(['etat' => true, 'id' => $experience->id ]);   }




        public function updateExperience(Request $request){
        $experience = Experience::find($request->id);
        $experience->titre = $request->titre;
        $experience->body  = $request->body;
        $experience->debut = $request->debut;
        $experience->fin   = $request->fin;
        $experience->cv_id = $request->cv_id;
        $experience->save();
        return Response()->json(['etat' => true]);   }



        public function deleteExperience($id){
        $experience = Experience::find($id);
        $experience->delete();
        return Response()->json(['etat' => true]);   }

}


