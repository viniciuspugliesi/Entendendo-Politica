<?php

namespace Home\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Poder implements InputFilterAwareInterface
{
    public $id_poder;
    public $ds_oque_e_executivo;
    public $ds_oque_faz_executivo_municipal;
    public $ds_oque_faz_executivo_estadual;
    public $ds_oque_faz_executivo_federal;
    public $ds_oque_e_legislativo;
    public $ds_oque_faz_legislativo;
    public $ds_criar_leis_legislativo;
    public $ds_orcamental_legislativo;
    public $ds_guerra_paz_legislativo;
    public $ds_oque_e_judiciario;
    public $ds_principios_garantias_judiciario;
    public $ds_tribunal_federal_judiciario;
    public $ds_tribunal_justica_judiciario;
    public $ds_tribunal_regional_judiciario;
    public $ds_tribunal_trabalho_judiciario;
    public $ds_tribunal_eleitoral_judiciario;
    public $ds_tribunal_militar_judiciario;

    protected $inputFilter;

    /**
     * Used by ResultSet to pass each database row to the entity
     */
    public function exchangeArray($data)
    {
        $this->id_poder                             = (isset($data['id_poder']))                            ? $data['id_poder'] : null;
        $this->ds_oque_e_executivo                  = (isset($data['ds_oque_e_executivo']))                 ? $data['ds_oque_e_executivo'] : null;
        $this->ds_oque_faz_executivo_municipal      = (isset($data['ds_oque_faz_executivo_municipal']))     ? $data['ds_oque_faz_executivo_municipal'] : null;
        $this->ds_oque_faz_executivo_estadual       = (isset($data['ds_oque_faz_executivo_estadual']))      ? $data['ds_oque_faz_executivo_estadual'] : null;
        $this->ds_oque_faz_executivo_federal        = (isset($data['ds_oque_faz_executivo_federal']))       ? $data['ds_oque_faz_executivo_federal'] : null;
        $this->ds_oque_e_legislativo                = (isset($data['ds_oque_e_legislativo']))               ? $data['ds_oque_e_legislativo'] : null;
        $this->ds_oque_faz_legislativo              = (isset($data['ds_oque_faz_legislativo']))             ? $data['ds_oque_faz_legislativo'] : null;
        $this->ds_criar_leis_legislativo            = (isset($data['ds_criar_leis_legislativo']))           ? $data['ds_criar_leis_legislativo'] : null;
        $this->ds_orcamental_legislativo            = (isset($data['ds_orcamental_legislativo']))           ? $data['ds_orcamental_legislativo'] : null;
        $this->ds_guerra_paz_legislativo            = (isset($data['ds_guerra_paz_legislativo']))           ? $data['ds_guerra_paz_legislativo'] : null;
        $this->ds_oque_e_judiciario                 = (isset($data['ds_oque_e_judiciario']))                ? $data['ds_oque_e_judiciario'] : null;
        $this->ds_principios_garantias_judiciario   = (isset($data['ds_principios_garantias_judiciario']))  ? $data['ds_principios_garantias_judiciario'] : null;
        $this->ds_tribunal_federal_judiciario       = (isset($data['ds_tribunal_federal_judiciario']))      ? $data['ds_tribunal_federal_judiciario'] : null;
        $this->ds_tribunal_justica_judiciario       = (isset($data['ds_tribunal_justica_judiciario']))      ? $data['ds_tribunal_justica_judiciario'] : null;
        $this->ds_tribunal_regional_judiciario      = (isset($data['ds_tribunal_regional_judiciario']))     ? $data['ds_tribunal_regional_judiciario'] : null;
        $this->ds_tribunal_trabalho_judiciario      = (isset($data['ds_tribunal_trabalho_judiciario']))     ? $data['ds_tribunal_trabalho_judiciario'] : null;
        $this->ds_tribunal_eleitoral_judiciario     = (isset($data['ds_tribunal_eleitoral_judiciario']))    ? $data['ds_tribunal_eleitoral_judiciario'] : null;
        $this->ds_tribunal_militar_judiciario       = (isset($data['ds_tribunal_militar_judiciario']))      ? $data['ds_tribunal_militar_judiciario'] : null;
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
                'name'     => 'id_poder',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_oque_e_executivo',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_oque_faz_executivo_municipal',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_oque_faz_executivo_estadual',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_oque_faz_executivo_federal',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_oque_e_legislativo',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_oque_faz_legislativo',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_criar_leis_legislativo',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_orcamental_legislativo',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_guerra_paz_legislativo',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_oque_e_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_principios_garantias_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_tribunal_federal_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_tribunal_justica_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_tribunal_regional_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_tribunal_trabalho_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_tribunal_eleitoral_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_tribunal_militar_judiciario',
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
                            'max'      => 100,
                        ),
                    ),
                ),
            )));

            $this->inputFilter = $inputFilter;        
        }

        return $this->inputFilter;
    }
}
