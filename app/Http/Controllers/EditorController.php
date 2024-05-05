<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentType;
use FroalaEditor_Image;
use Inertia\Inertia;

class EditorController extends Controller
{
    //
    public function index() {
        return Inertia::render("ContentWriter/Content", [
            
        ]);
    }
    public function create(Request $req) {
        $t = str_replace(" ", "-", $req->title);

        $req->validate([
            'content' => "required",
            'title' => 'required'
        ]);
        
        $f = $req->hasFile('content') ? $req->file('content')->storePublicly('uploads') : $req->content;
        $r = ContentType::create([
            'contenu' => $req->content,
            'title' => $req->title,
            'slug' => $t
        ]);
        
    }
    public function createView () {
        return Inertia::render('ContentWriter/Content');
    }

    public function lists() {
        return Inertia::render("ContentWriter/ContentList", [
            'lists' => ContentType::all()
        ]);
    }

    public function show(Request $request, string $id){
        $content = ContentType::whereId($id)->firstOrFail();
        return Inertia::render('ContentWriter/Edit', [
            'content' => $content
        ]);
    }
    public function update(Request $req, ContentType $id){
        $req->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        
        $t = str_replace(" ", "-", $req->title);
        $id->update([
            'title' => $req->title,
            'contenu' => $req->content,
            'slug' => $t
        ]);
    }
    public function destroy(ContentType $id){
        $id->delete();
    }
}
