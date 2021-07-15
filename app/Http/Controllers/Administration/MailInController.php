<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Events\CreatedMailInProcess;
use App\Http\Requests\MailInRequest;
use App\Http\Requests\UserRequest;
use App\Models\Mail;
use App\Models\MailAttribute;
use App\Models\MailAttributeTransaction;
use Illuminate\Http\Request;

class MailInController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Mail $mail)
    {
        $page = 'Masuk';
        $mails = $mail->latest()->where('type', 'IN')->paginate(10);
        return view('mails.index', compact('mails', 'page'))
            ->with('i', (\request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page = 'Buat Surat';
        $sifat = MailAttribute::get()->where('type', 'Sifat');
        $tipe = MailAttribute::get()->where('type', 'Tipe');
        $prioritas = MailAttribute::get()->where('type', 'Prioritas');
        return view('mails.create')->with(compact('page', 'sifat', 'tipe', 'prioritas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MailInRequest $request)
    {
        $mail = new Mail();
        $mail->type = Mail::TYPE_IN;
        $mail->title = $request->title;
        $mail->code = $request->code;
        $mail->directory_code = $request->directory_code;
        $mail->instance = $request->instance;
        $mail->mail_created_at = $request->mail_created_at;
        $mail->save();

        event(new CreatedMailInProcess($mail, $request));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mails = Mail::get()->where('id', $id);
        $mails_attributes = MailAttribute::get();
        $mails_attributes_transaction = MailAttributeTransaction::get()->where('mail_id', $id);
        return view('mails.show')->with(compact('mails', 'mails_attributes', 'mails_attributes_transaction'));
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
