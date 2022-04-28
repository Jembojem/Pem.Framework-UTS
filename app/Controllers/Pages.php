<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('pages\home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Us'
        ];
        return view('pages\about', $data);
    }

    public function teknologi()
    {
        $data = [
            'title' => 'Technologies'
        ];
        return view('pages\teknologi', $data);
    }
}
