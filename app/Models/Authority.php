<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Authority extends Model implements TranslatableContract
{
    use Translatable;

    public $useTranslationFallback = true;

    public array $translatedAttributes = ['title'];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    public function modifiers(): BelongsTo
    {
        return $this->belongsTo(User::class, 'modifier_id');
    }
}
