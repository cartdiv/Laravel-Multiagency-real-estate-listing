<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function incrementPopularity()
    {
        $this->popularity++;
        $this->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id','id');
    }
    public function agent()
    {
        return $this->belongsTo(Agent::class,'agent_id', 'agency_id');
    }

    

    public function agentinfo()
    {
        return $this->belongsTo(User::class,'agent_id', 'id');
        # code...
    }
}
