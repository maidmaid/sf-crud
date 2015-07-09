<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('article', new Route('/', array(
    '_controller' => 'AppBundle:Article:index',
)));

$collection->add('article_show', new Route('/{id}/show', array(
    '_controller' => 'AppBundle:Article:show',
)));

$collection->add('article_new', new Route('/new', array(
    '_controller' => 'AppBundle:Article:new',
)));

$collection->add('article_create', new Route(
    '/create',
    array('_controller' => 'AppBundle:Article:create'),
    array(),
    array(),
    '',
    array(),
    'POST'
));

$collection->add('article_edit', new Route('/{id}/edit', array(
    '_controller' => 'AppBundle:Article:edit',
)));

$collection->add('article_update', new Route(
    '/{id}/update',
    array('_controller' => 'AppBundle:Article:update'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'PUT')
));

$collection->add('article_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'AppBundle:Article:delete'),
    array(),
    array(),
    '',
    array(),
    array('POST', 'DELETE')
));

return $collection;
