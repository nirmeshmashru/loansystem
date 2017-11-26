<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Loan;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    protected $customer;
    protected $loan;
    public function __construct(Customer $customer,Loan $loan)
    {
        $this->customer = $customer;
        $this->loan = $loan;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index2');
    }

    public function index1()
    {
        return view('index1');
    }
    public function Company()
    {
        return view('Company');
    }
    public function Contacts()
    {
        return view('Contacts');
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
        $customer = $this->customer->where('ssn',$request->ssn)->first();
        if($customer != ''){
            $this->loan->customer_id = $customer->id;
        }else{
            $this->customer->fill($request->all())->save();
            $this->loan->customer_id = $this->customer->id;
        }
        $this->loan->ip_address = $this->get_client_ip();
        $this->loan->status = 'Pending';
        $this->loan->fill($request->all());
        $cards = '';
        foreach ($request->credit_cards as $card){
            $cards .= $card.',';
        }
        $this->loan->credit_cards = $cards;
        if(!empty($request->joint_venture_approval)){
            $this->loan->joint_venture_approval = 1;
        }
        if(!empty($request->any_politically_influential)){
            $this->loan->any_politically_influential = 1;
        }
        if(!empty($request->summer_cottage)){
            $this->loan->summer_cottage = 1;
        }
        $this->loan->save();
        return redirect('/');
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


    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
