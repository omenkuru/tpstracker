<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KonsPasirkaliki extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function scopeGruprwp($query, $datarw)
    {
            //$query->where('rw', $datarw);
            $query->where('rw', $datarw)->select('rt', DB::raw('count(*) as total'))->orderBy('rt', 'asc')->groupBy('rt');
    }
}
