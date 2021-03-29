<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getIndex()
    {
        $tags = Tag::all();
        return view ('admin.tag.index')->with('tags', $tags);
    }

    public function getCreate()
    {
        return view ('admin.tag.create');
    }

    public function postStore(Request $request)
    {
        $this->validate($request,
        [
            'tag' => 'required | min:3'
            
        ]);


        $tag = new Tag();
        $tag->tag = $request->tag;
        $tag->save();
        toastr()->success('Tag has been created successfully!');
        return redirect()->route('indexTag');
    }

    public function getEdit($id)
    {
        $tag = Tag::find($id);
        return view ('admin.tag.edit')->with('tag', $tag);
    }

    public function postUpdate(Request $request ,$id)
    {
        $tag = Tag::find($id);
        $tag->tag = $request->tag;
        $tag->save();
        toastr()->success('Tag has been updated successfully!');
        

        return redirect()->route('indexTag');
    }

    public function getDelete($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        toastr()->error('Tag has been deleted successfully!');

        return redirect()->route('indexTag');
    }
}
