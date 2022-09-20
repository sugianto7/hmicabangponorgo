<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SearchController;

use App\Http\Livewire\Home;
use App\Http\Livewire\Artikel;
use App\Http\Livewire\ArtikelSingle;
use App\Http\Livewire\Komentars;
use App\Http\Livewire\Penulise;
use App\Http\Livewire\Kategoris;

use App\Http\Livewire\BplCabang;
use App\Http\Livewire\LapmiCabang;
use App\Http\Livewire\KohatiCabang;
use App\Http\Livewire\Kontak;
use App\Http\Livewire\ProfilCabang;
use App\Http\Livewire\ProgramKerja;
use App\Http\Livewire\StrukturPengurus;
use App\Http\Livewire\PengrusDetail;
use App\Http\Livewire\GaleriKegiatan;
use App\Http\Livewire\KomisariatSecabang;
use App\Http\Livewire\HomeDetail;
use App\Http\Livewire\TentangCabang;
use App\Http\Livewire\Actifitas;

use App\Http\Livewire\Admin\AdminDashboard;
use App\Http\Livewire\Admin\AdminProfils;
use App\Http\Livewire\Admin\AddAdminProfils;
use App\Http\Livewire\Admin\EditAdminProfils;
use App\Http\Livewire\Admin\AdminKategories;
use App\Http\Livewire\Admin\AdminPenulis;
use App\Http\Livewire\Admin\AdminArtikel;
use App\Http\Livewire\Admin\AddAdminArtikel;
use App\Http\Livewire\Admin\EditAdminArtikel;
use App\Http\Livewire\Admin\AdminSliderHome;
use App\Http\Livewire\Admin\AddAdminSliderHome;
use App\Http\Livewire\Admin\AdminTentangHome;
use App\Http\Livewire\Admin\AdminStruktKepengurusan;
use App\Http\Livewire\Admin\AdminKohati;
use App\Http\Livewire\Admin\AdminPriode;
use App\Http\Livewire\Admin\AdminBpl;
use App\Http\Livewire\Admin\AdminLapmi;
use App\Http\Livewire\Admin\AdminGaleri;
use App\Http\Livewire\Admin\AdminAkun;
use App\Http\Livewire\Admin\AdminKontak;
use App\Http\Livewire\Admin\AdminProker;
use App\Http\Livewire\Admin\EditAdminProker;
use App\Http\Livewire\Admin\AdminKomisariat;
use App\Http\Livewire\Admin\AdminKetumKom;
use App\Http\Livewire\Admin\AdminAktifitas;

use App\Http\Livewire\User\UserDashboard;
use App\Http\Livewire\User\UserPassword;
// use App\Http\Livewire\User\Artikel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/artikel-single',ArtikelSingle::class);
// Route::get('/artikel-single/{post:slug}', [ArtikelSingle::class, 'render'])->name('livewire.artikel-single');
// Route::get('/hmi/{slug}',ArtikelSingle::class)->name('livewire.artikel-single');
                // Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
                //     return view('dashboard');
                // })->name('dashboard');



Route::get('post', [PostController::class, 'create'])->name('post.create');
Route::post('post', [PostController::class, 'store'])->name('post.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts');
Route::get('/article/{post:slug}', [PostController::class, 'show'])->name('post.show'); 


Route::get('/',Home::class)->name('home');
Route::get('/branda/{slug}',HomeDetail::class)->name('home.detail');

Route::get('/profil',ProfilCabang::class)->name('profil');
Route::get('/bpl-cabang',BplCabang::class)->name('bpl-cabang');
Route::get('/lapmi-cabang',LapmiCabang::class)->name('lapmi-cabang');
Route::get('/struktur-kepengrusan',StrukturPengurus::class)->name('struktur-kepengrusan');
Route::get('/struktur-kepengrusan-detail',PengrusDetail::class)->name('struktur-kepengrusan-detail');
Route::get('/program-kerja',ProgramKerja::class)->name('program-kerja');
Route::get('/kontak',Kontak::class)->name('kontak');
Route::get('/kohati',KohatiCabang::class)->name('kohati');
Route::get('/galeri',GaleriKegiatan::class)->name('galeri');
Route::get('/komisariat-se-cabang-ponorogo',KomisariatSecabang::class)->name('komisariat');
Route::get('/oleh/{slug}',TentangCabang::class)->name('tentang');

