<?php

namespace Essentials\ExampleBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Essentials extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');
        
        $menu->addChild('Home', array('route' => 'homepage'));
        $menu->addChild('Admin', array('route' => 'sonata_admin_dashboard'));
        
        return $menu;
    }
}