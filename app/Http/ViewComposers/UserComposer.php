<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Models\Pemesanan;
use App\Models\Payment;

class UserComposer
{
    public function compose(View $view)
    {
        $payment=Payment::all();
        $pesanan=Pemesanan::all();
        $view->with('global', [$pesanan,$payment]);
    }
}