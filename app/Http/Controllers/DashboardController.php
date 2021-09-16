<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardMain()
    {
        return view('dashboard.dashboard_main');
    }
    public function dashboardDark()
    {
        return view('dashboard.dashboard_dark');
    }
    public function dashboardLight()
    {
        return view('dashboard.dashboard_light');
    }
    public function widgets()
    {
        return view('widget.widget');
    }
    public function charts()
    {
        return view('chart.chart');
    }
    public function calender()
    {
        return view('calender.calender');
    }
    public function contact()
    {
        return view('contact.contact');
    }
}
