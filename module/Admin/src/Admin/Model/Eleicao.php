<?php

namespace Admin\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Eleicao implements InputFilterAwareInterface
{
    public $id_eleicao;
    public $ds_como_funciona_municipais;
    public $ds_candidatos_eleitos_municipais;
    public $ds_como_funciona_estaduais;
    public $ds_candidatos_eleitos_estaduais;
    public $ds_como_funciona_presidenciais;
    public $ds_candidatos_eleitos_presidenciais;

    protected $inputFilter;

    /**
     * Used by ResultSet to pass each database row to the entity
     */
    public function exchangeArray($data)
    {
        $this->id_eleicao                             = (isset($data['id_eleicao']))                            ? $data['id_eleicao'] : null;
        $this->ds_como_funciona_municipais          = (isset($data['ds_como_funciona_municipais']))         ? $data['ds_como_funciona_municipais'] : null;
        $this->ds_candidatos_eleitos_municipais     = (isset($data['ds_candidatos_eleitos_municipais']))    ? $data['ds_candidatos_eleitos_municipais'] : null;
        $this->ds_como_funciona_estaduais           = (isset($data['ds_como_funciona_estaduais']))          ? $data['ds_como_funciona_estaduais'] : null;
        $this->ds_candidatos_eleitos_estaduais      = (isset($data['ds_candidatos_eleitos_estaduais']))     ? $data['ds_candidatos_eleitos_estaduais'] : null;
        $this->ds_como_funciona_presidenciais       = (isset($data['ds_como_funciona_presidenciais']))      ? $data['ds_como_funciona_presidenciais'] : null;
        $this->ds_candidatos_eleitos_presidenciais  = (isset($data['ds_candidatos_eleitos_presidenciais'])) ? $data['ds_candidatos_eleitos_presidenciais'] : null;
    }
    

    public function getArrayCopy()
    {
        return get_object_vars($this);
    }


    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }


    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();

            $factory = new InputFactory();

            $inputFilter->add($factory->createInput(array(
                'name'     => 'id_eleicao',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_como_funciona_municipais',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 3000,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_candidatos_eleitos_municipais',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 3000,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_como_funciona_estaduais',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 3000,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_candidatos_eleitos_estaduais',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 3000,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_como_funciona_presidenciais',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 3000,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_candidatos_eleitos_presidenciais',
                'required' => true,
                'filters'  => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
                'validators' => array(
                    array(
                        'name'    => 'StringLength',
                        'options' => array(
                            'encoding' => 'UTF-8',
                            'min'      => 1,
                            'max'      => 3000,
                        ),
                    ),
                ),
            )));

            $this->inputFilter = $inputFilter;        
        }

        return $this->inputFilter;
    }
}
