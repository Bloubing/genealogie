<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function children() {
        return $this->belongsToMany(Person::class, 'relationships', 'parent_id', 'child_id')->withTimestamps();
    }

    public function parents() {
        return $this->belongsToMany(Person::class, 'relationships', 'child_id', 'parent_id')->withTimestamps();
    }

    public function user() {
        return $this->belongsTo(User::class, 'created_by');
    }
}

