<?php

namespace Admin\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;

class VotoTable extends AbstractTableGateway
{
    // Tabela de referencia do banco
    protected $table = 'tb_voto';
    

    // Recebe um adaptador e instancia o model que vai trabalhar
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->resultSetPrototype = new ResultSet();
        $this->resultSetPrototype->setArrayObjectPrototype(new Voto());

        $this->initialize();
    }


    // Retorna um dado especifico
    public function getVoto($id_voto)
    {
        $id_voto  = (int) $id_voto;
        $rowset = $this->select(array('id_voto' => $id_voto));
        $row = $rowset->current();
        
        if (!$row)
            throw new \Exception("Could not find row $id_voto");
        
        return $row;
    }
    

    // Faz update dos dados
    public function saveVoto(Voto $voto)
    {
        $data = array(
            'ds_como_funciona_proporcional'         => $voto->ds_como_funciona_proporcional,
            'ds_etapas_sistema_proporcional'        => $voto->ds_etapas_sistema_proporcional,
            'ds_quociente_eleitoral_proporcional'   => $voto->ds_quociente_eleitoral_proporcional,
            'ds_quociente_partidário_proporcional'  => $voto->ds_quociente_partidário_proporcional,
            'ds_sobra_vagas_proporcional'           => $voto->ds_sobra_vagas_proporcional,
            'ds_oque_e_branco'                      => $voto->ds_oque_e_branco,
            'ds_vai_para_candidato_branco'          => $voto->ds_vai_para_candidato_branco,
            'ds_consequencia_voto_branco'           => $voto->ds_consequencia_voto_branco,
            'ds_oque_e_nulo'                        => $voto->ds_oque_e_nulo,
            'ds_50_por_cento_nulo'                  => $voto->ds_50_por_cento_nulo,
            'ds_anular_eleicao_nulo'                => $voto->ds_anular_eleicao_nulo,
        );

        return $this->update($data, array('id_voto' => 1));
    }
}
