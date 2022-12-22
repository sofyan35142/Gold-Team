<?php

namespace App\Http\Controllers;

use App\Mail\kirimemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class kirimemailController extends Controller
{
    public function index(){

    // $pesan = "<p><b>HAllooooo</b></p>";
    // $data_email=[
    //     'subject' =>'coba',
    //     'sender_name' => 'Sofyan35142@gmail.com',
    //     'isi' =>$pesan
    // ];
    Mail::to("sofyan35142@gmail.com")->send(new kirimemail());
    return '<h1>Kirim email </h1>';
    }
}
