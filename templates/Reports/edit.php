<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Report $report
 */
?>
<div class="row">
  <aside class="col-md-3">
    <div class="side-nav">
      <h4 class="heading"><?= __('Actions') ?></h4>
      <?= $this->Form->postLink(
    __('Delete'),
    ['action' => 'delete', $report->id],
    ['confirm' => __('Are you sure you want to delete # {0}?', $report->id), 'class' => 'nav-link']
) ?>
      <?= $this->Html->link(__('List Reports'), ['action' => 'index'], ['class' => 'nav-link']) ?>
    </div>
  </aside>
  <div class="col-md-8">
    <div class="reports form content">
      <?= $this->Form->create($report, ['class' => 'form']) ?>
      <fieldset>
        <legend><?= __('Edit Report') ?></legend>
        <?php
        echo $this->Form->control('name', ['class' => 'form-control']);
        echo $this->Form->control('q', ['class' => 'form-control', 'rows' => 30]);
        ?>
      </fieldset>
      <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>