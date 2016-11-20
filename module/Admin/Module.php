<?php

namespace Admin;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

use Admin\Model\HomeTable;
use Admin\Model\CargoTable;
use Admin\Model\VotoTable;
use Admin\Model\PoderTable;
use Admin\Model\EleicaoTable;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        
        $e->getApplication()->getEventManager()->getSharedManager()->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function($e) {
            $controller = $e->getTarget();
            $controllerClass = get_class($controller);
            $moduleNamespace = substr($controllerClass, 0, strpos($controllerClass, '\\'));
            $config = $e->getApplication()->getServiceManager()->get('config');
            
            if (isset($config['module_layouts'][$moduleNamespace]))
                $controller->layout($config['module_layouts'][$moduleNamespace]);
                
        }, 100);
    }  

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    
    /**
     * Configurações de Adaptador com o banco de dados
     * 
     */ 
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                // HOME
                'Admin\Model\HomeTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new HomeTable($dbAdapter);
                    return $table;
                },
                
                // CARGO
                'Admin\Model\CargoTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new CargoTable($dbAdapter);
                    return $table;
                },
                
                // VOTO
                'Admin\Model\VotoTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new VotoTable($dbAdapter);
                    return $table;
                },
                
                // PODER
                'Admin\Model\PoderTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new PoderTable($dbAdapter);
                    return $table;
                },
                
                // ELEIÇÃO
                'Admin\Model\EleicaoTable' =>  function($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $table = new EleicaoTable($dbAdapter);
                    return $table;
                },
            ),
        );
    }  
}