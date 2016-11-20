<?php
namespace Admin\Form;

use Zend\Form\Form;

class CargoForm extends Form
{
    public function __construct()
    {
        parent::__construct('cargo');
        
        $form = new Form();
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name'       => 'ds_prefeito_executivo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Prefeito executivo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_governador_executivo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Governador executivo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_presidente_executivo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Presidente executivo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_vereador_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Vereador legislativo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_deputado_estadual_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Deputado estadual legislativo',
                ),
            )
        );
        
        $this->add(array(
            'name'       => 'ds_deputado_federal_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Deputado federal legislativo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_senador_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Senador legislativo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_promotor_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Promotor judiciario',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_juiz_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Juiz judiciario',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_desembargador_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Desembargador judiciario',
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