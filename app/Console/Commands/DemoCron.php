<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Payment;
use Carbon\Carbon;

class DemoCron extends Command
{
    protected $signature = 'demo:cron';

    protected $description = 'Menghapus transaksi yang batas bayarnya sudah telat';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $pembayaran = Payment::where('payment_status', 'unpaid')->get();
        $tanggalMulai = []; 
        $now = Carbon::now('+7:00'); //+7:00 adalah gmt nya

        foreach ($pembayaran as $p) {
                $selisih = $now->diffInDays($p->created_at);
                if ($selisih > 0 ) {
                    $p->delete();
                }
        }
        \Log::info($pembayaran);
    }
}
