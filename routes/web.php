<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    QuestionController
};
use App\Http\Livewire\{
    EmployeeAccount
};
use App\Http\Middleware\CheckRole;

Route::get('/', fn () => to_route('home.dashboard-page'));

// authenticate
Route::group(
    [
        'middleware' => [
            'auth:karyawan_gaa,visitor'
        ],
        'prefix' => 'h',
        'as' => 'home.',
    ],
    function () {
        Route::view('dashboard-page', 'dashboard/dashboard-page')->name('dashboard-page');
        Route::view('visitor-feedback', 'layout/navigation-sidebar/manage-visitor.visitor-feedback')->name('visitor-feedback')->middleware('CheckRole:visitor');

        // Karyawan GA
        Route::group(
            [
                'middleware' => ['CheckRole:employee']
            ],
            function () {
                Route::view('my-dashboard', 'layout/navigation-sidebar/manage-visitor.dashboard-ga')->name('my-dashboard');
                Route::view('visitor-data', 'layout/navigation-sidebar/manage-visitor.visitor-data')->name('visitor-data');
                Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items');
                Route::view('visitor-arival', 'layout/navigation-sidebar/manage-visitor.visitor-arival')->name('visitor-arival');
                Route::view('customize-feed', 'layout/navigation-sidebar/manage-visitor.customize-feed')->name('customize-feed');

                Route::get('employee-account', EmployeeAccount::class)->name('employee-account');

                Route::view('visitor-account', 'layout/navigation-sidebar/manage-visitor/visitor-account')->name('visitor-account');
            }
        );

        // Security
        Route::view('lost-items', 'layout/navigation-sidebar/manage-visitor.lost-items')->name('lost-items')->middleware('CheckRole:security');

        Route::post('logout', [HomeController::class, 'logout'])->name('logout');

        Route::controller(QuestionController::class)->group(function () {
            Route::get('question', 'getQuestion')->name('question');
        });
    }
);

Route::group(
    [
        'middleware' => ['guest:karyawan_gaa', 'guest:visitor'],
        'prefix' => 'auth',
        'as' => 'auth.'
    ],
    function () {
        Route::view('login', 'auth/auth-login')->name('login');
        Route::view('register', 'auth/register')->name('register');
    }
);

// Additional Route
Route::match(['get', 'post'], '/employee-account', EmployeeAccount::class);
