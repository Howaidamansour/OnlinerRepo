<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;
use App\Models\SingleChoiceQuestion;
use App\Models\ProfessorSubject;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user, $subject)
    {
        $userFromDb = User::findOrFail($user)->first();
        $subjectFromDb = Subject::findOrFail($subject)->first();
        $professor_subject = 
        ProfessorSubject::where([
            ['professor_id', '=', $user],
            ['subject_id', '=', $subject]
        ])->first();
        $hasApprovalToSubject = false;
        if($professor_subject != null){
            $hasApprovalToSubject = true;
        }
        $questions = SingleChoiceQuestion::where('subject_id', $subject)->get();
        return view('questions.index', [
         'questions' => $questions,
         'user' => $userFromDb,
         'subject' =>$subjectFromDb,
         'hasApprovalToSubject' => $hasApprovalToSubject
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
