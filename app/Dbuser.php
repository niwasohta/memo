<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dbuser extends Model
{
        public function getByLimit(int $limit_count = 10)
    {
    // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
        public function getPaginateByLimit(int $limit_count = 10)
    {
    // updated_atで好順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
        protected $fillable = [
            'opinion1',
            'opinion2',
            'opinion3',
            'problem1',
            'problem2',
            'problem3',
    ];
}
