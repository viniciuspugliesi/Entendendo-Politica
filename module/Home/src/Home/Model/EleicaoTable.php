<?php

namespace Home\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class EleicaoTable extends AbstractTableGateway
{
    protected $table = 'tb_eleicao';
    

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Eleicao());

        $this->initialize();
    }


    public function getEleicao($id_eleicao)
    {
        $id_eleicao  = (int) $id_eleicao;
        $rowset = $this->select(array('id_eleicao' => $id_eleicao));
        $row = $rowset->current();
        
        if (!$row)
            throw new \Exception("Could not find row $id_eleicao");
        
        return $row;
    }
}
