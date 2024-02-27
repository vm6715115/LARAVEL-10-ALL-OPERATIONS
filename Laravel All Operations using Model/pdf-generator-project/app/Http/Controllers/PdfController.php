<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf()
    {

        $students = Student::get();
        $data = [
            'title' => 'All Students records',
            'date' => date('d/m/Y'),
            'students' => $students
        ];
        $date = date('d/m/Y');
        $pdf = Pdf::loadView('generate-students-pdf',$data);
        return $pdf->download("All Students records $date.pdf");
    }
}
