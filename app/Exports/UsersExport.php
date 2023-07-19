<?php

namespace App\Exports;

use App\Models\StudentExam;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, WithHeadings, WithMapping

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return StudentExam::with('userInfo')->where('status',1)->get();
    }

     public function headings(): array
    {
        return [
            'Id',
            'Registor Number',
            'Student User Id',
            'Password',
            'Name',
        ];
    }

    public function map($user): array
    {
        
        return [
            $user->id,
            $user->userInfo->register_no,
            $user->student_user_id,
            $user->student_password,
            $user->userInfo->f_name,
   
        ];
    }
}
