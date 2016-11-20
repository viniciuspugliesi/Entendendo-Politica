<?php
namespace Admin\Form;

use Zend\Form\Form;

class PoderForm extends Form
{
    public function __construct()
    {
        parent::__construct('poder');
        
        $form = new Form();
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name'       => 'ds_oque_e_executivo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que é o poder executivo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_oque_faz_executivo_municipal',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que faz o poder executivo municipal',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_oque_faz_executivo_estadual',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que faz o poder executivo estadual',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_oque_faz_executivo_federal',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que faz o poder executivo federal',
                ),
            )
        );
        
        $this->add(array(
            'name'       => 'ds_oque_e_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que é o poder legislativo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_oque_faz_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que faz o poder legislativo',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_criar_leis_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Criar leis',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_orcamental_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Orçamentos',
                ),
            )
        );
        
        $this->add(array(
            'name'       => 'ds_guerra_paz_legislativo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Decisão de guerra ou paz',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_oque_e_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'O que é poder judiciário',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_principios_garantias_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Principíos do poder judiciário',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_tribunal_federal_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Tribunal federal judiciário',
                ),
            )
        );
        
        $this->add(array(
            'name'       => 'ds_tribunal_justica_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Tribunal de justiça judiciário',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_tribunal_regional_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Tribunal regional judiciário',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_tribunal_trabalho_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Tribunal do trabalho judiciário',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_tribunal_eleitoral_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Tribunal eleitoral judiciário',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_tribunal_militar_judiciario',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Tribunal militar judiciário',
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