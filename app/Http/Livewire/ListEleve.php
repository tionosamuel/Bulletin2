<?php
namespace App\Http\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Student;
class ListEleve extends Component
{
     use WithPagination;

    public $search = '';


    public function delete(Student $student)
    {
        $student->delete();
        return redirect()->route('students')->with('success', 'Eleve supprimé');
    }



    public function render()
    {
        if (!empty($this->search)) {
            $students = Student::where('nom', 'like', '%' . $this->search . '%')->orWhere('prenom', 'like', '%' . $this->search . '%')->paginate(10);
        } else {



            $students = Student::paginate(10);
        }
        return view('livewire.liste-eleve', compact('students'));
    }
}
