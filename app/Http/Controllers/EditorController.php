<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentType;
use Inertia\Inertia;

class EditorController extends Controller
{
    //
    public function index() {
        return Inertia::render("ContentWriter/Content");
    }
    public function create(Request $req) {
        $req->validate([
            'contenu' => "required"
        ]);
        $content = $req->content;
        ContentType::create([
            'contenu' => $content
        ]);
    }
}
