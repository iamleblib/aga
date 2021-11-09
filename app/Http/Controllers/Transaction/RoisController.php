<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Roi;
use Illuminate\Http\Request;

class RoisController extends Controller
{
    public function logs()
    {
        $rois = new Roi();
        return view('guest.transaction.roi.log')->with([
            'rois' => $rois
        ]);
    }
}
