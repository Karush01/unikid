<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function getTeacherDashboardData()
    {
        return view('dashboard.teachers.t_personal_account');
    }

    public function getStudentInformation()
    {
        return view('dashboard.teachers.teacher_student_page');
    }

    public function getInformationAboutBalance()
    {
        return view('dashboard.teachers.t_balance');
    }

    public function editTeacherAccount()
    {
        return view('dashboard.teachers.t_account_settings');
    }
}
