<?php
namespace Admin\Form;

use Zend\Form\Form;

class VotoForm extends Form
{
    public function __construct()
    {
        parent::__construct('voto');
        
        $form = new Form();
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name'       => 'ds_como_funciona_proporcional',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Como funciona o voto proporcional',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_etapas_sistema_proporcional',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Etapas do sistema proporcional',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_quociente_eleitoral_proporcional',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Quociente eleitoral proporcional',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_quociente_partidário_proporcional',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Quociente partidário proporcional',
                ),
            )
        );
        
        $this->add(array(
            'name'       => 'ds_sobra_vagas_proporcional',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Sobra vagas proporcional',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_oque_e_branco',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que é voto branco',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_vai_para_candidato_branco',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Voto branco vai para alguém',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_consequencia_voto_branco',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Consequencia do voto branco',
                ),
            )
        );
        
        $this->add(array(
            'name'       => 'ds_oque_e_nulo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que é voto nulo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_50_por_cento_nulo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => '50% dos votos nulos',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_anular_eleicao_nulo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Anular eleição pelo voto nulo',
                ),
            )
        );
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Editar',
                'class' => 'btn-floating btn-large waves-effect waves-light right red'
            ),
        ));

    }
}