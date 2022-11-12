<?php

namespace App\Http\Livewire\Admin\Brand;


use Livewire\Component;
use App\Models\Brand;
use Illuminate\Support\Str;

class Index extends Component
{
    public $name, $slug, $status;

    public function rules()
    {
        return [
            'name' => 'required|string',
            'slug' => 'required|string',
            'status' => 'nullable'
        ];
    }

    public function storeBrand()
    {
        $validateData = $this->validate();
        Brand::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'status' => $this->status == true ? '1' : '0',
        ]);

        session()->flash('message', 'Brand Added Successfully');
        $this->dispatchBrowserEvent('close-modal');
    }


    public function render()
    {
        return view('livewire.admin.brand.index')->extends('layouts.admin')->section('content');
    }
}
