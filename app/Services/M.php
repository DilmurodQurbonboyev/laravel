<?php

namespace App\Services;

use App\Models\Message;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class M
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public static function t($messageRequest, $params = [], $lang = null)
    {

        $lang = !isset($lang) ? app()->getLocale() : $lang;

        if (!cache()->get('messagesArray')) {
            self::messagesSetCache();
        }

        foreach (cache()->get('messagesArray') as $cache) {
            if ($messageRequest == $cache['key']) {
                if (empty($cache['title'][$lang])) {
                    $messageRequest = $cache['key'];
                } else {
                    $messageRequest = $cache['title'][$lang];
                }
            }
        }


        $array = [];
        foreach ($params as $key => $value) {
            $array["{{$key}}"] = $value;
        }
        return count($array) > 0 ? strtr($messageRequest, $array) : $messageRequest;
    }

    public static function messagesSetCache(): void
    {
        cache()->flush();
        $messages = Message::getAllMessages();
        cache()->remember('messagesArray', now()->addMonth(), function () use ($messages) {
            return $messages;
        });
    }


}
