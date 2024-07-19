<?php

namespace App\Http\Controllers;

use App\Actions\ZipCode\ZipCodeSearch;
use App\Http\Resources\ZipCodeResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ZipCodeController extends Controller
{
    public function zipCodeSearch(string $zipCode): AnonymousResourceCollection
    {
        ZipCodeResource::withoutWrapping();
        return ZipCodeResource::collection(ZipCodeSearch::run($zipCode));
    }
}
