<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\newMail;
class mailController extends Controller
{
    public function send ()
 {
   Mail::send(new newMail());
   /*Mail::send(['text' => 'mail'], ['name', 'Siminchenko'], function ($message){

     $message ->to('igor@kntu.net.ua', 'to KNTU mail')->subject('Test email');
     $message ->from('siminchenko@gmail.com','Igor mail');
   });*/
 }
 public function email ()
 {
return view('email');
 }
}
