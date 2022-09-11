<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Packages;
use App\Models\tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // create a set of rules that requires the title and body to be present for submission
        $this->validate($request, [
            'search' => ['required', 'string']

        ]);

        $search_id = $request->input('search');

        echo $search_id;

        $number = 1;

        $client = DB::table('client')
            ->select('r_fname', 'r_lname')
            ->where('tracking',  $search_id)
            ->get();
            echo $client;

        $track = Tracking::join('client', 'c_id', '=', 'client.id')
            ->where('client.tracking',  $search_id)
            ->get(['tracking.*', 'r_fname', 'r_lname', 's_fname', 's_lname', 'r_country', 's_country', 'tracking', 'date_sent', 'arrival_date', 'progress']);

            echo $track;

        $track2 = Tracking::join('client', 'c_id', '=', 'client.id')
            ->where('client.tracking',  $search_id)
            ->get(['tracking.*', 'r_fname', 'r_lname', 's_fname', 's_lname', 'r_country', 's_country', 'tracking', 'date_sent', 'arrival_date', 'progress']);
            echo $track2;

        $package = Packages::join('client', 'client_id', '=', 'client.id')
            ->where('client.tracking',  $search_id)
            ->get(['packages.*', 'r_fname', 'r_lname', 's_fname', 's_lname']);
            echo $package;

            if ($client->count() >= 1){

        return view('pages/info_page', ['client' => $client, 'track' => $track, 'track2' => $track2, 'package' => $package, 'number' => $number]);
    }

            else{
                echo '<script type="text/javascript">
                alert("No Information Found!");
                // window.location="/";
                </script>';
                die;
            }

        //     if ($sql == True){
        //         echo '<script type="text/javascript">
        //         alert("Information has been Added!");
        //         window.location="/view_tracking_detail";
        //         </script>';
        // }
    }
}
