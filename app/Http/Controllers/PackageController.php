<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;

class PackageController extends Controller
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
            'item' => ['required', 'string', 'max:255'],
            'serial' => ['required', 'string', 'max:255'],
            'quantity' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'total' => ['required', 'string', 'max:255'],
            'client_id' => ['required', 'integer', 'max:255'],

        ]);

        $sql = new Packages;
        $sql->item = $request->input('item');
        $sql->serial = $request->input('serial');
        $sql->quantity = $request->input('quantity');
        $sql->price = $request->input('price');
        $sql->total = $request->input('total');
        $sql->client_id = $request->input('client_id');

        // echo $sql;
        $sql->save();

        if ($sql == True) {
            echo '<script type="text/javascript">
                    alert("Information has been Added!");
                    window.location="/add_p_details";
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
        // echo "it works";
        $data = Packages::find($id);
        $id = $data->id;
        // echo $id;
        $package = Packages::join('client', 'client_id', '=', 'client.id')
            ->get(['packages.*', 'r_fname', 'r_lname', 's_fname', 's_lname']);

        //  echo $name;

        return view('admin/edit_p_detail', ['data' => $data, 'package' => $package]);
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
            // 'item' => ['required', 'string', 'max:255'],
            // 'serial' => ['required', 'string', 'max:255'],
            // 'quantity' => ['required', 'string', 'max:255'],
            // 'price' => ['required', 'string', 'max:255'],
            // 'total' => ['required', 'string', 'max:255'],
            // 'client_id' => ['required', 'integer', 'max:255'],

        ]);

        $sql = Packages::find($id);
        $sql->item = $request->input('item');
        $sql->serial = $request->input('serial');
        $sql->quantity = $request->input('quantity');
        $sql->price = $request->input('price');
        $sql->total = $request->input('total');
        $sql->client_id = $request->input('client_id');

        // echo $sql;
        $sql->save();

        if ($sql == True) {
            echo '<script type="text/javascript">
                    alert("Information has been Added!");
                    window.location="/view_p_details";
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
        $data = Packages::find($id);
        // echo $data;
        $data->delete();

        echo '<script type="text/javascript">
            alert("Info Deleted");
            window.location="/view_p_details";
            </script>';
    } //

}
