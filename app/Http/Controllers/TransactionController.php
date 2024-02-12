<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', ['transaction' => $transaction]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        $formFields = $request->validate([
            'date_posted' => 'required',
            'narration' => 'required',
            'credit' => 'nullable',
            'debit' => 'nullable',
        ]);

        $transaction->update($formFields);

        return redirect()->route('dashboard');
    }


    public function updateTransfer(Request $request)
    {
        $request->validate([
            'source_account' => 'required',
            'amount' => 'required',
            'bank_name' => 'required',
            'account_number' => 'required',
            'routing_number' => 'required',
            'bank_address' => 'required',
            'reference' => 'required'
        ]);

        return redirect()->route('transfer.update')->with('message', 'Try again');
        
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
