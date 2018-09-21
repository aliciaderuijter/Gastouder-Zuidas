<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs;
use Illuminate\Http\Request;
use \Mail;
use \Validator;

class ContactController extends Controller {
	public function email(Request $request) {


		$validator = Validator::make($request->all(), [
			'naam' => 'required',
			'email' => 'required|email',
			'bericht' => 'required|min:10',
		]);

		if ($validator->fails()) {
			return redirect('/#section4')//change this to your desired url
			->withErrors($validator)
				->withInput();
		}


		Mail::to('aliciaderuijter@gmail.com')->send(new ContactUs($request->input('bericht'), $request->input('email'), $request->input('naam')));


		$request->session()->flash('status', 'Uw email is verzonden!');

		return redirect('/#section4');
	}
}
