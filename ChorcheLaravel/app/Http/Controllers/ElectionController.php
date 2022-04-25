<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Election;

class ElectionController extends Controller
{
    //
    public function save(Request $request){
        $data = $request->all();
        $election = Election::create([
            'election_name'     => $data['election_name'],
            'start_date'        => $data['start_date'],
            'end_date'          => $data['end_date'],
            'start_time'        => $data['start_time'],
            'end_time'          => $data['end_time'],
            'election_position' => $data['election_position'],
            'status'            => 'inprocess',
        ]); 
        $election->save();
        if($election)
        {
            return response()->json([
                'success' => true,
                'message' => 'Election Created Successfully'
            ],200);
        }
    } 
}
