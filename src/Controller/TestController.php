<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Test number: '.$number.'</body></html>'
        );
    }
}
?>