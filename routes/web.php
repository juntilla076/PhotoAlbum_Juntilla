
<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/page1', function () {
    return view('pages.page1');
});

Route::get('/page2', function () {
    return view('pages.page2');
});

Route::get('/page3', function () {
    return view('pages.page3');
});

Route::get('/page4', function () {
    return view('pages.page4');
});

Route::get('/page5', function () {
    return view('pages.page5');
});
