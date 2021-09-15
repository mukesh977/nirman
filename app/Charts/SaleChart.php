<?php

declare(strict_types=1);

namespace App\Charts;

use Carbon\Carbon;
use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleChart extends BaseChart
{
    /**
     * Determines the chart name to be used on the
     * route. If null, the name will be a snake_case
     * version of the class name.
     */
    public ?string $name = 'sale_chart';

    /**
     * Determines the name suffix of the chart route.
     * This will also be used to get the chart URL
     * from the blade directrive. If null, the chart
     * name will be used.
     */
    public ?string $routeName = 'sale_chart';

    /**
     * Determines the prefix that will be used by the chart
     * endpoint.
     */
    // public ?string $prefix = '';

    /**
     * Determines the middlewares that will be applied
     * to the chart endpoint.
     */
    // public ?array $middlewares = ['auth'];

    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $dt = Carbon::now();
        $one_month_ago = $dt->subDays(30);
        $labels = [];
        $count = [];

        $sales = DB::table('orders')
            ->where('status', 'completed')
            ->where('created_at', '>', $one_month_ago)
            ->orderBy('created_at', 'asc')
            ->select(DB::raw("DATE_FORMAT(created_at, '%e-%c') as date"), DB::raw('SUM(`total_price`) as total'))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%Y %m %e')"))
            ->get();

        foreach ($sales as $sale) {
            array_push($labels, $sale->date);
            array_push($count, $sale->total);
        }

        return Chartisan::build()
            ->labels($labels)
            ->dataset('Sample', $count);
    }
}
