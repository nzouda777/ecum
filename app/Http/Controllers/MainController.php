<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentType;
use Inertia\Inertia;

class MainController extends Controller
{
    //
    public function index() {
        // return Inertia::render('Main', [
        //     'contenu' => ContentType::all()
        // ]);
    }
    
    public function blogs(string $slug) {
        $sl =  str_replace(" ", "-", $slug);
        $s = ContentType::whereSlug($sl)->firstOrFail();
        
        return Inertia::render('Main', [
            'contenu' => ContentType::all(),
            'slug' => $s
        ]);
    }
}
