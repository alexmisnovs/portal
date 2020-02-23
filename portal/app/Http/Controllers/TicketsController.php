<?php

namespace App\Http\Controllers;

use Huddle\Zendesk\Facades\Zendesk;
use Illuminate\Http\Request;



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

    public function findZendeskTicketByEmail($customer_email){
        // Get all tickets
        //first find customer by email. https://rdkglobal.zendesk.com/api/v2/users/search.json?query=email:singhanita41@yahoo.com
        $params = array('query' => $customer_email);
        $search =  Zendesk::users()->search($params);

        if (empty($search->users)) {
            echo 'This email adress could not be found on Zendesk.';
        } else {
            foreach ($search->users as $UserData) {
                echo "<pre>";
                print_r($UserData);
                echo "</pre>";
            }
        }
       // Zendesk::tickets()->users($requesterId)->tickets()->requested();
    }

    public function createTicket(){

        Zendesk::tickets()->create([
            'subject' => 'Alex ticket',
            'comment' => [
                'body' => 'API ticket test.'
            ],
            'priority' => 'normal'
        ]);
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
