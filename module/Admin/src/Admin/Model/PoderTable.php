<?php

namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class PoderTable extends AbstractTableGateway
{
    // Tabela de referencia do banco
    protected $table = 'tb_poderes';
    

    // Recebe um adaptador e instancia o model que vai trabalhar
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Poder());

        $this->initialize();
    }


    // Retorna um dado especifico
    public function getPoder($id_poderes)
    {
        $id_poderes  = (int) $id_poderes;
        $rowset = $this->select(array('id_poderes' => $id_poderes));
        $row = $rowset->current();
        
        if (!$row) 
            throw new \Exception("Could not find row $id_poderes");
        
        return $row;
    }
    

    // Faz update dos dados
    public function savePoder(Poder $poder)
    {
        $data = array(
            'id_poder'                          => $poder->id_poder,
            'ds_oque_e_executivo'               => $poder->ds_oque_e_executivo,
            'ds_oque_faz_executivo_municipal'   => $poder->ds_oque_faz_executivo_municipal,
            'ds_oque_faz_executivo_estadual'    => $poder->ds_oque_faz_executivo_estadual,
            'ds_oque_faz_executivo_federal'     => $poder->ds_oque_faz_executivo_federal,
            'ds_oque_e_legislativo'             => $poder->ds_oque_e_legislativo,
            'ds_oque_faz_legislativo'           => $poder->ds_oque_faz_legislativo,
            'ds_criar_leis_legislativo'         => $poder->ds_criar_leis_legislativo,
            'ds_orcamental_legislativo'         => $poder->ds_orcamental_legislativo,
            'ds_guerra_paz_legislativo'         => $poder->ds_guerra_paz_legislativo,
            'ds_oque_e_judiciario'              => $poder->ds_oque_e_judiciario,
            'ds_principios_garantias_judiciario'=> $poder->ds_principios_garantias_judiciario,
            'ds_tribunal_federal_judiciario'    => $poder->ds_tribunal_federal_judiciario,
            'ds_tribunal_justica_judiciario'    => $poder->ds_tribunal_justica_judiciario,
            'ds_tribunal_regional_judiciario'   => $poder->ds_tribunal_regional_judiciario,
            'ds_tribunal_trabalho_judiciario'   => $poder->ds_tribunal_trabalho_judiciario,
            'ds_tribunal_eleitoral_judiciario'  => $poder->ds_tribunal_eleitoral_judiciario,
            'ds_tribunal_militar_judiciario'    => $poder->ds_tribunal_militar_judiciario,
        );

        return $this->update($data, array('id_voto' => 1));
    }
}
