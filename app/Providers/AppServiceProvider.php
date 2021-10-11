<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Pemesanan;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services. 
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        // View::share('global', [$tanggalTerpesan]); 
        // View::composer('*', function ($view) {
        // $tesWaktu = Pemesanan::select('mulai', 'selesai')->get();
        
        // foreach ($tesWaktu as $tW) {
        //     for ($i=strtotime($tW->mulai); $i <= strtotime($tW->selesai); $i = $i + (60*60*24)) { 
        //         $xyz = date("Y-m-d", $i);
        //         $zyx[] = $xyz;
        //     }
        // }
        // $tanggalTerpesan = array_unique($zyx);
        // });
    }
}
