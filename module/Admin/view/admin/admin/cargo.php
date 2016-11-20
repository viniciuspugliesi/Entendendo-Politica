        <div class="col s12 l8">
            
            <h4>CARGOS</h4>
            
            <div class="spacebox-small"></div>
            
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#executivo">EXECUTIVO</a></li>
                        <li class="tab col s3"><a href="#legislativo">LEGISLATIVO</a></li>
                        <li class="tab col s3"><a href="#judiciario">JUDICIÁRIO</a></li>
                    </ul>
                </div>
            </div>
            
            <div id="executivo" class="col s12">
                <div class="spacebox-medium"></div>
                <?php
                    $form = $this->form;
                    $form->setAttribute('action', $this->url() . 'Update');
                    $form->prepare();
                    
                    echo $this->form()->openTag($form) . PHP_EOL;
                    echo $this->formRow($form->get('ds_prefeito_executivo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_governador_executivo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_presidente_executivo')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
            </div>
            
            <div id="legislativo" class="col s12">
                <div class="spacebox-medium"></div>
                <?php
                    $form = $this->form;
                    $form->setAttribute('action', $this->url() . 'Update');
                    $form->prepare();
                    
                    echo $this->form()->openTag($form) . PHP_EOL;
                    echo $this->formRow($form->get('ds_vereador_legislativo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_deputado_estadual_legislativo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_deputado_federal_legislativo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_senador_legislativo')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
            </div>
            
            <div id="judiciario" class="col s12">
                <div class="spacebox-medium"></div>
                <?php
                    $form = $this->form;
                    $form->setAttribute('action', $this->url() . 'Update');
                    $form->prepare();
                    
                    echo $this->form()->openTag($form) . PHP_EOL;
                    echo $this->formRow($form->get('ds_promotor_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_juiz_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_desembargador_judiciario')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
            </div>
            
        </div>