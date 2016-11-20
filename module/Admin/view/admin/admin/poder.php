        <div class="col s12 l8">
            
            <h4>PODERES</h4>
            
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
                    echo $this->formRow($form->get('ds_oque_e_executivo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_oque_faz_executivo_municipal')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_oque_faz_executivo_estadual')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_oque_faz_executivo_federal')) . PHP_EOL;
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
                    echo $this->formRow($form->get('ds_oque_e_legislativo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_oque_faz_legislativo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_criar_leis_legislativo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_orcamental_legislativo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_guerra_paz_legislativo')) . PHP_EOL;
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
                    echo $this->formRow($form->get('ds_oque_e_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_principios_garantias_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_tribunal_federal_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_tribunal_justica_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_tribunal_regional_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_tribunal_trabalho_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_tribunal_eleitoral_judiciario')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_tribunal_militar_judiciario')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
            </div>
            
        </div>