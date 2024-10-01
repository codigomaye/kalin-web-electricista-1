<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Electricista Sierra',
    'siteDescription' => 'Generate an elegant blog with Jigsaw',
    'siteAuthor' => 'Author Name',

    'menu' => [
    	['title' => 'Servicios', 'url' => '#servicios'],
	    ['title' => ' ¿Por qué elegirnos?', 'url' => '#porque-elegirnos'],
  	    ['title' => 'Preguntas Frecuentes', 'url' => '#preguntas-frecuentes'],
    	['title' => 'Contactos', 'url' => '#contactos'],

    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'whatsApp' => '+34695330895',
];
