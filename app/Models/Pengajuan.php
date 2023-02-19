<?php

namespace App\Models;

use App\Models\Masyarakat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = "pengajuan";
    protected $guarded = [];
    protected $casts = [
        'penghasilan' => 'integer'
    ];

    /**
     * Get the user associated with the Pengajuan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function masyarakat(): HasOne
    {
        return $this->hasOne(Masyarakat::class, 'id', 'masyarakat_id');
    }
}
