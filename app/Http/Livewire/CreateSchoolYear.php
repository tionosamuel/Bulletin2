<?php

namespace App\Http\Livewire;

use App\Models\SchoolYear;
use Carbon\Carbon;
use Exception;
use Livewire\Component;

class CreateSchoolYear extends Component
{     
   public $libelle;

   public function store(SchoolYear $schoolYear)
   {
    $this->validate([
        'libelle'=>'string|required|unique:school_years,school_year'
    ]);
   try{

  $currentYear = Carbon:: now()->format('Y');

  $check = SchoolYear::where('current_Year', $currentYear)
  ->get();

  // $alreadyExist = $check->count();

  // if($alreadyExist >= 1){

  //   return redirect()->back()->with('error', 'l-annee en cour a déjà été Ajouter');

  // }else
  {

    $schoolYear->school_year= $this->libelle;
    $schoolYear->current_Year = $currentYear;
  
    $schoolYear->save();
  
     if ($schoolYear){
      $this->libelle = '';
     }
    return redirect()-> back()->with('success','Annee scolaire 
    Ajouter');
  }
    

   }catch(Exception $e) {
    //sera pris en compte sin on a un probleme

   }
    
   }
    public function render()
    {
        return view('livewire.create-school-year');
    }
}
