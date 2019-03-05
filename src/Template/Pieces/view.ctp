<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piece $piece
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Piece'), ['action' => 'edit', $piece->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Piece'), ['action' => 'delete', $piece->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piece->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pieces'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Piece'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pieces view large-9 medium-8 columns content">
    <h3><?= h($piece->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($piece->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $piece->has('category') ? $this->Html->link($piece->category->id, ['controller' => 'Categories', 'action' => 'view', $piece->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($piece->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($piece->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($piece->created) ?></td>
        </tr>
    </table>
</div>
