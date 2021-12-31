<?php

namespace App\Http\Controllers\Admin\Charts;

use App\Models\Contact;
use Backpack\CRUD\app\Http\Controllers\ChartController;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

/**
 * Class ContactChartController
 * @package App\Http\Controllers\Admin\Charts
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContactChartController extends ChartController
{
    public function setup()
    {
        $this->chart = new Chart();

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels([
            'Today',
        ]);
        $this->chart = new Chart();
        $digital = Contact::where("from","=","T&T Digital")->count();
        $media = Contact::where("from","=","T&T Media")->count();
//        $web = Contact::where("from","=","T&T Web")->count();
//        $digital = Contact::where("from","=","T&T Education")->count();
        $this->chart->dataset('Red', 'pie', [$digital, $media])
            ->backgroundColor([
                'rgb(70, 127, 208)',
                'rgb(77, 189, 116)',
                'rgb(96, 92, 168)',
                'rgb(255, 193, 7)',
            ]);

        // OPTIONAL
        $this->chart->displayAxes(false);
        $this->chart->displayLegend(true);

        // MANDATORY. Set the labels for the dataset points
        $this->chart->labels(['T&T Media', 'T&T Digital']);

        // RECOMMENDED. Set URL that the ChartJS library should call, to get its data using AJAX.
        $this->chart->load(backpack_url('charts/contact'));

        // OPTIONAL
        // $this->chart->minimalist(false);
        // $this->chart->displayLegend(true);
    }

    /**
     * Respond to AJAX calls with all the chart data points.
     *
     * @return json
     */
//    public function data()
//    {
//        $customer_today = Contact::count();
//
//        $this->chart->dataset('Liên hệ tư vấn', 'line', [
//            $customer_today,
//        ])
//            ->color('rgba(205, 32, 31, 1)')
//            ->backgroundColor('rgba(205, 32, 31, 0.4)');
//    }
}
