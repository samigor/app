<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class mailController extends Controller
{
    public function send ()
 {
   Mail::send(['text' => 'mail'], ['name', 'Siminchenko'], function ($message){

     $message ->to('igor@kntu.net.ua', 'to KNTU mail')->subject('Test email');
     $message ->from('siminchenko@gmail.com','Igor mail');
   });
 }}
