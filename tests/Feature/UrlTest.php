<?php

namespace Tests\Feature;

use Tests\TestCase;

class UrlTest extends TestCase
{

    /**
     * Teste le bon fonctionnement de toutes les URLs du site.
     *
     * @return void
     */
    public function testUrls()
    {
        $urls = [
            '/',
            '/destination',
            '/crew',
            '/technology',
        ];

        foreach ($urls as $url) {
            $response = $this->get($url);
            $response->assertStatus(200);
        }
    }
}