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
        return Inertia::render("ContentWriter/Content");
    }
    public function create(Request $req) {
        $req->validate([
            'content' => "required",
            'title' => 'required'
        ]);
       
        $f = $req->hasFile('content') ? $req->file('content')->storePublicly('uploads') : $req->content;
        ContentType::create([
            'contenu' => $req->content,
            'title' => $req->title
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
        $id->update([
            'title' => $req->title,
            'contenu' => $req->content
        ]);
    }
    public function destroy(ContentType $id){
        $id->delete();
    }
}
