<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Game'), ['action' => 'edit', $game->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Game'), ['action' => 'delete', $game->id], ['confirm' => __('Are you sure you want to delete # {0}?', $game->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="games view large-9 medium-8 columns content">
    <h3><?= h($game->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tag') ?></th>
            <td><?= h($game->tag) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($game->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Owner') ?></th>
            <td><?= $this->Number->format($game->owner) ?></td>
        </tr>
        <tr>
            <th><?= __('Turn') ?></th>
            <td><?= $this->Number->format($game->turn) ?></td>
        </tr>
        <tr>
            <th><?= __('Throw') ?></th>
            <td><?= $this->Number->format($game->throw) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($game->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($game->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($game->modified) ?></td>
        </tr>
    </table>
</div>
