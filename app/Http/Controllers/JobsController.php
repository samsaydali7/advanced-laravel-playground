<?php

namespace App\Http\Controllers;

use App\Jobs\CompileReport;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    //
    public function index(){
        $this->dispatch(new CompileReport(33));
        return 'ok';
    }
}
