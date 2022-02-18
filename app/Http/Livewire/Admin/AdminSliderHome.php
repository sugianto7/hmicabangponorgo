<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Sliderhome;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
class AdminSliderHome extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $sliderhome_id;
    public $name;
    public $slug;
    public $description;
    public $content;
    public $tempat;
    public $image;
    public $newimage;
    public $updateMode = false;
    public function render()
    {
        $sliderhomes= Sliderhome::withCount('blog')->paginate(5);
        return view('livewire.admin.admin-slider-home',['sliderhomes'=>$sliderhomes])->layout('layouts.admin');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $sliderhome = Sliderhome::where('id',$id)->first();
        $this->sliderhome_id = $sliderhome->id;
        $this->name = $sliderhome->name;
        $this->slug = $sliderhome->slug;
        $this->content = $sliderhome->content;
        $this->tempat = $sliderhome->tempat;
        $this->description = $sliderhome->description;
        $this->image = $sliderhome->image;
    }
    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }
    public function cancel()
    {
        $this->updateMode = false;

    }

    public function updated($fields)
    {

        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);
    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]);
            $sliderhome = Sliderhome::find($this->sliderhome_id);
            $sliderhome->name = $this->name;
            $sliderhome->slug = $this->slug;
            $sliderhome->description = $this->description;
            $sliderhome->content = $this->content;
            $sliderhome->tempat = $this->tempat;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $sliderhome->image = $imageName;
            }
            $this->updateMode = false;
            $sliderhome->save();
            session()->flash('message', 'Slider Updated Successfully.');
    }
    public function delete($id)
    {
        if($id){
            Sliderhome::where('id',$id)->delete();
            session()->flash('message', 'gambar Slider home Deleted Successfully.');
        }
    }
}
  