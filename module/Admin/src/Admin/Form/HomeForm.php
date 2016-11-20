<?php
namespace Admin\Form;

use Zend\Form\Form;

class HomeForm extends Form
{
    public function __construct()
    {
        parent::__construct('home');
        
        $form = new Form();
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name'       => 'ds_senado',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                'required' => true,
                ),
                'options' => array(
                    'label' => 'Senado',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_camara',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Camara',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_presidente',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Presidente',
                ),
            )
        );

        $this->add(array(
            'name'       => 'ds_supremo',
            'attributes' => array(
                'type'  => 'textarea',
                'class' => 'materialize-textarea',
                ),
                'options' => array(
                    'label' => 'Supremo',
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