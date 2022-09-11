<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function c_details()
    {
        $response = Http::get('https://holidayapi.com/v1/countries?key=0810acc0-1004-4735-851f-aca422f73a01');

        // collect object from json
        if ($response->ok()) {
            $data = collect($response->object()->countries)->map(function ($country, $key) {
                return [
                    'code' => $country->code,
                    'name' => $country->name,
                    'flag' => $country->flag
                ];
            })->toArray();
        }

        return view('admin/add_c_detail', ['data' => $data]);
    }

    public function p_details()
    {
        $client = DB::table('client')
            ->get();

        // collect object from json

        // echo $client;
        return view('admin/add_p_detail', ['client' => $client]);
    }

    public function add_tracking()
    {
        $client = DB::table('client')
            ->get();

        // collect object from json

        // echo $client;
        return view('admin/add_tracking', ['client' => $client]);
    }

    public function view_details()
    {
        return view('admin/view_detail');
    }

    public function view_c_details()
    {
        $client = DB::table('client')
            ->get();

        $number = '1';

        return view('admin/view_c_detail', ['client' => $client, 'number' => $number]);
    }

    public function view_p_details()
    {
        // $package= DB::table('packages')
        // ->get();

        $package = Packages::join('client', 'client_id', '=', 'client.id')
            ->get(['packages.*', 'r_fname', 'r_lname', 's_fname', 's_lname']);

        $number = '1';

        return view('admin/view_p_detail', ['package' => $package, 'number' => $number]);
    }

    public function view_tracking()
    {
        $track = Tracking::join('client', 'c_id', '=', 'client.id')
            ->get(['tracking.*', 'r_fname', 'r_lname', 's_fname', 's_lname', 'tracking', 'date_sent', 'arrival_date', 'progress']);


        // $client= DB::table('client')
        //         ->get();

        // $tracking= DB::table('tracking')
        // ->get();

        $number = '1';

        return view('admin/view_tracking_detail', ['number' => $number, 'track' => $track]);
    }
}
