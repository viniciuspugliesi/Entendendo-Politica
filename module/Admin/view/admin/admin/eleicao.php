        <div class="col s12 l8">
            
            <h4>ELEIÇÕES</h4>
            
            <div class="spacebox-small"></div>
            
            <div class="row">
                <div class="col s12">
                    <ul class="tabs">
                        <li class="tab col s3"><a href="#municipais">MUNICIPAIIS</a></li>
                        <li class="tab col s3"><a href="#estaduais">ESTADUAIS</a></li>
                        <li class="tab col s3"><a href="#presidenciais">PRESIDENCIAIS</a></li>
                    </ul>
                </div>
                
                <div id="municipais" class="col s12">
                    <div class="spacebox-medium"></div>
                    <?php
                        $form = $this->form;
                        $form->setAttribute('action', $this->url() . 'Update');
                        $form->prepare();
                        
                        echo $this->form()->openTag($form) . PHP_EOL;
                        echo $this->formRow($form->get('ds_como_funciona_municipais')) . PHP_EOL;
                        echo $this->formRow($form->get('ds_candidatos_eleitos_municipais')) . PHP_EOL;
                        echo $this->formInput($form->get('submit')) . PHP_EOL;
                        echo $this->form()->closeTag($form) . PHP_EOL;
                    ?>
                </div>
                
                
                <div id="estaduais" class="col s12">
                    <div class="spacebox-medium"></div>
                    <?php
                        $form = $this->form;
                        $form->setAttribute('action', $this->url() . 'Update');
                        $form->prepare();
                        
                        echo $this->form()->openTag($form) . PHP_EOL;
                        echo $this->formRow($form->get('ds_como_funciona_estaduais')) . PHP_EOL;
                        echo $this->formRow($form->get('ds_candidatos_eleitos_estaduais')) . PHP_EOL;
                        echo $this->formInput($form->get('submit')) . PHP_EOL;
                        echo $this->form()->closeTag($form) . PHP_EOL;
                    ?>
                </div>
                
                
                <div id="presidenciais" class="col s12">
                    <div class="spacebox-medium"></div>
                    <?php
                        $form = $this->form;
                        $form->setAttribute('action', $this->url() . 'Update');
                        $form->prepare();
                        
                        echo $this->form()->openTag($form) . PHP_EOL;
                        echo $this->formRow($form->get('ds_como_funciona_presidenciais')) . PHP_EOL;
                        echo $this->formRow($form->get('ds_candidatos_eleitos_presidenciais')) . PHP_EOL;
                        echo $this->formInput($form->get('submit')) . PHP_EOL;
                        echo $this->form()->closeTag($form) . PHP_EOL;
                    ?>
                </div>
                
    		</div>
        </div>