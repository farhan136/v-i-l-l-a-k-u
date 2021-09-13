<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\Villa;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        // $pesanan = Pemesanan::all();
        // $villa = Villa::all();


        // foreach ($pesanan as $p) {
        //     $schedule->call(function () {
        //         $vilas = $villa[$p->villa_id -1];
        //         $vilas->stok = $vila->stok - 1;
        //         // $vila->save();
        //         $affected = DB::tables('tbl_villa')->where('id', $vilas->id)->update('stok', $vilas->stok);
        //     })->timezone('Indonesia/Jakarta')->between($p->mulai.' 12:00:00', $p->selesai.' 10:00:00');
        // }

        $schedule->call(function () {
           $now = Carbon::now();
           $villa = DB::table('tbl_villa')->join('tbl_pemesanan', 'tbl_villa.id', '=', 'tbl_pemesanan.villa_id')->select('tbl_villa.stok', 'tbl_pemesanan.mulai', 'tbl_pemesanan.selesai')->get();
           foreach ($villa as $v) {
                $mulai = explode('-', $v->mulai);
                $mulai = Carbon::create($mulai[0], $mulai[1], $mulai[2], 12, 0, 0);
                $selesai = explode('-', $v->selesai);
                $selesai = Carbon::create($selesai[0], $selesai[1], $selesai[2], 10, 0, 0);
                // $mulaiToNow = $mulai->diffInDays($now);
                $mulaiToNow = $now - $mulai;
                $nowToSelesai = $now->diffInDays($selesai);
                // info($v->mulai);
                // info($mulai->toDateTimeString());
                // info($v->selesai);
                // info($selesai->isoFormat('Y-m-d H-m-s'));
                // info($now->isoFormat('Y-m-d H-m-s'));
                // info($mulaiToNow);
                // info($nowToSelesai);
                info('---------------------------');
                if( $mulaiToNow > 0 && $nowToSelesai >0){
                    info('Waktu Awal :'. $mulai->toDateTimeString());
                    info('Waktu Sekarang :'. $now->toDateTimeString());
                    info('Selisih Waktu Awal Ke Waktu Sekarang :'. $mulaiToNow);
                    info($selesai->toDateTimeString());
                    info($nowToSelesai);    
                    
                }
                
           }
           // $affected = DB::tables('tbl_villa')->where('id', $vilas->id)->update('stok', $vilas->stok);
           

        })->everyMinute();

    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
