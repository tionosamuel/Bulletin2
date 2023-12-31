<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;
use Exception;
class CreateEleve extends Component
{
    public $matricule;
    public $nom;
    public $prenom;
    public $naissance;
    public $genre;
    public $contact_parent;
    public function store(Student $student)
    {
        $this->validate([
            'matricule' => 'string|required|unique:students,matricule',
            'nom' => 'string|required',
            'prenom' => 'string|required',
            'genre' => 'string|required',
            'naissance' => 'string|required',
            'contact_parent' => 'string|required',
        ]);
        try {


            $student->matricule = $this->matricule;
            $student->nom = $this->nom;
            $student->prenom = $this->prenom;
            $student->genre = $this->genre;
            $student->naissance = $this->naissance;
            $student->contact_parent = $this->contact_parent;

            $student->save();

            return redirect()->route('students')->with('success', 'Eleve ajoutée');
        } catch (Exception $e) {
            //Sera pris en compte si on a un problème
        }
    }
    public function render()
    {
        return view('livewire.create-eleve');
    }
}
