<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['id', 'client_id', 'project_name', 'starting_date', 'closing_date', 'status'];
}