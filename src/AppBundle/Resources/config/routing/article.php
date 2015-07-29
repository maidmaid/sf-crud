<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('article_index', new Route(
    '/',
    array('_controller' => 'AppBundle:Article:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('article_show', new Route(
    '/{id}/show',
    array('_controller' => 'AppBundle:Article:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('article_new', new Route(
    '/new',
    array('_controller' => 'AppBundle:Article:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('article_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'AppBundle:Article:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('article_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:Article:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
