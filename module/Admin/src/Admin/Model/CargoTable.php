<?php

namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class CargoTable extends AbstractTableGateway
{
    // Tabela de referencia do banco
    protected $table = 'tb_cargo';
    

    // Recebe um adaptador e instancia o model que vai trabalhar
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Cargo());

        $this->initialize();
    }


    // Retorna um dado especifico
    public function getcargo($id_cargo)
    {
        $id_cargo  = (int) $id_cargo;
        $rowset = $this->select(array('id_cargo' => $id_cargo));
        $row = $rowset->current();
        
        if (!$row)
            throw new \Exception("Could not find row $id_cargo");
        
        return $row;
    }
    

    // Faz update dos dados
    public function savecargo(Cargo $cargo)
    {
        $data = array(
            'ds_prefeito_executivo'             => $cargo->ds_prefeito_executivo,
            'ds_governador_executivo'           => $cargo->ds_governador_executivo,
            'ds_presidente_executivo'           => $cargo->ds_presidente_executivo,
            'ds_vereador_legislativo'           => $cargo->ds_vereador_legislativo,
            'ds_deputado_estadual_legislativo'  => $cargo->ds_deputado_estadual_legislativo,
            'ds_deputado_federal_legislativo'   => $cargo->ds_deputado_federal_legislativo,
            'ds_senador_legislativo'            => $cargo->ds_senador_legislativo,
            'ds_promotor_judiciario'            => $cargo->ds_promotor_judiciario,
            'ds_juiz_judiciario'                => $cargo->ds_juiz_judiciario,
            'ds_desembargador_judiciario'       => $cargo->ds_desembargador_judiciario,
        );

        return $this->update($data, array('id_cargo' => 1));
    }
}
