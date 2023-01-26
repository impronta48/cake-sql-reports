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
      <?= $this->Html->link(__('Edit Report'), ['action' => 'edit', $report->id], ['class' => 'nav-link']) ?>
      <?= $this->Form->postLink(__('Delete Report'), ['action' => 'delete', $report->id], ['confirm' => __('Are you sure you want to delete # {0}?', $report->id), 'class' => 'nav-link']) ?>
      <?= $this->Html->link(__('List Reports'), ['action' => 'index'], ['class' => 'nav-link']) ?>
      <?= $this->Html->link(__('New Report'), ['action' => 'add'], ['class' => 'nav-link']) ?>
    </div>
  </aside>
  <div class="col-md-8">
    <div class="reports view content">
      <h3><?= h($report->name) ?></h3>
      <table class="table">
        <tr>
          <th><?= __('Name') ?></th>
          <td><?= h($report->name) ?></td>
        </tr>
        <tr>
          <th><?= __('Id') ?></th>
          <td><?= $this->Number->format($report->id) ?></td>
        </tr>
      </table>
      <div class="text">
        <strong><?= __('q') ?></strong>
        <code>
          <?= $this->Text->autoParagraph(h($report->q)); ?>
        </code>
      </div>
    </div>
  </div>
</div>