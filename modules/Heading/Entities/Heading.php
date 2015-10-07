<?php
namespace Modules\Heading\Entities;
   
use Illuminate\Database\Eloquent\Model;

class Heading extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'heading';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tag',
        'title',
        'css_id',
        'css_class'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}