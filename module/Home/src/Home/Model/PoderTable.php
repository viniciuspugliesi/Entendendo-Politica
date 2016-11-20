<?php

namespace Home\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class PoderTable extends AbstractTableGateway
{
    protected $table = 'tb_poderes';
    

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Poder());

        $this->initialize();
    }


    public function getPoder($id_poderes)
    {
        $id_poderes  = (int) $id_poderes;
        $rowset = $this->select(array('id_poderes' => $id_poderes));
        $row = $rowset->current();
        
        if (!$row) 
            throw new \Exception("Could not find row $id_poderes");
        
        return $row;
    }
}
