<?php

namespace App\Http\Controllers;

use App\Models\KelPasirkaliki;
use App\Models\KelCibabat;
use App\Models\KonsCibabat;
use App\Models\KonsPasirkaliki;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        
        $konscibabat=KonsCibabat::count();
        $konspaskal=KonsPasirkaliki::count();
        $totpaskal=KelPasirkaliki::count();
        $totcibabat=KelCibabat::Count();   
        $totrw=konsCibabat::select('rw', DB::raw('count(*) as total'))->orderBy('rw', 'asc')->groupBy('rw')->get();
        $totrwp=KonsPasirkaliki::select('rw', DB::raw('count(*) as total'))->orderBy('rw', 'asc')->groupBy('rw')->get();
        $totalrw=konsCibabat::select('rw')->orderBy('rw', 'asc')->groupBy('rw')->get();
        $totalrwp=KonsPasirkaliki::select('rw')->orderBy('rw', 'asc')->groupBy('rw')->get();
        $totrt=konsCibabat::select('rw','rt', DB::raw('count(*) as total'))->orderBy('rw', 'asc')->groupBy('rw','rt')->get();
        $totrtp=KonsPasirkaliki::select('rw','rt', DB::raw('count(*) as total'))->orderBy('rw', 'asc')->groupBy('rw','rt')->get();
        $a = konsCibabat::select('rw')
            ->groupBy('rw')
            ->pluck('rw')
            ->toArray();
        $b = KonsPasirkaliki::select('rw')
            ->groupBy('rw')
            ->pluck('rw')
            ->toArray();
        //dd($a);
        $total=[
            'konscibabat'=>$konscibabat,
            'konspaskal'=>$konspaskal,
            'totpaskal'=>$totpaskal,
            'totcibabat'=>$totcibabat,
            'totalbyrt' => $totrt,
            'totalbyrtp' => $totrtp,
            'totalbyrw' => $totrw,
            'totalbyrwp' => $totrwp,
            'totalrw' =>$totalrw,
            'totalrwp' =>$totalrwp,
            '002'=>konsCibabat::gruprw('002')->get(),
            '003'=>konsCibabat::gruprw('003')->get(),
            '004'=>konsCibabat::gruprw('004')->get(),
            '005'=>konsCibabat::gruprw('005')->get(),
            '006'=>konsCibabat::gruprw('006')->get(),
            '008'=>konsCibabat::gruprw('008')->get(),
            '010'=>konsCibabat::gruprw('010')->get(),
            '011'=>konsCibabat::gruprw('011')->get(),
            '018'=>konsCibabat::gruprw('018')->get(),
            '019'=>konsCibabat::gruprw('019')->get(),
            '020'=>konsCibabat::gruprw('020')->get(),
            '021'=>konsCibabat::gruprw('021')->get(),
            '012p'=>KonsPasirkaliki::gruprwp('012')->get(),
            ];
        return view('index',['total'=>$total, 'trw'=>$a, 'trwp'=>$b]);
    }
}
