<?php

namespace App\Http\Controllers;

use App\Models\Service;

class HelloController extends Controller
{
    public function index()
    {
        return view(view: 'new view.app');
    }

    public function about()
    {
        return view(view: 'new view.about');
    }

    public function services()
    {
        $services = ['Coool service', 'Another cool service'];
        $services = Service::all();
        dd($services);

        return view(view: 'new view.services', data: compact('services'));
    }
}
