<?php

namespace Davidpeach\RandomQuotesGenerator;

class Quote
{
    /**
     * Return a random quote
     * @return string
     */
    public static function random(): string
    {
        $key = rand(0, count(static::quotes())-1);

        $template = "<style>blockquote { max-width: 60rem; margin: 100px auto; font-size: 4rem; color: #444; } p {margin-bottom: 0;} cite {font-size: .5em; display:block; text-align: right;}</style><blockquote><p>%s</p><cite>&mdash; %s</cite></blockquote>";

        return sprintf($template, static::quotes()[$key]['quote'], static::quotes()[$key]['citation']);
    }

    public static function quotes(): array
    {
        return [
            [
                "citation" => "superhans",
                "quote" => "Thoughts? You wanna give that s**t a rest. You’ve been going and thinking thoughts your whole life. And look where that’s got you, eh?",

            ],
            [
                "citation" => "superhans",
                "quote" => "You’ve got a bloody suitcase on wheels. Real men don’t get the earth to help carry their luggage, mate. They carry it themselves.",
            ],
            [
                "citation" => "superhans",
                "quote" => "You need to come and get me, Jez. I've accidentally run to Windsor. I didn't meant to, it\'s just the endorphins kicked in and I couldn't stop. My legs have gone, man. I'm a jelly. Paralysed. Feels f**king brilliant.",

            ],
            [
                "citation" => "superhans",
                "quote" => "Ooh yeah. These are the good times, love: after the initial nausea passes but before the grinding comedown. Lovely.",

            ],
            [
                "citation" => "superhans",
                "quote" => "Here you go, free munchies. The secret ingredient is crime.",
            ]
        ];
    }
}
