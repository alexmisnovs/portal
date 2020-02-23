<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use ultracart\v2\api\OrderApi;
use ultracart\v2\Configuration;
use ultracart\v2\HeaderSelector;
class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        dd(\request());
       // dd($oder_id);
    }

    public function ucApiGetOrder($oder_id){


        Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', env('UC_SIMPLE_KEY'));
        $config = Configuration::getDefaultConfiguration();
        $headerSelector = new HeaderSelector(/* leave null for version tied to this sdk version */);

        $api_instance = new OrderApi(new Client(), $config, $headerSelector);
        $orderToGet = $oder_id ? $oder_id : "RDK-202002200711-499644"; // string | The order id to retrieve.
        $_expand = "checkout,coupon,customer_profile"; // string | The object expansion to perform on the result.  See documentation for

        try {
            $result = $api_instance->getOrder($orderToGet, $_expand);
            echo "<pre>";
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
        }
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