Route::get('/autoComplete', [SearchController::class, 'autocomplete'])->name('autocomplete');
Route::post('/search', [SearchController::class, 'search'])->name('search');

Route::get('/agenda/{slug}',Actifitas::class)->name('aktifitas');

Route::get('/artikel',Artikel::class)->name('artikel');
Route::get('/{slug}',ArtikelSingle::class)->name('livewire.artikel-single');

Route::post('/reply/store', [Komentars::class, 'replyStore'])->name('reply.add');
Route::get('/artikel/{category_slug}',Kategoris::class)->name('artikel.kategory');
Route::get('/artikel-penulis/{penulis_slug}',Penulise::class)->name('artikel.penulis');

Route::middleware(['auth:sanctum'])->group(function() {
        Route::middleware(['auth:sanctum', 'verified'])->group(function() {
            // Route::get('/user/{slug}',UserDashboard::class);
            Route::get('/user/profil',UserDashboard::class)->name('user.dashboard');
            Route::get('/user/password',UserPassword::class)->name('user.password');
            Route::post('/comment/store', [Komentars::class, 'store'])->name('comment.add');    
        });
    
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function() {
    Route::get('/admin/dashboard',AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/profil',AdminProfils::class)->name('admin.profil');
    Route::get('/admin/add/profil',AddAdminProfils::class)->name('admin.addprofil');
    Route::get('/admin/profil/{profil_id}',EditAdminProfils::class)->name('admin.editprofil');
    Route::get('/admin/kategori',AdminKategories::class)->name('admin.kategori');
    Route::get('/admin/penulis',AdminPenulis::class)->name('admin.penulis');
    Route::get('/admin/artikel',AdminArtikel::class)->name('admin.artikel');
    Route::get('/admin/artikel/add',AddAdminArtikel::class)->name('admin.addartikel');
    Route::get('/admin/artikel/{artikel_slug}',EditAdminArtikel::class)->name('admin.editartikel');
    Route::get('/admin/artikel/add',AddAdminArtikel::class)->name('admin.addartikel');
    Route::get('/admin/setting/slider-home',AdminSliderHome::class)->name('admin.slider');
    Route::get('/admin/setting/slider-home/add',AddAdminSliderHome::class)->name('admin.addslider');
    Route::get('/admin/setting/tentang-home',AdminTentangHome::class)->name('admin.tentang');
    Route::get('/admin/struktur-kepengrusan-cabang',AdminStruktKepengurusan::class)->name('admin.str-cabang');
    Route::get('/admin/koprs-hmi-wati',AdminKohati::class)->name('admin.kohati');
    Route::get('/admin/priode',AdminPriode::class)->name('admin.priode');
    Route::get('/admin/badan-Pengelola-latihan',AdminBpl::class)->name('admin.bpl');
    Route::get('/admin/lembaga-pers-mahasiswa-islam',AdminLapmi::class)->name('admin.lapmi');
    Route::get('/admin/Galeri-Kegiatan',AdminGaleri::class)->name('admin.galeri');
    Route::get('/admin/setting/Akun-Pengguna',AdminAkun::class)->name('admin.akun');
    Route::get('/admin/kontak/Aspirasi-Masyarakat',AdminKontak::class)->name('admin.kontak');
    Route::get('/admin/proker/hmi-cabang-ponorogo',AdminProker::class)->name('admin.proker');
    Route::get('/admin/proker/edit/{proker_name}',EditAdminProker::class)->name('admin.editproker');
    Route::get('/admin/komisariat/hmi-se-cabang-ponorogo',AdminKomisariat::class)->name('admin.komisariat');
    Route::get('/admin/Ketua/komisariat',AdminKetumKom::class)->name('admin.ketumkom');
    Route::get('/admin/aktifitas',AdminAktifitas::class)->name('admin.aktifitas');

});
});