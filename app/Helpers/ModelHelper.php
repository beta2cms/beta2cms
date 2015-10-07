<?php

namespace App\Helpers;

trait ModelHelper
{
    /**
     * Return all active items from Model
     *
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * Order all Items
     *
     * @param $query
     * @return mixed
     */
    public function scopeOrder($query)
    {
        return $query->orderBy('order');
    }

    /**
     * Find Element by Slug
     *
     * @param $query
     * @param $slug
     * @return mixed
     */
    public function scopeFindBySlug($query, $slug)
    {
        return $query->where('slug', $slug)->firstOrFail();
    }
}