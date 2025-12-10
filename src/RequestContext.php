<?php

namespace Esoftdream\Http;

class RequestContext
{
    private static $data = [];

    /**
     * Menyimpan data ke dalam variable statis dengan key yang ditentukan
     *
     * @param mixed $value
     *
     * @return void
     */
    public static function set(string $key, $value)
    {
        self::$data[$key] = $value;
    }

    /**
     * Mengembalikan nilai dari data yang disimpan dengan key yang ditentukan.
     * Jika key tidak ditemukan maka akan mengembalikan nilai null.
     *
     * @return mixed|null
     */
    public static function get(string $key)
    {
        return self::$data[$key] ?? null;
    }
}
