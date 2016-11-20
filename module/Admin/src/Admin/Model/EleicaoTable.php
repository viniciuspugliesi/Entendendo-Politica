<?php

namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class EleicaoTable extends AbstractTableGateway
{
    // Tabela de referencia do banco
    protected $table = 'tb_eleicao';
    

    // Recebe um adaptador e instancia o model que vai trabalhar
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Eleicao());

        $this->initialize();
    }


    // Retorna um dado especifico
    public function getEleicao($id_eleicao)
    {
        $id_eleicao  = (int) $id_eleicao;
        $rowset = $this->select(array('id_eleicao' => $id_eleicao));
        $row = $rowset->current();
        
        if (!$row)
            throw new \Exception("Could not find row $id_eleicao");
        
        return $row;
    }
    

    // Faz update dos dados
    public function saveEleicao(Eleicao $eleicao)
    {
        $data = array(
            'ds_como_funciona_municipais'           => $eleicao->ds_como_funciona_municipais,
            'ds_candidatos_eleitos_municipais'      => $eleicao->ds_candidatos_eleitos_municipais,
            'ds_como_funciona_estaduais'            => $eleicao->ds_como_funciona_estaduais,
            'ds_candidatos_eleitos_estaduais'       => $eleicao->ds_candidatos_eleitos_estaduais,
            'ds_como_funciona_presidenciais'        => $eleicao->ds_como_funciona_presidenciais,
            'ds_candidatos_eleitos_presidenciais'   => $eleicao->ds_candidatos_eleitos_presidenciais,
            'ds_consequencia_voto_branco'           => $eleicao->ds_consequencia_voto_branco,
        );

        return $this->update($data, array('id_eleicao' => 1));
    }
}
