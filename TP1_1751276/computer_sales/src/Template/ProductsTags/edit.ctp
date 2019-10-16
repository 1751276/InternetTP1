<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsTag $productsTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $productsTag->product_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $productsTag->product_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productsTags form large-9 medium-8 columns content">
    <?= $this->Form->create($productsTag) ?>
    <fieldset>
        <legend><?= __('Edit Products Tag') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
