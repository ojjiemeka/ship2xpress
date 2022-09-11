<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking;


class TrackingController extends Controller
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
            'date_sent' => ['required', 'date'],
            'arrival_date' => ['required', 'date'],
            'progress' => ['required', 'integer'],
            'c_id' => ['required', 'integer'],

        ]);

        $sql = new Tracking;
        $sql->date_sent = $request->input('date_sent');
        $sql->arrival_date = $request->input('arrival_date');
        $sql->progress = $request->input('progress');
        $sql->c_id = $request->input('c_id');

        // echo $sql;
        $sql->save();

        if ($sql == True) {
            echo '<script type="text/javascript">
                alert("Information has been Added!");
                window.location="/view_tracking_detail";
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
        $track = Tracking::find($id);
        // $id = $client->r_name;
        // echo $id;

        return view('admin/edit_tracking_detail', ["track" => $track]);
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
            'date_sent' => ['required', 'date'],
            'arrival_date' => ['required', 'date'],
            'progress' => ['required', 'integer'],
            // 'c_id' => ['required', 'integer'],

        ]);

        $sql = Tracking::find($id);
        $sql->date_sent = $request->input('date_sent');
        $sql->arrival_date = $request->input('arrival_date');
        $sql->progress = $request->input('progress');
        // $sql->c_id = $request->input('c_id');

        // echo $sql;
        $sql->save();

        if ($sql == True) {
            echo '<script type="text/javascript">
                alert("Information has been Added!");
                window.location="/view_tracking_detail";
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
        $data = Tracking::find($id);
        // echo $data;
        $data->delete();

        echo '<script type="text/javascript">
            alert("Info Deleted");
            window.location="/view_tracking_detail";
            </script>';
    }
}
