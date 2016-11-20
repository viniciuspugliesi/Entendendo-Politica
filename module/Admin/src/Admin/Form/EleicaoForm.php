<?php
namespace Admin\Form;

use Zend\Form\Form;

class EleicaoForm extends Form
{
    public function __construct()
    {
        parent::__construct('eleicao');
        
        $form = new Form();
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name'       => 'ds_como_funciona_municipais',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Como funciona municipais',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_candidatos_eleitos_municipais',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Candidatos eleitos municipais',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_como_funciona_estaduais',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Como funciona estaduais',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_candidatos_eleitos_estaduais',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Candidatos eleitos estaduais',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_como_funciona_presidenciais',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Como funciona presidenciais',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_candidatos_eleitos_presidenciais',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Candidatos eleitos presidenciais',
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