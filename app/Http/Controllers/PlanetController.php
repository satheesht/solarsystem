<?php

namespace App\Http\Controllers;

use App/Planet;
use Illuminate\Http\Request;

class PlanetController extends Controller
{
    public function findSunOrbitingPlanets()
    {
    		$planets = Planet::where('orbits_sun',1);

    		return response()->json($planets);
    }
    public function filterBySolarsystem(Request $data)
    {

    		if(isset($data->solarsystem_id) && !empty($data->solarsystem_id))
    		{
			$id = $data->solarsystem_id;
		}else{
			return view('invalid_data');
		}

    		try{
			SolarSystem::findOrFail($id);

			$sun = Planet::where('orbits_sun',1);

			return response()->json($sun);
		}
		catch
		{
			return view('record_not_found');
		}
    }

    public function search(Request $data)
    {
		if(isset($data->searchText) && !empty($data->searchText))
		{
			if($data->searchType=="name"){

				$search_result = Planet::where(trim($data->searchType), 'LIKE', '%'.$data->searchText.'%')->get();

			}
			else if($data->searchType=="size"){

				$search_result = Planet::where(trim($data->searchType), $data->searchText)->get();
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
