<?php

namespace App\Http\Controllers\Admin;



use Illuminate\Http\Request;
use App\Services\TeacherService;
use App\Mail\ResultatFormateurMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class GestionFormateurController extends Controller
{

    protected $teacherService ;
        public function __construct(TeacherService $teacherService)
    {
        $this->teacherService  = $teacherService ;
        $this->middleware(['admin', 'auth']);
    }

    /**
     * Affichage des formateurs verifiés et non vérifiés.
     */
    public function enableTeacher()
    {
        return view('admin.formateurs.listeEnable', [
            'allTeachers' => $this->teacherService->teacherVerified(),
        ]);
    }

    public function disableTeacher()
    {
        return view('admin.formateurs.listeDisable', [
            'teachers' => $this->teacherService->teacherNotVerified()
        ]);
    }

    /**
     * Affichage de de chaque formateur.
     */
    public function show(string $id)
    {
        return view('admin.formateurs.detail', [
            'formateur' => $this->teacherService->show($id)
        ]);
    }

        /**
     * Confirmation du status de la candidature.
     */

    public function confirmatedCandidature(Request $request) {

       $formateur =  $this->teacherService->show($request->formateur_id);
        // $formateur = Formateur::findOrFail($request->formateur_id);
        $formateur->status= $request->status;
        $formateur->save();
        Mail::to($formateur->user->email)->send(new ResultatFormateurMail());

        return response()->json(['message' => 'User status updated successfully.']);

    }

}
