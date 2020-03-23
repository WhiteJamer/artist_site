<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Art;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arts = Art::paginate(10);;
        return  view('admin.arts.index', compact('arts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.arts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $image = $request->file('file');
        $originalFileName = $image->getClientOriginalName();
        $customName = strtolower(md5(uniqid($originalFileName))) . '.' . $image->getClientOriginalExtension();

        #Загружаем картинку на сервер
        $image = $request->file('file');
        $imagePath = $image->storeAs('my-arts', $customName, 'public' );

        $formData = array(
          'title' => $request->title,
          'description' => $request->description,
          'image_url' => $imagePath
        );

        Art::create($formData);

        return redirect()
            ->route('admin.arts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $art = Art::find($id);
        return view('admin.arts.detail', compact('art'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $art = Art::findOrFail($id);
        return view('admin.arts.edit', compact('art'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $art = Art::find($id);
        $imagePathRaw = explode('/', $art->image_url);
        $imagePath = $imagePathRaw[array_key_last($imagePathRaw)];

        $image = $request->file('file');

        if($image != '')
        {
            $request->validate([
                'file' => 'image|max:2048',
                'title' => 'required',
                'description' => 'required',
            ]);

            # Удаляем старую картинку
            Storage::disk('public')
                ->delete($art->image_url);

            $imagePath = $image->storeAs('my-arts', $imagePath, 'public');

        }
        else
        {
            $request->validate([
               'title' => 'required',
               'description' => 'required'
            ]);
        }
        $formData = array(
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $imagePath
        );

        #Обновляем запись в бд
        $art->update($formData);

        return redirect()
            ->route('admin.arts.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $art = Art::find($id);

        $storage = Storage::disk('local');
        $storage->delete($art->image_url);

        #Удаляем картинку с сервера
        Storage::disk('public')
            ->delete($art->image_url);
        $art->delete();

        return redirect()
            ->route('admin.arts.index');
    }
}
