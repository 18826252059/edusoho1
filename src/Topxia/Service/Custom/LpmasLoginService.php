<?php
namespace Topxia\Service\Custom;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: XT
 * Date: 16/4/14
 * Time: 14:19
 */
interface LpmasLoginService
{

    function loginProcess(Request $request,$container);
}