<?php

/*
    Copyright (C) 2014 Anton Dachauer (kontakt@webworks-nuernberg.de)

    Dieses Programm ist freie Software. Sie können es unter den
    Bedingungen der GNU General Public License, wie von der Free Software
    Foundation veröffentlicht, weitergeben und/oder modifizieren, entweder
    gemäß Version 2 der Lizenz oder (nach Ihrer Option) jeder späteren
    Version.

    Die Veröffentlichung dieses Programms erfolgt in der Hoffnung, dass es
    Ihnen von Nutzen sein wird, aber OHNE IRGENDEINE GARANTIE, sogar ohne
    die implizite Garantie der MARKTREIFE oder der VERWENDBARKEIT FÜR
    EINEN BESTIMMTEN ZWECK. Details finden Sie in der GNU General Public
    License.

    Sie sollten ein Exemplar der GNU General Public License zusammen mit
    diesem Programm erhalten haben. Falls nicht, schreiben Sie an die Free
    Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA
    02110, USA.
*/

namespace Webworks\ClientBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/hello/Fabien');

        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
}
