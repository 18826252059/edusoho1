<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/8
 * Time: 16:29
 */
namespace Acme\HelloBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

class RandomController
{
    public function indexAction($limit)
    {
        return new Response('<html><body>Number: '.rand(1,$limit).'</body></html>');
    }
}