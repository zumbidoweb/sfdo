<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Page;

class PageController extends Controller
{
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $page = Page::where('slug', 'home')->first();
        abort_unless($page, 404);
        return view('page', [
            'page' => $page
        ]);
    }
    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->first();
        abort_unless($page, 404);
        return view('page', [
            'page' => $page
        ]);
    }
}
