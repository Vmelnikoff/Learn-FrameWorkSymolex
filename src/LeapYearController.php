<?php declare(strict_types=1);

namespace App;

use Symfony\Component\HttpFoundation\Response;

class LeapYearController
{
    public function index($request)
    {
        if (is_leap_year($request->attributes->get('year'))) {
            return new Response('Yep, this is a leap year!');
        }

        return new Response('Nope, this is not a leap year.');
    }
}