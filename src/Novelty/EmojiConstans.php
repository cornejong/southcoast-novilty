<?php

namespace SouthCoast\Novelty;

class EmojiConstans
{
    /**
     * @var array
     */
    protected static $constants = [
        '👍' => true,
        '👎' => false,
        '❌' => false,
        '✅' => true,
        '❗️' => '',
        '‼️' => '',
        '⁉️' => '',
        '',
    ];

    /**
     * Add a custom emoji constant
     *
     * @param string $emoji
     * @param $value
     */
    public static function add(string $emoji, $value)
    {
        self::$constants[$emoji] = $value;
    }

    /**
     * registers and defines the constants in self::$constants
     *
     * @return void
     */
    public static function register()
    {
        foreach (self::$constants as $emoji => $value) {
            if (!defined($emoji)) {
                define($emoji, $value);
            }
        }
    }
}
