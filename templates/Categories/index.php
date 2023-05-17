<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<div class="categories index content">
    <?= $this->Html->link(__('New Category'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Categories') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('categories_id') ?></th>
                    <th><?= $this->Paginator->sort('categories_parent') ?></th>
                    <th><?= $this->Paginator->sort('categories_name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $this->Number->format($category->categories_id) ?></td>
                    <td><?= $this->Number->format($category->categories_parent) ?></td>
                    <td><?= h($category->categories_name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $category->categories_id],['class'=>'button button-outline']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->categories_id],['class'=>'button button-outline']) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->categories_id], ['class'=>'button button-outline','confirm' => __('Are you sure you want to delete # {0}?', $category->categories_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
