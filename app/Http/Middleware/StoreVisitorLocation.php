<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class StoreVisitorLocation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $position = Location::get(request()->ip());

        if ($position) {
            $latitude = $position->latitude;
            $longitude = $position->longitude;
            $country = $position->countryName;
            $region = $position->regionName;
            $city = $position->cityName;
            $postal_code = $position->zipCode;

            $visitor = new Visitor;
            $visitor->ip_address = request()->ip();
            $visitor->latitude = $latitude;
            $visitor->longitude = $longitude;
            $visitor->country = $country;
            $visitor->region = $region;
            $visitor->city = $city;
            $visitor->postal_code = $postal_code;
            $visitor->save();
        }

        return $next($request);
    }
}

