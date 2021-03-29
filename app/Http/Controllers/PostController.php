<?php

namespace App\Http\Controllers;
use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function getIndex()
    {   
        $posts = Post::all();
        return view ('admin.post.index', compact('posts'));
    }

    public function getCreate()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view ('admin.post.create', compact('categories','tags'));
    }

    public function postStore(Request $request)
    {
        $this->validate($request,
        [
            'title' => 'required | min:5',
            'content' => 'required | min:20',
            'category_id' => 'required',
            'featured' => 'required', 'image', 'mimes: jpeg,png,jpg'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        
        $image_path = "";
        if($request->hasFile('featured')){
            $image = $request->featured;
            $image_name = time().$image->getClientOriginalName();
            $image->move('uploads/post/', $image_name);
            $image_path = 'uploads/post/' .$image_name;
        }
        

        $post->featured = $image_path;
        $post->save();
        $post->tags()->attach($request->tags);

        toastr()->success('Post has been created successfully!');
        return redirect()->route('indexPost');
    }

    public function getEdit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view ('admin.post.edit', compact('post','categories','tags'));
    }

    public function postUpdate(Request $request ,$id)
    {
        $this->validate($request,
        [
            'title' => 'required | min:5',
            'content' => 'required | min:20',
            'category_id' => 'required',
            'featured' => 'sometimes', 'image', 'mimes:jpeg,png,jpg'
        ]);

        $post = Post::find($id);
        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        
        if ($request->hasFile('featured')) {
            if (file_exists($post->featured)) {
                unlink($post->featured);
            }
            $image = $request->featured;
            $image_name = time().$image->getClientOriginalName();
            $image->move('uploads/post/', $image_name);
            
            $post->featured = 'uploads/post/' .$image_name;
        }

        $post->save();
        $post->tags()->sync($request->tags);
        toastr()->success('Post has been updated successfully!');
        return redirect()->route('indexPost');
    }

    public function getTrash($id)
    {
        $post = Post::find($id);
        // if (file_exists($post->featured)) {
        //     unlink($post->featured);
        // }
        
        $post->delete();
        toastr()->error('Post has been trashed successfully!');

        return redirect()->route('indexPost');
    }

    public function getTrashed()
    {
        $posts = Post::onlyTrashed()->get();
        return view ('admin.post.trashed', compact('posts'));

    }

    public function getRestore($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();
        toastr()->warning('Post has been restored successfully!');
        return redirect()->back();

    }

    public function getDelete($id)
    {
        $post = Post::withTrashed()->where('id',$id)->first();
        if (file_exists($post->featured)) {
            unlink($post->featured);
        }
        
        $post->forceDelete();
        toastr()->error('Post has been deleted successfully!');
        return redirect()->route('indexPost');
    }

}
