<?php

namespace App\Http\Controllers;

use App\Sun;
use Illuminate\Http\Request;

class SunController extends Controller
{
    public function search(Request $data)
    {
		if(isset($data->searchText) && !empty($data->searchText))
		{
			if($data->searchType=="name"){

				$search_result = Sun::where(trim($data->searchType), 'LIKE', '%'.$data->searchText.'%')->get();

			}
			else if($data->searchType=="size"){

				$search_result = Sun::where(trim($data->searchType), $data->searchText)->get();
			}
			else
			{
				return view('invalid_data');
			}
			

			return response()->json($search_result);
		}
		else
		{

			return view('invalid_data');
		}
    }
}
