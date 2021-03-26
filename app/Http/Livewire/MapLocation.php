<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Location;

class MapLocation extends Component
{

    public $long,$lat;
    public $geoJson;
  

    private function loadLocations(){
        $locations = Location::orderBy('created_at', 'desc')->get();
       
        

        $customLocations = [];
        
        foreach($locations as $location){
            $customLocations[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [
                        $location->long, $location->lat],
                    'type' => 'Point'
                ],
                'properties' => [
                    'locationId' => $location->id,
                    'title' => $location->title,
                    'description' => $location->description
                ]
                
            ];
        }

        $geoLocations = [
            'type' => 'FeatureCollection',
            'features' => $customLocations
        ];  

        $geoJson = collect($geoLocations)->toJson();
        $this->geoJson = $geoJson;
        
        
    }


    
   
    public function render()
    {
        $this->loadLocations();
  
        return view('livewire.map-location');
    }
}
