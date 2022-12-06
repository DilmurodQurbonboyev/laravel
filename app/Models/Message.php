<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Message extends Model implements TranslatableContract
{
    use Translatable;

    public $useTranslationFallback = true;

    public array $translatedAttributes = ['title'];

    protected $fillable = ['key'];

    public static function getAllMessages(): array
    {
        $messagesArray = [];
        $messages = self::query()->select(['id', 'key'])->with('translations')->get()->toArray();
        foreach ($messages as $message):
            $array = [];
            foreach ($message['translations'] as $item):
                $array[$item['locale']] = $item['title'];
            endforeach;

            $messagesArray[] = [
                'id' => $message['id'],
                'key' => $message['key'],
                'title' => $array,
            ];
        endforeach;
        return $messagesArray;
    }

}
