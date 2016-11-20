<?php

namespace Home\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class CargoTable extends AbstractTableGateway
{
    protected $table = 'tb_cargo';
    

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Cargo());

        $this->initialize();
    }


    public function getcargo($id_cargo)
    {
        $id_cargo  = (int) $id_cargo;
        $rowset = $this->select(array('id_cargo' => $id_cargo));
        $row = $rowset->current();
        
        if (!$row)
            throw new \Exception("Could not find row $id_cargo");
        
        return $row;
    }
}
