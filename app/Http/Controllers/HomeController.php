<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use jcobhams\NewsApi\NewsApi;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $api_key = "eac87b84e03742ddbde20b391d938c2a";
        $newsapi = new NewsApi($api_key);

        // $q = "";
        $sources = null; // sudah terdaftar di newsapi misal news dari bbc
        $domains = "bbc.co.uk"; // domain atau link web nya
        $exclude_domains = "techcrunch.com";
        $from = "2024-11-23";
        $to = "2024-11-23";
        $language = "en";
        $sort_by = "publishedAt";
        $page_size = 5;
        $page = 1;

        $country = "us";
        // $category = "science";

        // # /v2/everything
        // return $all_articles = $newsapi->getEverything($q, $sources, $domains, $exclude_domains, $from, $to, $language, $sort_by,  $page_size, $page);

        // # /v2/top-headlines
        // return $top_headlines = $newsapi->getTopHeadlines($q, $sources, $country, $category, $page_size, $page);

        // # /v2/top-headlines/sources
        // return $sources = $newsapi->getSources($category, $language, $country);

        $q = $request->query('q', null);
        $category = $request->query('category') === "all" ? null : $request->query('category', null);
        $countries = $request->query('country', 'us,id');

        $selected_countries = explode(',', $countries);

        $combined_headlines = [];

        foreach ($selected_countries as $country_code) {
            $headlines = $newsapi->getTopHeadlines($q, null, $country_code, $category, null, null);
            $combined_headlines = array_merge($combined_headlines, $headlines->articles);
        }

        $news = [
            'status' => 'ok',
            'totalResults' => count($combined_headlines),
            'articles' => $combined_headlines
        ];

        return view('pages.app.home', [
            'title' => 'Home',
            'news' => $news,
            'category' => $category,
            'country' => $countries
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
