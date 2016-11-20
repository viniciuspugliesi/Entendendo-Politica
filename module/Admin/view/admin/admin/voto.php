        <div class="col s12 l8">
            
            <h4>VOTOS</h4>
            
            <div class="spacebox-small"></div>
            
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#proporcional">PROPORCIONAL</a></li>
                        <li class="tab col s3"><a href="#branco">BRANCO</a></li>
                        <li class="tab col s3"><a href="#nulo">NULO</a></li>
                    </ul>
                </div>
            </div>
            
            <div id="proporcional" class="col s12">
                <div class="spacebox-medium"></div>
                <?php
                    $form = $this->form;
                    $form->setAttribute('action', $this->url() . 'Update');
                    $form->prepare();
                    
                    echo $this->form()->openTag($form) . PHP_EOL;
                    echo $this->formRow($form->get('ds_como_funciona_proporcional')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_etapas_sistema_proporcional')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_quociente_eleitoral_proporcional')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_quociente_partidário_proporcional')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_sobra_vagas_proporcional')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
            </div>
            
            
            <div id="branco" class="col s12">
                <div class="spacebox-medium"></div>
                <?php
                    $form = $this->form;
                    $form->setAttribute('action', $this->url() . 'Update');
                    $form->prepare();
                    
                    echo $this->form()->openTag($form) . PHP_EOL;
                    echo $this->formRow($form->get('ds_oque_e_branco')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_vai_para_candidato_branco')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_consequencia_voto_branco')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
            </div>
            
            
            <div id="nulo" class="col s12">
                <div class="spacebox-medium"></div>
                <?php
                    $form = $this->form;
                    $form->setAttribute('action', $this->url() . 'Update');
                    $form->prepare();
                    
                    echo $this->form()->openTag($form) . PHP_EOL;
                    echo $this->formRow($form->get('ds_oque_e_nulo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_50_por_cento_nulo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_anular_eleicao_nulo')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
            </div>
        </div>