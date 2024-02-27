<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::select('id','name','email','password','class','language','gender','phone','address')->get();
    }
    public function headings(): array
    {
        return ['id','name','email','password','class','language','gender','phone','address',];
    }
}
