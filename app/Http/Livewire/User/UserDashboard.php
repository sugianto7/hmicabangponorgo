<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserDashboard extends Component
{
     use WithPagination;
    use WithFileUploads;
    public $user_id;
    public $profile_photo_path;
    public $newimage;
    public $name;
    public $email;

    public $updateMode = false;
    public function render()
    {
        $users =User::where('id',$this->id)->first();        
        return view('livewire.user.user-dashboard',['users'=>$users])->layout('layouts.base');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->profile_photo_path = $user->profile_photo_path;
    }
    public function cancel()
    {
        $this->updateMode = false;

    }
    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',

        ]);

            $user = User::find($this->user_id);
            $user->name = $this->name;
            $user->email = $this->email;
            if ($this->newimage) {
                $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
                $this->newimage->storeAs('artikel',$imageName);
                $user->profile_photo_path = $imageName;
            }
            $this->updateMode = false;
            $user->save();
            session()->flash('message', 'User Updated Successfully.');
            $this->emit('userUpdated');
    }
}


// namespace App\Http\Livewire\User;

// use App\Models\Artikels;
// use Livewire\WithPagination;
// use App\Models\Kategori;
// use App\Models\Penulis;
// use App\Models\Komentar;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use Livewire\Component;

// class UserDashboard extends Component
// {
//     public $slug;
//     public $image;

//      public function mount($slug)
//     {
//         $this->slug = $slug;
//     }
    // public function render(Artikel $artikel)
    // {
    //     $jml_komentar =Komentar::where('commentable_id','artikel_id')->count();

    //     $artikel = Artikels::where('slug',$this->slug)->first();
    //     $popular_blogs = Artikels::inRandomOrder()->limit(4)->get();
    //     $penulis = Penulis::withCount('blog')->get();
    //         $kader = Kader::where('image',$this->image)->first();
    //     $kategori = Kategori::orderBy('id','asc')->offset(4)->limit(30)->withCount('blog')->get();
    //         $singles =Blog::orderBy('description','desc')->simplePaginate(2);
    //         $singles =Blog::paginate(5)->onEachSide(2);
    //         $terkini_blogs = Blog::inRandomOrder()->limit(2)->get();
    //     $related_blogs = Artikels::where('kategori_id',$artikel->kategori_id)->inRandomOrder()->limit(3)->get();
    //     return view('livewire.artikel-single',compact('artikel'),[

    //         'jml_komentar'=>$jml_komentar,
    //         'artikel'=>$artikel,
    //         'penulis'=>$penulis,
    //         'kategori'=>$kategori,
    //         'popular_blogs'=>$popular_blogs,
    //         'related_blogs'=>$related_blogs
    //     ])->layout('layouts.berita');
    // }
// }
