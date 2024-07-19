<?php

namespace App\Actions\ZipCode;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Lorisleiva\Actions\Concerns\AsAction;

class ZipCodeSearch
{
    use AsAction;

    public function handle($zipCode): Collection
    {
        $addresses = collect();
        Str::of($zipCode)->explode(',')->each(function ($zipcode) use ($addresses) {
            $addresses->add(Http::viaCep()->get("ws/$zipcode/json/")->object());
        });
        return $addresses->sortBy(['uf', 'logradouro'])->values();
    }
}
