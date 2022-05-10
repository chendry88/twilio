<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use App\Http\Resources\QuoteResource as QuoteResource;

class QuoteController extends Controller
{
	public function index() {
		return view('quotes.index', ['quotes' => Quote::all()]);
	}


	public function getquotes() {

		$quotes = Quote::get();
		return QuoteResource::collection($quotes);

	}





}
