<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio home page.
     * All data comes from config/portfolio.php — never hardcode content here.
     */
    public function index()
    {
        return view('home', [
            'personal'   => config('portfolio.personal'),
            'info'       => config('portfolio.info'),
            'stats'      => config('portfolio.stats'),
            'contact'    => config('portfolio.contact'),
            'skills'     => config('portfolio.skills'),
            'experience' => config('portfolio.experience'),
            'projects'   => config('portfolio.projects'),
        ]);
    }
}
