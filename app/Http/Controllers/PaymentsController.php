<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use App\Models\ShipmentDetails;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;

class PaymentsController extends Controller
{
    public function storeShipmentAddress(Request $request): RedirectResponse
    {
        $shipment = new ShipmentDetails();
        $shipment->fill($request->all());
        $shipment->save();

        $email = $request->get('shipping_email');
        Mail::to($email)->send(new VerifyEmail($shipment));

        return redirect()->to('/payments');
    }

    public function verifyEmail(Request $request, $shipmentID)
    {
        $shipmentDetails = ShipmentDetails::find($shipmentID);
        $user = new User();
        $user->name = $shipmentDetails->user_first_name;
        $user->email = $shipmentDetails->shipping_email;
        $user->password = 'Support_1234';
        $user->email_verified_at = Carbon::now();
        $user->save();
    }


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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
