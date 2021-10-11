<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Pemesanan;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Using class based composers...
        View::composer(
            'admin.pemesanan', 'App\Http\ViewComposers\UserComposer'
        );
        // View::composer('*', function($view){
        //     $tesWaktu = Pemesanan::select('mulai', 'selesai')->get();

        //     foreach ($tesWaktu as $tW) {
        //         for ($i=strtotime($tW->mulai); $i <= strtotime($tW->selesai); $i = $i + (60*60*24)) { 
        //             $xyz = date("Y-m-d", $i);
        //             $zyx[] = $xyz;
        //         }
        //     }
        //     $tanggalTerpesan = array_unique($zyx);
        //     $view->with('tanggalTerpesan', $tanggalTerpesan);
        // });        
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}