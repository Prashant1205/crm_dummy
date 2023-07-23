<?php

namespace App\Http\Controllers;

use Auth;
use JWTAuth;
use App\User;
use App\Models\Escalation;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Http\Request;

class EscalationController extends Controller
{
    public function index()
    {
        $alldata = Escalation::paginate(5);
        return response()->json(["alldata"=>$alldata]);
    }
}

