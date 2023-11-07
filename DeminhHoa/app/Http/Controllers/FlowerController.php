<?php

namespace App\Http\Controllers;
use App\Models\Region;
use App\Models\Flower;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::all();
        $flowers = Flower::orderBy("created_at","desc")->paginate(10);
        return view("flowers.index", compact("flowers"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("flowers.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[ // kiểm tra dữ liệu đầu vào
            'name'=> 'required',
            'description' => 'required',
            'image_url' =>'required|image',// file phai la anh
        ]);
        
        // $flower = new Flower();
        // $flower->name = $request->name;
        // $flower->description = $request->description;

        // if($request->hasFile('image_url')){
        //     $image = $request->file('image_url');
        //     $imagePath = $image->store('public/images');
        //     $flower->image_url = Storage::url($imagePath);
        // }
        if($request->hasFile('image_url')){
            $image = $request->file('image_url');
            $imageName = $image->getClientOriginalName(); // lấy tên gốc của tệp tin 
            $path = $image->storeAs('imgs', $imageName, 'public');// lưu tệp tin vào thư mục public/imgs . phương thức storeAs gọi tên đối tượng uploadfile và trả về đường dẫn lưu  trữ tệp tin
            $imagePath = asset('storage/' . $path); // tạo đường dẫn tệp tin đã lưu trữ 
            $request->merge(['image_url'=>$imagePath]);
        }
        if(Flower::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'image_url'=> $request->image_url,
        ]))
    
        // $flower->save();
        return redirect()->route('flowers.index')->with('success','Create flower successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $flower = Flower::find($id);
        return view("flowers.show", compact("flower"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        return view("flowers.edit", compact("flower"));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $validate = Validator::make($request->all(),[
            "name"=> "required",
            "description"=> "required",
            "image_url"=> "required",
        ] );
        if($request->hasFile("image_url")){
            $image = $request->file("image_url");
            $imageName = $image->getClientOriginalName();
            $path = $image->storeAs("imgs", $imageName,'public');
            $imagePath = asset('storage/' . $path);
            $request->merge(['image_url'=>$imagePath]);
        }
        else{
            $request->merge(['image_url'=>$flower->image_url]);
        }
        if($flower->update([
            'name'=> $request->name,
            'description'=> $request->description,
            'image_url'=> $request->image_url,
        ]));
        return redirect()->route('flowers.index')->with('success','Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
        return redirect()->route('flowers.index')->with("success","Delete flower successfully");
    }
}
