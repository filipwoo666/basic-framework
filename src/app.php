<?php
/**
 * @author Filip Woźniak <filip.wozniak@yahoo.pl>
 */

use Symfony\Component\Routing;

function is_leap_year($year = null)
{
    if ($year === null) {
        $year = date('Y');
    }

    return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
}

$routes = new Routing\RouteCollection();

$routes->add('leap-year', new Routing\Route('/leap-year/{year}', [
    'year'        => null,
    '_controller' => function ($request) {
        if (is_leap_year($request->attributes->get('year'))) {
            return new \Symfony\Component\HttpFoundation\Response('Yep, this is a leap year!');
        }

        return new \Symfony\Component\HttpFoundation\Response('Nope, this is not a leap year');
    }
]));

$routes->add('hello', new Routing\Route('/hello/{name}', [
    'name'        => 'World',
    '_controller' => function ($request) {
        return render_template($request);
    }
]));

$routes->add('bye', new Routing\Route('/bye', [
    '_controller' => function ($request) {
        return render_template($request);
    }
]));

return $routes;