<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class RestController extends Controller
{
    public function index($table)
    {
        $l = DB::table($table)->get();
        return response()->json($l);
    }

    public function store(Request $request, $table)
    {
        $r = $request->all();
        $r['created_at'] = \Carbon\Carbon::now();
        $r['updated_at'] = \Carbon\Carbon::now();
        $l['result'] = DB::table($table)->insertGetId($r);
        return response()->json($l);
    }

    public function show($table, $id)
    {
        $l = DB::table($table)->where('id', '=', $id)->first();
        return response()->json($l);
    }

    public function update(Request $request, $table, $id)
    {
        $r = $request->all();
        $r['updated_at'] = \Carbon\Carbon::now();
        $l['result'] = DB::table($table)->where('id', '=', $id)->update($r);
        return response()->json($l);
    }

    public function destroy($table, $id)
    {
        $l['result'] = DB::table($table)->where('id', '=', $id)->delete();
        return response()->json($l);
    }
}
