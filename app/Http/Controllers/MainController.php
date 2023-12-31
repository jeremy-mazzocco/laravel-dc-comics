<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class MainController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }


    public function show($id)
    {
        $comics = Comic::findOrFail($id);

        return view('comics.show', compact('comics'));
    }


    public function create()
    {
        return view('comics.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate(
            $this->dataValidation()
        );

        $comics = Comic::create($data);

        return redirect()->route("comics.show", $comics->id);
    }


    public function edit($id)
    {
        $comics = Comic::findOrFail($id);
        return view('comics.edit', compact('comics'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate(
            $this->dataValidation()
        );
        $comics = Comic::findOrFail($id);
        $comics->update($data);
        return redirect()->route('comics.show', $comics->id);
    }


    public function destroy($id)
    {
        $comics = Comic::findOrFail($id);
        $comics->delete();
        return redirect()->route('comics.index');
    }


    // private function
    private function dataValidation()
    {
        return [
            "title" => 'required|min:3|max:64',
            "description" => 'required|min:3|max:255',
            "thumb" => 'required|min:3|max:255',
            "price" => 'required|integer|numeric|min:3|max:5000',
            "series" => 'required|min:3|max:255',
            "sale_date" => 'required|date|min:3|max:64',
            "type" => 'required|min:3|max:64',
            "artists" => 'required|min:3|max:64',
            "writers" => 'required|min:3|max:64',
        ];
    }
}
