<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;
use Illuminate\Support\Facades\Validator;
use Session;

class ResumeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createResume(){
        $user = \Auth::user();
        return view('resume.createResume')->with('user', $user);
    }
    public function createResumePost(Request $request){

        $params = $request->only('first_name', 'last_name', 'email', 'address', 'postal', 'phone', 'mobile', 'personal_statement', 'key_skills',
            'college_name', 'education_city', 'education_start_date', 'education_end_date',
            'job_title', 'company_name', 'company_city', 'work_start_date', 'work_end_date');

        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        } else {
            $userId = \Auth::id();
            $params['user_id'] = $userId;

            $params['education'] = [];
            for($i= 0; $i < count($params['college_name']); $i++){
                $params['education'][] = [
                    'college_name' => $params['college_name'][$i],
                    'education_city' => $params['education_city'][$i],
                    'education_start_date' => $params['education_start_date'][$i],
                    'education_end_date' => $params['education_end_date'][$i]
                ];
            }

            $params['work_experience'] = [];
            for($i= 0; $i < count($params['job_title']); $i++){
                $params['work_experience'][] = [
                    'job_title' => $params['job_title'][$i],
                    'company_name' => $params['company_name'][$i],
                    'company_city' => $params['company_city'][$i],
                    'work_start_date' => $params['work_start_date'][$i],
                    'work_end_date' => $params['work_end_date'][$i]
                ];
            }

            Resume::create($params);
            return redirect(route('welcome'));
        }


    }
}
