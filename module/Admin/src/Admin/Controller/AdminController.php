<?php

namespace Admin\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\Request;

// Models
    use Admin\Model\Home;
    use Admin\Model\Cargo;
    use Admin\Model\Eleicao;
    use Admin\Model\Poder;
    use Admin\Model\Voto;

// Forms
    use Admin\Form\HomeForm;
    use Admin\Form\CargoForm;
    use Admin\Form\EleicaoForm;
    use Admin\Form\PoderForm;
    use Admin\Form\VotoForm;

class AdminController extends AbstractActionController
{
    protected $homeTable;
    protected $eleicaoTable;
    protected $votoTable;
    protected $cargoTable;
    protected $poderTable;
    
    // Métodos responsáveis pela view index
        public function indexAction()
        {
            // Query com o banco de dados retornando o valor de id = 1
            $home = $this->getHomeTable()->getHome(1); // id do banco
            
            $form = new HomeForm();
            $form->bind($home);
            
            return new ViewModel([
                'form' => $form
            ]);
        }
        
        public function updateIndexAction()
        {
            $request = $this->getRequest();
            
            if (!$request->isPost())
                return $this->redirect()->toRoute('home_admin');
            
            $home = $this->getHomeTable()->getHome(1);
            
            $form = new HomeForm();
            $form->bind($home);
            $form->get('submit')->setAttribute('value', 'Edit');
            
            $form->setData($request->getPost()); 
            
            if (!$form->isValid())
                return $this->redirect()->toRoute('home_admin');
                
            $this->getHomeTable()->saveHome($home);
            
            return $this->redirect()->toRoute('home_admin');
        }
        
        public function getHomeTable()
        {
            if (!$this->homeTable) {
                $sm = $this->getServiceLocator();
                $this->homeTable = $sm->get('Admin\Model\HomeTable');
            }
            return $this->homeTable;
        }   
    
    
    
    
    // Métodos responsáveis pela view eleições
        public function eleicaoAction()
        {
            $eleicao = $this->getEleicaoTable()->getEleicao(1); // id do banco
            
            $form = new EleicaoForm();
            $form->bind($eleicao);
            
            return new ViewModel([
                'form' => $form
            ]);
        }
        
        public function updateEleicaoAction()
        {
            $request = $this->getRequest();
            
            if (!$request->isPost())
                return $this->redirect()->toRoute('eleições_admin');
            
            $eleicao = $this->getEleicaoTable()->getEleicao(1);
            
            $form = new EleicaoForm();
            $form->bind($eleicao);
            $form->get('submit')->setAttribute('value', 'Edit');
            
            $form->setData($request->getPost()); 
            
            if (!$form->isValid())
                return $this->redirect()->toRoute('eleições_admin');
                
            $this->getEleicaoTable()->saveEleicao($eleicao);
            
            return $this->redirect()->toRoute('eleições_admin');
        }
        
        public function getEleicaoTable()
        {
            if (!$this->eleicaoTable) {
                $sm = $this->getServiceLocator();
                $this->eleicaoTable = $sm->get('Admin\Model\EleicaoTable');
            }
            return $this->eleicaoTable;
        }  
    
    
    
    
    // Métodos responsáveis pela view votos
        public function votoAction()
        {
            $voto = $this->getVotoTable()->getVoto(1); // id do banco
            
            $form = new VotoForm();
            $form->bind($voto);
            
            return new ViewModel([
                'form' => $form
            ]);
        }
        
        public function updateVotoAction()
        {
            $request = $this->getRequest();
            
            if (!$request->isPost())
                return $this->redirect()->toRoute('votos_admin');
            
            $voto = $this->getVotoTable()->getVoto(1);
            
            $form = new VotoForm();
            $form->bind($voto);
            $form->get('submit')->setAttribute('value', 'Edit');
            
            $form->setData($request->getPost()); 
            
            if (!$form->isValid())
                return $this->redirect()->toRoute('votos_admin');
                
            $this->getVotoTable()->saveVoto($voto);
            
            return $this->redirect()->toRoute('votos_admin');
        }  
    
        public function getVotoTable()
        {
            if (!$this->votoTable) {
                $sm = $this->getServiceLocator();
                $this->votoTable = $sm->get('Admin\Model\VotoTable');
            }
            return $this->votoTable;
        }  
    
    
    
    
    // Métodos responsáveis pela view cargos
        public function cargoAction()
        {
            $cargo = $this->getCargoTable()->getCargo(1); // id do banco
            
            $form = new CargoForm();
            $form->bind($cargo);
            
            return new ViewModel([
                'form' => $form
            ]);
        }
        
        public function updateCargoAction()
        {
            $request = $this->getRequest();
            
            if (!$request->isPost())
                return $this->redirect()->toRoute('cargos_admin');
            
            $cargo = $this->getCargoTable()->getCargo(1);
            
            $form = new CargoForm();
            $form->bind($cargo);
            $form->get('submit')->setAttribute('value', 'Edit');
            
            $form->setData($request->getPost()); 
            
            if (!$form->isValid())
                return $this->redirect()->toRoute('cargos_admin');
                
            $this->getCargoTable()->saveCargo($cargo);
            
            return $this->redirect()->toRoute('cargos_admin');
        }
            
        public function getCargoTable()
        {
            if (!$this->cargoTable) {
                $sm = $this->getServiceLocator();
                $this->cargoTable = $sm->get('Admin\Model\CargoTable');
            }
            return $this->cargoTable;
        }    
    
    
    
    
    
    
    // Métodos responsáveis pela view poderes
        public function poderAction()
        {
            $poder = $this->getPoderTable()->getPoder(1); // id do banco
            
            $form = new PoderForm();
            $form->bind($poder);
            
            return new ViewModel([
                'form' => $form
            ]);
        }
        
        public function updatePoderAction()
        {
            $request = $this->getRequest();
            
            if (!$request->isPost())
                return $this->redirect()->toRoute('poderes_sadmin');
            
            $poderes = $this->getPoderTable()->getPoder(1);
            
            $form = new PoderForm();
            $form->bind($poderes);
            $form->get('submit')->setAttribute('value', 'Edit');
            
            $form->setData($request->getPost()); 
            
            if (!$form->isValid())
                return $this->redirect()->toRoute('poderes_sadmin');
                
            $this->getPoderTable()->savePoder($poderes);
            
            return $this->redirect()->toRoute('poderes_sadmin');
        }
            
        public function getPoderTable()
        {
            if (!$this->poderTable) {
                $sm = $this->getServiceLocator();
                $this->poderTable = $sm->get('Admin\Model\PoderTable');
            }
            return $this->poderTable;
        } 
}