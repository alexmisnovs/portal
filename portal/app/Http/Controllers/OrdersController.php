<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use ultracart\v2\api\OrderApi;
use ultracart\v2\Configuration;
use ultracart\v2\HeaderSelector;
use Symfony\Component\HttpKernel\Exception\HttpException;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('orders.orders');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchOrderFromUC(Request $request){

//        dd('got here');
        Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', env('UC_SIMPLE_KEY'));
        $config = Configuration::getDefaultConfiguration();
        $headerSelector = new HeaderSelector(/* leave null for version tied to this sdk version */);

        $api_instance = new OrderApi(new Client(), $config, $headerSelector);
        $orderToGet = $request->post('order_id') ? $request->post('order_id') : "RDK-202002200711-499644"; // string | The order id to retrieve.
        $_expand = "checkout,coupon,customer_profile"; // string | The object expansion to perform on the result.  See documentation for

        try {
            $result = $api_instance->getOrder($orderToGet, $_expand);


//            echo "<pre>";
//            print_r($result);

        } catch (\Exception $e) {

            if(strstr($e->getMessage(), 'does not exist')){
                return redirect()->back()->withErrors(['api' => 'Order not found']);

                //return response()->json(['error' => $e->getMessage()], 500);
              //  echo "Order not found: " . $e->getCode();;
            }
            else{
                throw new HttpException(404, $e->getMessage());
            }

        }
        return view('orders.orders')->with('data', $result);

    }
    public function fetchUCOrder($order_id){

        Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', env('UC_SIMPLE_KEY'));
        $config = Configuration::getDefaultConfiguration();
        $headerSelector = new HeaderSelector(/* leave null for version tied to this sdk version */);

        $api_instance = new OrderApi(new Client(), $config, $headerSelector);
        $orderToGet = $order_id ? $order_id : "RDK-202002200711-499644"; // string | The order id to retrieve.
        $_expand = "checkout,coupon,customer_profile"; // string | The object expansion to perform on the result.  See documentation for

        try {
            $result = $api_instance->getOrder($orderToGet, $_expand);
            echo "<pre>";
            print_r($result);

        } catch (Exception $e) {
            echo 'Exception when calling OrderApi->getOrder: ', $e->getMessage(), PHP_EOL;
        }
    }

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
