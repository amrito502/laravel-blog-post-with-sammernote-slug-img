<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MyProject;
class MyProjectController extends Controller
{

    public function blog(){
        $blogs = MyProject::latest()->get();
        return view('blog',compact('blogs'));
    }


    public function add_blog(){
        return view('add_blog');
    }

    public function store_blog(Request $request){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
        ]);


        $description =  $request->desc;

       $dom = new \DomDocument();

       $dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

       $imageFile = $dom->getElementsByTagName('imageFile');

       foreach($imageFile as $item => $image)
       {

           $data = $img->getAttribute('src');

           list($type, $data) = explode(';', $data);

           list(, $data)      = explode(',', $data);

           $imgeData = base64_decode($data);

           $image_name= "/upload/" . time().$item.'.png';

           $path = public_path() . $image_name;

           file_put_contents($path, $imgeData);

           $image->removeAttribute('src');

           $image->setAttribute('src', $image_name);
        }

       $description = $dom->saveHTML();

        $MyProject = new MyProject;
        $MyProject->id = $request->MyProject;
        $MyProject->name = $request->name;
        $MyProject->desc = $description;
        $MyProject->slug = strtolower(str_replace(' ', '-', $request->name));

        $MyProject->save();

        return redirect()->back()->with('message','blog created successfully');
    }


    public function blog_details($id){
        $blog = MyProject::findOrFail($id);
        return view('blog_details', compact('blog'));
    }

    public function blog_delete($id){
        $blog = MyProject::findOrFail($id);

        $blog->delete();

        return redirect()->route('blog')->with('message','Successfully Deleted ');
    }




}
