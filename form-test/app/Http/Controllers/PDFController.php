<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Log;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $data = $request->all();
        
        // Log data for debugging
        Log::info($data);

        $pdf = PDF::loadView('pdf-template', [
            'activity_name' => $data['activity_name'] ?? '',
            'activity_manager' => $data['activity_manager'] ?? '',
            'manager_others' => $data['manager_others'] ?? '',
            'activity_leader' => $data['activity_leader'] ?? '',
            'leader_others' => $data['leader_others'] ?? '',
            'activity_partner' => $data['activity_partner'] ?? '',
            'partner_others' => $data['partner_others'] ?? '',
            'project_summary' => $data['project_summary'] ?? '',
            'project_objective_1' => $data['project_objective_1'] ?? '',
            'project_objective_2' => $data['project_objective_2'] ?? '',
            'project_objective_3' => $data['project_objective_3'] ?? '',
            'project_objective_4' => $data['project_objective_4'] ?? '',
            'project_objective_5' => $data['project_objective_5'] ?? '',
            'project_objective_6' => $data['project_objective_6'] ?? '',
            'scope_of_work' => $data['scope_of_work'] ?? '',
            'key_deliverables' => $data['key_deliverables'] ?? '',
            'key_deliverables_1' => $data['key_deliverables_1'] ?? '',
            'key_deliverables_2' => $data['key_deliverables_2'] ?? '',
            'key_deliverables_3' => $data['key_deliverables_3'] ?? '',
            'key_deliverables_4' => $data['key_deliverables_4'] ?? '',
            'key_deliverables_5' => $data['key_deliverables_5'] ?? '',
            'key_deliverables_6' => $data['key_deliverables_6'] ?? '',
            'open_date' => $data['open_date'] ?? '',
            'phase' => $data['phase'] ?? '',
            'file_input' => $data['file_input'] ?? '',
            'upload_gantt' => $data['upload_gantt'] ?? '',
            'activity_team' => $data['activity_team'] ?? '',
            'role' => $data['role'] ?? '',
            'responsibility' => $data['responsibility'] ?? '',
            'team_others' => $data['team_others'] ?? '',
            'comments' => $data['comments'] ?? ''
        ]);

        return $pdf->download('Activity_Management_Form.pdf');
    }
}
