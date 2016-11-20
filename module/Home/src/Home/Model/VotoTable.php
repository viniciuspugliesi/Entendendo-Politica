<?php

namespace Home\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class VotoTable extends AbstractTableGateway
{
    protected $table = 'tb_voto';
    

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Voto());

        $this->initialize();
    }


    public function getVoto($id_voto)
    {
        $id_voto  = (int) $id_voto;
        $rowset = $this->select(array('id_voto' => $id_voto));
        $row = $rowset->current();
        
        if (!$row)
            throw new \Exception("Could not find row $id_voto");
        
        return $row;
    }
}
