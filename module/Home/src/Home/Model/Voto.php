<?php

namespace Home\Model;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Voto implements InputFilterAwareInterface
{
    public $id_voto;
    public $ds_como_funciona_proporcional;
    public $ds_etapas_sistema_proporcional;
    public $ds_quociente_eleitoral_proporcional;
    public $ds_quociente_partidário_proporcional;
    public $ds_sobra_vagas_proporcional;
    public $ds_oque_e_branco;
    public $ds_vai_para_candidato_branco;
    public $ds_consequencia_voto_branco;
    public $ds_oque_e_nulo;
    public $ds_50_por_cento_nulo;
    public $ds_anular_eleicao_nulo;

    protected $inputFilter;

    /**
     * Used by ResultSet to pass each database row to the entity
     */
    public function exchangeArray($data)
    {
        $this->id_voto                              = (isset($data['id_voto']))                              ? $data['id_voto'] : null;
        $this->ds_como_funciona_proporcional        = (isset($data['ds_como_funciona_proporcional']))        ? $data['ds_como_funciona_proporcional'] : null;
        $this->ds_etapas_sistema_proporcional       = (isset($data['ds_etapas_sistema_proporcional']))       ? $data['ds_etapas_sistema_proporcional'] : null;
        $this->ds_quociente_eleitoral_proporcional  = (isset($data['ds_quociente_eleitoral_proporcional']))  ? $data['ds_quociente_eleitoral_proporcional'] : null;
        $this->ds_quociente_partidário_proporcional = (isset($data['ds_quociente_partidário_proporcional'])) ? $data['ds_quociente_partidário_proporcional'] : null;
        $this->ds_sobra_vagas_proporcional          = (isset($data['ds_sobra_vagas_proporcional']))          ? $data['ds_sobra_vagas_proporcional'] : null;
        $this->ds_oque_e_branco                     = (isset($data['ds_oque_e_branco']))                     ? $data['ds_oque_e_branco'] : null;
        $this->ds_vai_para_candidato_branco         = (isset($data['ds_vai_para_candidato_branco']))         ? $data['ds_vai_para_candidato_branco'] : null;
        $this->ds_consequencia_voto_branco          = (isset($data['ds_consequencia_voto_branco']))          ? $data['ds_consequencia_voto_branco'] : null;
        $this->ds_oque_e_nulo                       = (isset($data['ds_oque_e_nulo']))                       ? $data['ds_oque_e_nulo'] : null;
        $this->ds_50_por_cento_nulo                 = (isset($data['ds_50_por_cento_nulo']))                 ? $data['ds_50_por_cento_nulo'] : null;
        $this->ds_anular_eleicao_nulo               = (isset($data['ds_anular_eleicao_nulo']))               ? $data['ds_anular_eleicao_nulo'] : null;
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
                'name'     => 'id_voto',
                'required' => true,
                'filters'  => array(
                    array('name' => 'Int'),
                ),
            )));

            $inputFilter->add($factory->createInput(array(
                'name'     => 'ds_como_funciona_proporcional',
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
                'name'     => 'ds_etapas_sistema_proporcional',
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
                'name'     => 'ds_quociente_eleitoral_proporcional',
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
                'name'     => 'ds_quociente_partidário_proporcional',
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
                'name'     => 'ds_sobra_vagas_proporcional',
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
                'name'     => 'ds_oque_e_branco',
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
                'name'     => 'ds_vai_para_candidato_branco',
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
                'name'     => 'ds_consequencia_voto_branco',
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
                'name'     => 'ds_oque_e_nulo',
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
                'name'     => 'ds_50_por_cento_nulo',
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
                'name'     => 'ds_anular_eleicao_nulo',
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
