<?php

use App\Livewire\Home\Errors;
use App\Livewire\Sitemap;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Models\Tutorials;

















Route::get('/',App\Livewire\Home\Index::class )->name('home');
Route::get('/about',App\Livewire\Home\About::class )->name('about');
Route::get('/Donate',App\Livewire\Home\Donate::class )->name('donate');
Route::get('/Tutorial',App\Livewire\Home\Tutorial\Index::class )->name('tutorial');
Route::get('/Single/{id}',App\Livewire\Home\Tutorial\Single::class )->name('single');

Route::get('/Instagram',App\Livewire\Home\Instagram::class )->name('instagram');
Route::get('/Youtube',App\Livewire\Home\Youtube::class )->name('youtube');
Route::get('/Facebook',App\Livewire\Home\Facebook::class )->name('facebook');
Route::get('/Hashtag',App\Livewire\Home\Hashtag::class )->name('hashtag');
Route::get('/Keywords',App\Livewire\Home\Keywords::class )->name('keywords');
Route::get('/Imageread',App\Livewire\Home\Imageread::class )->name('imageread');


    Route::get('/Helpsite',App\Livewire\Home\Helpsite::class )->name('helpsite');
    Route::get('/Helpsite1',App\Livewire\Home\Helpsite1::class )->name('helpsite1');
    Route::get('/Helpsite2',App\Livewire\Home\Helpsite2::class )->name('helpsite2');
    Route::get('/Voice',App\Livewire\Home\Voice::class )->name('voice');
    Route::get('/terendgoogle',App\Livewire\Home\Terendgoogle::class )->name('terendgoogle');

    Route::get('/Music',App\Livewire\Home\Music\Index::class )->name('music');
    Route::get('/MusicEffect',App\Livewire\Home\Music\Effect::class )->name('musiceffect');
    Route::get('/MusicTerend',App\Livewire\Home\Music\Musicterend::class )->name('musicterend');


    Route::get('/Hook',App\Livewire\Home\Hook::class )->name('hook');
    Route::get('/PixabayGallery',App\Livewire\Home\PixabayGallery::class )->name('pixabayGallery');
    Route::get('/Templateinsta',App\Livewire\Home\Templateinsta::class )->name('templateinsta');
    Route::get('/Challenglist',App\Livewire\Home\Challenglist::class )->name('challenglist');
    Route::get('/Calender',App\Livewire\Home\Calender::class )->name('calender');
    Route::get('/Words',App\Livewire\Home\Words::class )->name('words');
    Route::get('/Site',App\Livewire\Home\Site::class )->name('site');
    Route::get('/Moamapic',App\Livewire\Home\Moamapic::class )->name('moamapic');

    Route::get('/Contentproduct',App\Livewire\Home\Contentproduct::class )->name('contentproduct');
    Route::get('/Cta',App\Livewire\Home\Cta::class )->name('cta');
    Route::get('/faal',App\Livewire\Home\Omen::class )->name('faal');
    Route::get('/Infomation',App\Livewire\Home\Infomation::class )->name('infomation');
    Route::get('/Puzzelinfo',App\Livewire\Home\Puzzelinfo::class )->name('puzzelinfo');
    Route::get('/Linkexchange',App\Livewire\Home\Linkexchange::class )->name('linkexchange');
    Route::get('/Proxy',App\Livewire\Home\Proxy::class )->name('proxy');






Route::get('/Login',App\Livewire\Auth\Login::class )->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/'); // بازگشت به صفحه اصلی سایت
})->name('logout');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', App\Livewire\Admin\Dashoard::class)->name('dashboard');

    Route::get('/hashindex', App\Livewire\Admin\Hashtagh\Index::class)->name('hashindex');
    Route::get('/hashcreate', App\Livewire\Admin\Hashtagh\Create::class)->name('hashcreate');

    Route::get('/videoindex', App\Livewire\Admin\Video\Index::class)->name('videoindex');
    Route::get('/videocreate', App\Livewire\Admin\Video\Create::class)->name('videocreate');
    Route::get('/soundcreate', App\Livewire\Admin\Sound::class)->name('soundcreate');
    Route::get('/Omen', App\Livewire\Admin\Omen::class)->name('omen');
    Route::get('/Infoday', App\Livewire\Admin\Infoday::class)->name('infoday');
    Route::get('/Puzzle', App\Livewire\Admin\Puzzle::class)->name('puzzle');
    Route::get('/Word', App\Livewire\Admin\Word::class)->name('word');
    Route::get('/cta', App\Livewire\Admin\Cta::class)->name('ctaadmin');
    Route::get('/Challeng', App\Livewire\Admin\Challeng\Challeng::class)->name('challeng.admin');
    Route::get('/Challengcat', App\Livewire\Admin\Challeng\Challengcat::class)->name('challengcat');
    Route::get('/Productonstory', App\Livewire\Admin\Productonstory::class)->name('productonstory');


    Route::get('/CatImg', App\Livewire\Admin\Image\Categoryimage::class)->name('catimg');
    Route::get('/Saveimage', App\Livewire\Admin\Image\Saveimage::class)->name('saveimage');
    Route::get('/Templatestory', App\Livewire\Admin\Templatestory::class)->name('templatestory');
    Route::get('/Tutorialadmin', App\Livewire\Admin\Tutorialadmin::class)->name('tutorialadmin');
    Route::get('/moamapicadmin', App\Livewire\Admin\Moamapic::class)->name('moamapicadmin');


});



Route::fallback(Errors::class);


Route::get('/sitemap.xml', function () {
    $urls = [
        url('/'),
        url('/about'),
        url('/Donate'),
        url('/MusicEffect'),
        url('/Music'),
        url('/MusicTerend'),
        url('/Instagram'),
        url('/Youtube'),
        url('/Facebook'),
        url('/Hashtag'),
        url('/Keywords'),
        url('/Helpsite'),
        url('/Helpsite1'),
        url('/Helpsite2'),
        url('/Voice'),
        url('/terendgoogle'),
        url('/Contentproduct'),
        url('/Hook'),
        url('/PixabayGallery'),
        url('/Challenglist'),
        url('/Calender'),
        url('/Words'),
        url('/Site'),
        url('/single/{id}'),
        url('/Cta'),
        url('/faal'),
        url('/Infomation'),
        url('/Puzzelinfo'),
        url('/Linkexchange'),
        url('/Login'),
    ];

    $posts = Tutorials::all();

    return response()->view('livewire.sitemap', compact('urls', 'posts'))
        ->header('Content-Type', 'application/xml');
});


