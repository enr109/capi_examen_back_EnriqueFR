<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserData extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('users')
        ->join('user_domicilios','users.id','=', 'user_domicilios.user_id')->select('users.id', 'users.name', 'users.fecha_nacimiento', 'user_domicilios.domicilio')->get();

        
        for($i = 0; $i < count($data); $i++){
            $fecha = $data[$i]->fecha_nacimiento;
            $edad = Carbon::parse($fecha)->age;
            $data[$i]->edad=$edad;
            
        }

        
        
        return response()->json($data);
        
    }

    
    

    
}
