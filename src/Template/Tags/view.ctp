<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmarks'), ['controller' => 'Bookmarks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($tag->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($tag->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($tag->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bookmarks') ?></h4>
        <?php if (!empty($tag->bookmarks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Url') ?></th>
                <th><?= __('Created At') ?></th>
                <th><?= __('Updated At') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->bookmarks as $bookmarks): ?>
            <tr>
                <td><?= h($bookmarks->id) ?></td>
                <td><?= h($bookmarks->title) ?></td>
                <td><?= h($bookmarks->description)?></td>
                <td><?= h($bookmarks->url)?></td>
                <td><?= h($bookmarks->created_at)?></td>
                <td><?= h($bookmarks->updated_at)?></td>
                <td><?= h($bookmarks->user_id)?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bookmarks', 'action' => 'view', $bookmarks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bookmarks', 'action' => 'edit', $bookmarks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bookmarks', 'action' => 'delete', $bookmarks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
