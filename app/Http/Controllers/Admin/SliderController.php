<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderFormRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderFormRequest $request)
    {
        $validateData = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/slider/', $filename);
            $validateData['image'] = "uploads/slider/$filename";
        }

        $validateData['status'] = $request->status == true ? '1' : '0';

        Slider::create([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
            'image' => $validateData['image'],
            'status' => $validateData['status'],
        ]);

        return redirect('admin/sliders')->with('message', 'Slider Adicionado com Sucesso');
    }

    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(SliderFormRequest $request, Slider $slider)
    {
        $validateData = $request->validated();

        if ($request->hasFile('image')) {
            if (File::exists($slider->image)) {
                File::delete($slider->image);
            }


            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/slider/', $filename);
            $validateData['image'] = "uploads/slider/$filename";
        }

        $validateData['status'] = $request->status == true ? '1' : '0';

        Slider::where('id', $slider->id)->update([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
            'image' => $validateData['image'] ?? $slider->image,
            'status' => $validateData['status'],
        ]);

        return redirect('admin/sliders')->with('message', 'Slider Atualizado com Sucesso');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->count() > 0) {
            if (File::exists($slider->image)) {
                File::delete($slider->image);
            }
            $slider->delete();
            return redirect('admin/sliders')->with('message', 'Slider Deletado com Sucesso');
        }
        return redirect('admin/sliders')->with('message', 'Algo de Errado Aconteceu');
    }
}
