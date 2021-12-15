<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterHeader extends Model
{
    protected $primary = 'id';

    protected $table = 'master_header';

    public $timestamps = false;
    
}
