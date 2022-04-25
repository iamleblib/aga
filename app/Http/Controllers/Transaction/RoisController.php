<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Roi;
use Illuminate\Http\Request;

class RoisController extends Controller
{
    public function logs(Roi $rois)
    {
//        return $rois->getRoi();
        return view('guest.transaction.roi.log')->with([
            'rois' => $rois->getRoi()
        ]);
    }
}
