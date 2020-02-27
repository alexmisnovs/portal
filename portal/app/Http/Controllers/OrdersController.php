<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\DB;
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
            $orders = Order::paginate(10);
            return view('orders.orders')->with('orders', $orders);

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
        $_expand = "affiliate,affiliate.ledger,auto_order,billing,buysafe,channel_partner,checkout,coupon,customer_profile,digital_order,edi,fraud_score,gift,gift_certificate,internal,item,linked_shipment,marketing,payment,payment.transaction,quote,salesforce,shipping,summary,taxes"; // string | The object expansion to perform on the result.  See documentation for
        //$_expand = "checkout,customer_profile,item,shipping,summary,fraud_score,payment,payment.transaction,marketing"; // string | The object expansion to perform on the result.  See documentation for

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
//            echo "Received auto form " . $date ;
//            dd($request->post());

            $validator = Validator::make($request->all(), [
                'uc_order_id' => 'required|unique:orders',
            ],[
                'uc_order_id.unique' => 'This order already exists in the system',
            ]);

            if ($validator->fails()){
                return redirect('orders')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        else{
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
        }
      //  dd($request->all());
        if($request->post('auto_gen')) {
            $input = $request->except('auto_gen');
        }else{
            $input = $request->all();
        }

        $passed_date  = $request->post('order_date');
        if (strpos($passed_date, '/') !== false) {
            $passed_date = str_replace('/', '-', $passed_date);
        }

// Creating timestamp from given date
        $timestamp = strtotime($passed_date);

// Creating new date format from that timestamp
        $new_date = date("Y-m-d", $timestamp);


        $request->merge(['order_date' => $new_date]);
        $order = Order::create($request->all());

        return redirect('orders');
       // return back()->with('success', 'Order added succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //get order
        $order = Order::findOrFail($id);
        return view('orders.edit')->with('order', $order);
        //  return view('orders.show', compact($order));
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

        Order::where('id', $id)->update($request->except('_token'));
        return redirect('orders');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete the record
        $order = Order::findOrFail($id);
        $deleted = $order->delete();

       // TODO: Do notify user that the record was deleted
        return redirect('orders');
    }
    public function searchGet($searchTerm){

       $result = Order::query()
            ->where('customer_name', 'LIKE', "%{$searchTerm}%")
            ->orWhere('customer_email', 'LIKE', "%{$searchTerm}%")
           ->orWhere('uc_order_id', 'LIKE', "%{$searchTerm}%")
           ->orWhere('action', 'LIKE', "%{$searchTerm}%")
            ->get();


        return view('orders.search', compact($result));
    }

    public function search(Request $request){

        if($request->isMethod('post')){

            $orders = DB::table('orders')
                ->where(function($query) use ($request)
                {

                    if($request->post('uc_order_id') != null) {
                        $searchTerm = $request->post('uc_order_id');
                        $query->where('uc_order_id', 'LIKE', "%{$searchTerm}%");
                    }
                    // name and a specific status
                    if($request->post('customer_name') != null && $request->post('action') != null) {
                        $searchTerm1 = $request->post('customer_name');
                        $searchTerm2 = $request->post('action');
                        $query->Where('customer_name', 'LIKE', "%{$searchTerm1}%")
                            ->Where('action', 'LIKE', "%{$searchTerm2}%");
                    }
                    // name and any status
                    if($request->post('customer_name') != null) {
                        $searchTerm = $request->post('customer_name');
                        $query->Where('customer_name', 'LIKE', "%{$searchTerm}%");
                    }
                    //email and specific status
                    if($request->post('customer_email') != null && $request->post('action') != null) {
                        $searchTerm1 = $request->post('customer_email');
                        $searchTerm2 = $request->post('action');
                        $query->Where('customer_name', 'LIKE', "%{$searchTerm1}%")
                            ->Where('action', 'LIKE', "%{$searchTerm2}%");
                    }
                    // just by email all statuses
                    if($request->post('customer_email') != null) {
                        $searchTerm = $request->post('customer_email');
                        $query->Where('customer_email', 'LIKE', "%{$searchTerm}%");
                    }
                    if($request->post('action') != null) {
                        $searchTerm = $request->post('action');
                        $query->Where('action', 'LIKE', "%{$searchTerm}%");
                    }

                })
                ->get();
            return view('orders.search')->with('orders', $orders);

        }
         else {
            $orders = null;
            return view('orders.search')->with('orders', $orders);
        }


      //  dd($result);
    }

}
