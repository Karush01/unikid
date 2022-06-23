<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentsController extends Controller
{

    public function getInformationAboutBalance()
    {
        return view('dashboard.students.s_balance');
    }

    public function editStudentAccount()
    {
        $user = Auth::user();
        $student_update = Student::where('user_id', $user->id)->get();
        return view('dashboard.students.s_account_settings',['data'=>$student_update]);
    }

    public function updateStudentProfileData(Request $request)
    {
        $user = Auth::user();
        $form_data = $request->input('form_data');
        $student_update = Student::where('user_id', $user->id)->update(
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
                'admin_comments' => $form_data['admin_comments']
            )
        );
        return response()->json(['ok' => 'ok']);
//        return redirect('/student/account-settings');
    }
}
