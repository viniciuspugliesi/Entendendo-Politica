        <div class="col s12 l8">
            
            <h4>HOME</h4>
            
            <div class="spacebox-small"></div>
            
            <div class="row">
                <?php
                    $form = $this->form;
                    $form->setAttribute('action', 'Admin/update');
                    $form->prepare();
                    
                    echo $this->form()->openTag($form) . PHP_EOL;
                    echo $this->formRow($form->get('ds_senado')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_camara')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_supremo')) . PHP_EOL;
                    echo $this->formRow($form->get('ds_presidente')) . PHP_EOL;
                    echo $this->formInput($form->get('submit')) . PHP_EOL;
                    echo $this->form()->closeTag($form) . PHP_EOL;
                ?>
    		</div>
        </div>