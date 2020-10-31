<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;

class DemoChart extends BaseChart
{
    /**
     * Determines the chart name to be used on the
     * route. If null, the name will be a snake_case
     * version of the class name.
     */
    public ?string $name = 'demo_chart';

    /**
     * Determines the name suffix of the chart route.
     * This will also be used to get the chart URL
     * from the blade directrive. If null, the chart
     * name will be used.
     */
    public ?string $routeName = 'demo_chart';

    /**
     * Determines the prefix that will be used by the chart
     * endpoint.
     */
    //public ?string $prefix = 'demo_chart';

    /**
     * Determines the middlewares that will be applied
     * to the chart endpoint.
     */
    //public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     * @param Request $request
     * @return Chartisan
     */
    public function handler(Request $request): Chartisan
    {
        return Chartisan::build()
            ->labels(['January', 'February', 'March', 'April'])
            ->dataset('Followers', [1000, 2000, 1500, 500])
            ->dataset('Visitors', [3000, 1900, 1200, 300])
            ->dataset('Likes', [500, 200, 2500, 2100]);
    }
}
