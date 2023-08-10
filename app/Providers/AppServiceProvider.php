<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Applicant;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Applicant::creating(function ($applicant) {
            $applicant->created_by = auth()->user()->id;
        });
    }
}
