<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Report $report
 */
?>
<div class="row">
  <aside class="col">
    <div class="side-nav">
      <h4 class="heading"><?= __('Actions') ?></h4>
      <?= $this->Html->link(__('List Reports'), ['action' => 'index'], ['class' => 'nav-link']) ?>
    </div>
  </aside>
  <div class="col-md-8">
    <div class="reports form content">
      <?= $this->Form->create($report, ['class' => 'form']) ?>
      <fieldset>
        <legend><?= __('Add Report') ?></legend>
        <?php
        echo $this->Form->control('name', ['class' => 'form-control']);
        echo $this->Form->control('q', ['class' => 'form-control', 'rows' => 30]);
        ?>
      </fieldset>
      <?= $this->Form->button(__('Submit'), ['class' => 'btn  btn-primary']) ?>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>