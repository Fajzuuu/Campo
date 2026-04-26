<<<<<<< HEAD
<?php

use CodeIgniter\Test\CIUnitTestCase;

/**
 * @internal
 */
final class ExampleSessionTest extends CIUnitTestCase
{
    public function testSessionSimple(): void
    {
        $session = service('session');

        $session->set('logged_in', 123);
        $this->assertSame(123, $session->get('logged_in'));
    }
}
=======
<?php

use CodeIgniter\Test\CIUnitTestCase;

/**
 * @internal
 */
final class ExampleSessionTest extends CIUnitTestCase
{
    public function testSessionSimple(): void
    {
        $session = service('session');

        $session->set('logged_in', 123);
        $this->assertSame(123, $session->get('logged_in'));
    }
}
>>>>>>> 5b5a62520b565197c76a679bd226b41beeeeb20d
