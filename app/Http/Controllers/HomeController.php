<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\Company;
use App\Models\Faq;
use App\Models\MainGallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function blog_col_1()
    {
        return view('blog-col-1');
    }

    public function blog_col_2()
    {
        return view('blog-col-2');
    }

    public function blog_details_2()
    {
        return view('blog-details-2');
    }

    public function blog_details()
    {
        return view('blog-details');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function index()
    {
        $mainGallery = MainGallery::all()->toArray();
        $apartments  = Apartment::all()->toArray();
        $company     = Company::first()->toArray();
        $faqs        = Faq::all()->toArray();
        $getName     = $this->getNameNumber();
        return view('OnePage/onepage_seven')
            ->with(
                [
                    'mainGallery' => $mainGallery,
                    'apartments'  => $apartments,
                    'company'     => $company,
                    'faqs'        => $faqs,
                    'getName'     => $getName
                ],
            );
    }

    protected function getNameNumber(): array
    {
        return [
            1  => 'One',
            2  => 'Two',
            3  => 'Three',
            4  => 'Four',
            5  => 'Five',
            6  => 'Six',
            7  => 'Seven',
            8  => 'Eight',
            9  => 'Nine',
            10 => 'Ten'
        ];
    }

    public function service_details()
    {
        return view('service-details');
    }

    public function service()
    {
        return view('service');
    }

    public function team_details()
    {
        return view('team-details');
    }
}
