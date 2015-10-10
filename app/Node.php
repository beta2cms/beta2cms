<?php

namespace App;

use App\Helpers\ModelHelper;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{

    use ModelHelper;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nodes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'parent_id',
        'order',
        'active',
        'css_id',
        'css_class',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     *  Resolve all children by given element
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(\App\Node::class,'parent_id', 'id');
    }

    /**
     * Resolve the parent entry of given child
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(\App\Node::class, 'parent_id');
    }


    /**
     * Get all Content that is associated with this node
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function content()
    {
        return $this->hasMany(\App\Content::class);
    }


}
