<?php

namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class HomeTable extends AbstractTableGateway
{
    // Tabela de referencia do banco
    protected $table = 'tb_home';
    
    
    // Recebe um adaptador e instancia o model que vai trabalhar
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        
        //Resultset: faz a parte de interação com o BD
        $this->resultSetPrototype = new ResultSet();
        
        //Seto uma instacia do Model que possui as colunas do banco
        $this->resultSetPrototype->setArrayObjectPrototype(new Home());

        $this->initialize();
    }


    // Retorna um dado especifico
    public function getHome($id_home)
    {
        $id_home  = (int) $id_home;
        $rowset = $this->select(array('id_home' => $id_home));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id_home");
        }
        return $row;
    }
    
    
    // Faz update dos dados
    public function saveHome(Home $home)
    {
        $data = array(
            'ds_senado'     => $home->ds_senado,
            'ds_camara'     => $home->ds_camara,
            'ds_supremo'    => $home->ds_supremo,
            'ds_presidente' => $home->ds_presidente,
        );

        return $this->update($data, array('id_home' => 1));
    }
}
