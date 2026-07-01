<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    // Kategori ini mencakup (belongsToMany) Campaign apa saja?
    public function campaigns()

{

// Parameter kedua adalah nama tabel pivot yang kita buatij migr41100 
return $this->belongsToMany(Campaign::class, 'campaign_category');
}
}
