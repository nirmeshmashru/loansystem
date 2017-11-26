<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Loan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $loan;
    protected $customer;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Loan $loan,Customer $customer)
    {
        $this->loan = $loan;
        $this->customer = $customer;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_loan = $this->loan->count();
        $pending_loan = $this->loan->whereStatus('Pending')->count();
        $approved_loan = $this->loan->whereStatus('Approved')->count();
        $declined_loan = $this->loan->whereStatus('Declined')->count();
        $total_customers = $this->customer->count();
        return view('dashboard.home',
            ['total_loan'=>$total_loan,'pending_loan'=>$pending_loan,
             'approved_loan'=>$approved_loan,'declined_loan'=>$declined_loan,'total_customers'=>$total_customers]);
    }


}
