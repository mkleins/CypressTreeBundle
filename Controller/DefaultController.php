<?php
/**
 * User: matteo
 * Date: 18/05/12
 * Time: 17.00
 *
 * Just for fun...
 */

namespace Cypress\TreeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller,
    Symfony\Component\HttpFoundation\Response;
use Cypress\TreeBundle\Interfaces\TreeControllerEditableInterface;

class DefaultController extends Controller implements TreeControllerEditableInterface
{
    /**
     * Controller action to move a tree node
     *
     *
     * @return \Symfony\Component\HttpFoundation\Response must return a Response object with:
     *     "ok": everything worked
     *     "ko": there was a problem
     */
    function sortNodeAction($node, $ref, $move)
    {
        return new Response('ko');
    }

    /**
     * Controller action to add a tree node
     *
     *
     * @return \Symfony\Component\HttpFoundation\Response must return a Response object with:
     *     "ok": everything worked
     *     "ko": there was a problem
     */
    function addNodeAction($parent, $title)
    {
        return new Response('ko');
    }

    function removeNodeAction($node)
    {
        return new Response('ko');
    }

    function renameNodeAction($node, $title)
    {
        return new Response('ko');
    }
}
