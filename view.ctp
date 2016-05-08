<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bookmark'), ['action' => 'edit', $bookmark->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bookmark'), ['action' => 'delete', $bookmark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmark'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bookmarks Has Tags'), ['controller' => 'BookmarksHasTags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bookmarks Has Tag'), ['controller' => 'BookmarksHasTags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bookmarks view large-9 medium-8 columns content">
    <h3><?= h($bookmark->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($bookmark->title) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $bookmark->has('user') ? $this->Html->link($bookmark->user->id, ['controller' => 'Users', 'action' => 'view', $bookmark->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($bookmark->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created At') ?></th>
            <td><?= h($bookmark->created_at) ?></td>
        </tr>
        <tr>
            <th><?= __('Updated At') ?></th>
            <td><?= h($bookmark->updated_at) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($bookmark->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($bookmark->url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bookmarks Has Tags') ?></h4>
        <?php if (!empty($bookmark->bookmarks_has_tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Bookmark Id') ?></th>
                <th><?= __('Tag Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bookmark->bookmarks_has_tags as $bookmarksHasTags): ?>
            <tr>
                <td><?= h($bookmarksHasTags->bookmark_id) ?></td>
                <td><?= h($bookmarksHasTags->tag_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BookmarksHasTags', 'action' => 'view', $bookmarksHasTags->bookmark_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BookmarksHasTags', 'action' => 'edit', $bookmarksHasTags->bookmark_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BookmarksHasTags', 'action' => 'delete', $bookmarksHasTags->bookmark_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmarksHasTags->bookmark_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
