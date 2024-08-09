<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Log;

class WordController extends Controller
{
    public function generatePDF(Request $request)
    {
        $data = $request->all();
        
        // Log data for debugging
        Log::info($data);

        $pdf = PDF::loadView('word-template', [
            'accomplishment_type' => $data['accomplishment_type'] ?? '',
            'period' => $data['period'] ?? '',
            'acc_others' => $data['acc_others'] ?? ''
        ]);

        return $pdf->download('Accomplishment_Form.pdf');
    }
}
