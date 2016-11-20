<?php

namespace Admin\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

/**
 * Classe que contém as colunas do banco de dados (tb_home)
 * 
 * InputFilterAwareInterface = Validação dos inputs
 */ 
class Home implements InputFilterAwareInterface
{
    public $id_home;
    public $ds_senado;
    public $ds_camara;
    public $ds_supremo;
    public $ds_presidente;

    protected $inputFilter;
    
    
    // Atribui valor aos atributos da classe
    public function exchangeArray($data)
    {
        $this->id_home     = (isset($data['id_home'])) ? $data['id_home'] : null;
        $this->ds_senado = (isset($data['ds_senado'])) ? $data['ds_senado'] : null;
        $this->ds_camara  = (isset($data['ds_camara'])) ? $data['ds_camara'] : null;
        $this->ds_supremo  = (isset($data['ds_supremo'])) ? $data['ds_supremo'] : null;
        $this->ds_presidente  = (isset($data['ds_presidente'])) ? $data['ds_presidente'] : null;
    }
    
    
    // Metodos obrigatórios do input filter
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }


    // Metodos obrigatórios do input filter
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }


    // Metodos obrigatórios do input filter
    // Valida os campos do input
    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            $factory = new InputFactory();

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_senado',
                'required' => true,
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_camara',
                'required' => true,
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_supremo',
                'required' => true,
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_presidente',
                'required' => true,
            )));

            $this->inputFilter = $inputFilter;        
        }
        return $this->inputFilter;
    }
}