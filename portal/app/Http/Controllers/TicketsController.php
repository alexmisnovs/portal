<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use ultracart\v2\api\OrderApi;
use ultracart\v2\Configuration;
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

      //  include(app_path() . '/CustomLib/ultracartApi/autoload.php');

        // Configure OAuth2 access token for authorization: ultraCartOauth
       // ultracart\v2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');
        // Configure API key authorization: ultraCartSimpleApiKey
         Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', '7ef3b2f9383b97017062fdbf152ddc0077acb5a7ab376c017062fdbf152ddc00');
        // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
        // ultracart\v2\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-ultracart-simple-key', 'Bearer');

        $api_instance = new OrderApi(new Client());
        $order_id = "RDK-202002200711-499644	"; // string | The order id to retrieve.
        $_expand = "customer_profile"; // string | The object expansion to perform on the result.  See documentation for examples

        try {
            $result = $api_instance->getOrder($order_id, $_expand);
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
