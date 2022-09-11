<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Client;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create a set of rules that requires the title and body to be present for submission
        $this->validate($request, [
            'r_fname' => ['required', 'string', 'max:255'],
            'r_lname' => ['required', 'string', 'max:255'],
            'r_email' => ['required', 'string', 'max:255'],
            'r_phone' => ['required', 'string', 'max:255'],
            'r_address' => ['required', 'string', 'max:255'],
            'r_city' => ['required', 'string', 'max:255'],
            'r_state' => ['required', 'string', 'max:255'],
            'r_country' => ['required', 'string', 'max:255'],
            'r_zip' => ['required', 'string', 'max:255'],
            's_fname' => ['required', 'string', 'max:255'],
            's_lname' => ['required', 'string', 'max:255'],
            's_email' => ['required', 'string', 'max:255'],
            's_phone' => ['required', 'string', 'max:255'],
            's_address' => ['required', 'string', 'max:255'],
            's_city' => ['required', 'string', 'max:255'],
            's_state' => ['required', 'string', 'max:255'],
            's_country' => ['required', 'string', 'max:255'],
            's_zip' => ['required', 'string', 'max:255'],
            'tracking' => ['required', 'string', 'max:255']
            // 'otp' => ['required', 'string', 'max:255']

        ]);

        $sql = new Client;
        $sql->r_fname = $request->input('r_fname');
        $sql->r_lname = $request->input('r_lname');
        $sql->r_email = $request->input('r_email');
        $sql->r_phone = $request->input('r_phone');
        $sql->r_address = $request->input('r_address');
        $sql->r_city = $request->input('r_city');
        $sql->r_state = $request->input('r_state');
        $sql->r_country = $request->input('r_country');
        $sql->r_zip = $request->input('r_zip');
        $sql->s_fname = $request->input('s_fname');
        $sql->s_lname = $request->input('s_lname');
        $sql->s_email = $request->input('s_email');
        $sql->s_phone = $request->input('s_phone');
        $sql->s_address = $request->input('s_address');
        $sql->s_city = $request->input('s_city');
        $sql->s_state = $request->input('s_state');
        $sql->s_country = $request->input('s_country');
        $sql->s_zip = $request->input('s_zip');
        $sql->tracking = $request->input('tracking');
        // $sql->otp = $request->input('otp');

        // echo $sql;
        $sql->save();

        if ($sql == True) {
            echo '<script type="text/javascript">
            alert("Information has been submitted!");
            window.location="/add_c_details";
            </script>';
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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

        // echo "it works";
        $client = Client::find($id);
        $id = $client->r_name;
        echo $id;

        return view('admin/edit_c_detail', ['data' => $data, "client" => $client]);
        // echo "it Works".$id;
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
        // create a set of rules that requires the title and body to be present for submission
        $this->validate($request, [
            'r_fname' => ['required', 'string', 'max:255'],
            'r_lname' => ['required', 'string', 'max:255'],
            'r_email' => ['required', 'string', 'max:255'],
            'r_phone' => ['required', 'string', 'max:255'],
            'r_address' => ['required', 'string', 'max:255'],
            'r_city' => ['required', 'string', 'max:255'],
            'r_state' => ['required', 'string', 'max:255'],
            'r_country' => ['required', 'string', 'max:255'],
            'r_zip' => ['required', 'string', 'max:255'],
            's_fname' => ['required', 'string', 'max:255'],
            's_lname' => ['required', 'string', 'max:255'],
            's_email' => ['required', 'string', 'max:255'],
            's_phone' => ['required', 'string', 'max:255'],
            's_address' => ['required', 'string', 'max:255'],
            's_city' => ['required', 'string', 'max:255'],
            's_state' => ['required', 'string', 'max:255'],
            's_country' => ['required', 'string', 'max:255'],
            's_zip' => ['required', 'string', 'max:255'],
            'tracking' => ['required', 'string', 'max:255']
            // 'otp' => ['required', 'string', 'max:255']

        ]);

        $sql = Client::find($id);
        $sql->r_fname = $request->input('r_fname');
        $sql->r_lname = $request->input('r_lname');
        $sql->r_email = $request->input('r_email');
        $sql->r_phone = $request->input('r_phone');
        $sql->r_address = $request->input('r_address');
        $sql->r_city = $request->input('r_city');
        $sql->r_state = $request->input('r_state');
        $sql->r_country = $request->input('r_country');
        $sql->r_zip = $request->input('r_zip');
        $sql->s_fname = $request->input('s_fname');
        $sql->s_lname = $request->input('s_lname');
        $sql->s_email = $request->input('s_email');
        $sql->s_phone = $request->input('s_phone');
        $sql->s_address = $request->input('s_address');
        $sql->s_city = $request->input('s_city');
        $sql->s_state = $request->input('s_state');
        $sql->s_country = $request->input('s_country');
        $sql->s_zip = $request->input('s_zip');
        $sql->tracking = $request->input('tracking');
        // $sql->otp = $request->input('otp');

        // echo $sql;
        $sql->save();

        if ($sql == True) {
            echo '<script type="text/javascript">
                alert("Information has been Updated!");
                window.location="/view_c_details";
                </script>';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Client::find($id);
        // echo $data;
        $data->delete();

        echo '<script type="text/javascript">
            alert("Info Deleted");
            window.location="/view_c_details";
            </script>';
    }
}
