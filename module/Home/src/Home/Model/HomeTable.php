<?php

namespace Home\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class HomeTable extends AbstractTableGateway
{
    protected $table = 'tb_home';
    

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Home());

        $this->initialize();
    }


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
}
