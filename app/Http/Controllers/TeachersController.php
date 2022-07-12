<?php

namespace App\Http\Controllers;

use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeachersController extends Controller
{
    public function getTeacherDashboardData()
    {
        $students = Student::all();
        return view('dashboard.teachers.t_personal_account',['students'=>$students]);
    }

    public function getStudentInformation($id)
    {
        $student = Student::where('user_id', $id)->first();
        return view('dashboard.teachers.teacher_student_page',['student'=>$student]);
    }

    public function getInformationAboutBalance()
    {
        return view('dashboard.teachers.t_balance');
    }



    public function editTeacherAccount()
    {
        $user = Auth::user();
        $teacher_update = Teacher::where('user_id', $user->id)->first();
        if (!empty($teacher_update)){
            $data = $teacher_update;
        }else{
            $data = '0';
        }
        return view('dashboard.teachers.t_account_settings',['data'=>$data]);
    }

    public function updateTeacherProfileData(Request $request)
    {
        $user = Auth::user();
        $form_data = $request->input('form_data');

        $teacher_update = Teacher::where('user_id', $user->id)->updateOrCreate(
            array(
                'name' => $form_data['name'],
                'email' => $form_data['email'],
                'untie_email' => '',
                'skype' => $form_data['skype'],
                'teaching_profession' => $form_data['teaching_profession'],
                'child_name' => $form_data['child_name'],
                'child_gender' => $form_data['child_gender'],
                'child_age' => $form_data['child_age'],
                'birth_date' => $form_data['birth_date'],
                'phone' => $form_data['phone'],
                'another_phone' => $form_data['another_phone'],
                'interface_language' => $form_data['interface_language'],
                'time_zone' => $form_data['time_zone'],
                'child_hobbies' => $form_data['child_hobbies'],
                'wishes_for_training' => $form_data['wishes_for_training'],
                'study_notes' => $form_data['study_notes'],
                'image' => '',
                'admin_comments' => $form_data['admin_comments'],
                'user_id' => $user->id
            )
        );
        return response()->json(['ok' => 'ok']);
//        return redirect('/student/account-settings');
    }

}
