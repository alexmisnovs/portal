<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Carbon;
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
     * @return \Illuminate\Http\RedirectResponse
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
        //redirect()->action('OrdersController@index', ['data' => $result]);

        return view('orders.orders')->with('data', $result);

    }
    // Auto Fetch the hold order from UC
    public function fetchUCholdOrder(Request $request){

        // validate order id
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|max:23'
        ],[
            'order_id.required' => 'Please provide order id',

        ]);

        if ($validator->fails()){
            return redirect('orders')
                ->withErrors($validator)
                ->withInput();
        }

        Configuration::getDefaultConfiguration()->setApiKey('x-ultracart-simple-key', env('UC_SIMPLE_KEY'));
        $config = Configuration::getDefaultConfiguration();
        $headerSelector = new HeaderSelector(/* leave null for version tied to this sdk version */);

        $api_instance = new OrderApi(new Client(), $config, $headerSelector);
        $orderToGet = $request->post('order_id') ? $request->post('order_id') : "RDK-202002200711-499644"; // string | The order id to retrieve.
        $_expand = "checkout,customer_profile,item,shipping,summary,fraud_score,payment,payment.transaction"; // string | The object expansion to perform on the result.  See documentation for

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
        return view('orders.orders')->with('result', $result);


//        $input = $request->all();
//        $order = Order::create($input);

//        return view('orders.orders', compact($result));
    }

    public function create()
    {
        //
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // If its a fetch then create
        if($request->post('auto_gen')){
            $date = substr($request->input('order_date'), 0, 10);
            $request->merge(['order_date' => $date]);
            echo "Received auto form " . $date ;
            dd($request->post());
        }


        $request->validate([
            'uc_order_id' => 'required|unique:orders',
            'product' => 'required',
            'customer_name' => 'required',
            'customer_email' => 'required|email',
            'action' => 'required',
            'order_date' => 'required',

        ], [
           'uc_order_id.required' => 'Please enter order id..' ,
           'uc_order_id.unique' => 'This order id already exists..' ,
        ]);

        $input = $request->all();
        $order = Order::create($input);

        return back()->with('success', 'Order added succesfully');

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
