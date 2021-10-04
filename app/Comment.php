<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;

    public $table = 'comment';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'news_id',
        'email',
        'comment',
        'created_at',
        'updated_at',
        
    ];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }


}
