<?php

namespace Home\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

// Models
    use Home\Model\Home;
    use Home\Model\Cargo;
    use Home\Model\Eleicao;
    use Home\Model\Poder;
    use Home\Model\Voto;

class IndexController extends AbstractActionController
{
    protected $homeTable;
    protected $eleicaoTable;
    protected $votoTable;
    protected $cargoTable;
    protected $poderTable;
    
    // Métodos responsáveis pela view index
        public function indexAction()
        {
            return new ViewModel([
                'home' => $this->getHomeTable()->getHome(1)
            ]);
        }
        
        public function getHomeTable()
        {
            if (!$this->homeTable) {
                $sm = $this->getServiceLocator();
                $this->homeTable = $sm->get('Home\Model\HomeTable');
            }
            return $this->homeTable;
        }   
    
    
    
    
    // Métodos responsáveis pela view eleições
        public function eleicaoAction()
        {
            return new ViewModel([
                'eleicao' => $this->getEleicaoTable()->getEleicao(1)
            ]);
        }
        
        public function getEleicaoTable()
        {
            if (!$this->eleicaoTable) {
                $sm = $this->getServiceLocator();
                $this->eleicaoTable = $sm->get('Home\Model\EleicaoTable');
            }
            return $this->eleicaoTable;
        }  
    
    
    
    
    // Métodos responsáveis pela view votos
        public function votoAction()
        {
            return new ViewModel([
                'voto' => $this->getVotoTable()->getVoto(1)
            ]);
        }
        
        public function getVotoTable()
        {
            if (!$this->votoTable) {
                $sm = $this->getServiceLocator();
                $this->votoTable = $sm->get('Home\Model\VotoTable');
            }
            return $this->votoTable;
        }  
    
    
    
    
    // Métodos responsáveis pela view cargos
        public function cargoAction()
        {
            return new ViewModel([
                'cargo' => $this->getCargoTable()->getCargo(1)
            ]);
        }
        
        public function getCargoTable()
        {
            if (!$this->cargoTable) {
                $sm = $this->getServiceLocator();
                $this->cargoTable = $sm->get('Home\Model\CargoTable');
            }
            return $this->cargoTable;
        }    
    
    
    
    
    
    
    // Métodos responsáveis pela view poderes
        public function poderAction()
        {
            return new ViewModel([
                'poder' => $this->getPoderTable()->getPoder(1)
            ]);
        }
        
        public function getPoderTable()
        {
            if (!$this->poderTable) {
                $sm = $this->getServiceLocator();
                $this->poderTable = $sm->get('Home\Model\PoderTable');
            }
            return $this->poderTable;
        } 
}
