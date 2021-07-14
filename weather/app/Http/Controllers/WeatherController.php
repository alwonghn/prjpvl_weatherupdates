<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\weather;
use App\Http\Resources\WeatherResource;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use  \Illuminate\Http\Response;


class WeatherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WeatherResource::collection(weather::all());
    }

    /**
     * Display a filtered listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function weektodate()
    {
        $records=weather::where('sensor_creation_date','>=', Carbon::now()->subDays(7))->get();
        return $records;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        error_log('INTO store()');////////////////
        $record = weather::create($request->all());

        return response([
            'data' => new WeatherResource($record)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
