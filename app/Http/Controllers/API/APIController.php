<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Division;
use App\Models\Hub;
use App\Models\Position;
use App\Models\Salary;
use App\Models\WorkDay;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function positions(Request $request)
    {
        if ($request->ajax()) {
            $positions = Position::where('company_id', auth()->user()->company_id)->get();
            $array = array();
            foreach ($positions as $items => $key) {
                $array[] = array(
                    "id" => $key->id,
                    "text" => $key->name,
                    "selected" => (isset($request->position) && $request->position == $key->id ? true : false)
                );
            }
            return response()->json($array);
        }
        abort(404);
    }

    public function hubs(Request $request)
    {
        if ($request->ajax()) {
            $hubs = Hub::where('company_id', auth()->user()->company_id)->get();
            $array = array();
            foreach ($hubs as $items => $key) {
                $array[] = array(
                    "id" => $key->id,
                    "text" => $key->name,
                    "selected" => (isset($request->hub) && $request->hub == $key->id ? true : false)
                );
            }
            return response()->json($array);
        }
        abort(404);
    }

    public function divisions(Request $request)
    {
        if ($request->ajax()) {
            $divisions = Division::where('company_id', auth()->user()->company_id)->get();
            $array = array();
            foreach ($divisions as $items => $key) {
                $array[] = array(
                    "id" => $key->id,
                    "text" => $key->name,
                    "selected" => (isset($request->division) && $request->division == $key->id ? true : false)
                );
            }
            return response()->json($array);
        }
        abort(404);
    }

    public function salaries(Request $request)
    {
        if ($request->ajax()) {
            $salaries = Salary::where('company_id', auth()->user()->company_id)->get();
            $array = array();
            foreach ($salaries as $items => $key) {
                $array[] = array(
                    "id" => $key->id,
                    "text" => $key->city_name . ' (Rp. ' . number_format($key->total, 0) . ')',
                    "selected" => (isset($request->salary) && $request->salary == $key->id ? true : false)
                );
            }
            return response()->json($array);
        }
        abort(404);
    }

    public function workdays(Request $request)
    {
        if ($request->ajax()) {
            $workdays = WorkDay::where('company_id', auth()->user()->company_id)->get();
            $array = array();
            foreach ($workdays as $items => $key) {
                $array[] = array(
                    "id" => $key->id,
                    "text" => $key->name,
                    "selected" => (isset($request->workday) && $request->workday == $key->id ? true : false)
                );
            }
            return response()->json($array);
        }
        abort(404);
    }
}