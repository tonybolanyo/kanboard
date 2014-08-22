<div class="page-header">
    <h2><?= t('Summary') ?></h2>
</div>
<ul class="settings">
    <li><strong><?= $project['is_active'] ? t('Active') : t('Inactive') ?></strong></li>
    <li><a href="?controller=board&amp;action=readonly&amp;token=<?= $project['token'] ?>" target="_blank"><?= t('Public link') ?></a></li>
    <li><?= dt('Last modified on %B %e, %Y at %k:%M %p', $project['last_modified']) ?></li>
    <?php if ($stats['nb_tasks'] > 0): ?>

        <?php if ($stats['nb_active_tasks'] > 0): ?>
            <li><a href="?controller=board&amp;action=show&amp;project_id=<?= $project['id'] ?>"><?= t('%d tasks on the board', $stats['nb_active_tasks']) ?></a></li>
        <?php endif ?>

        <?php if ($stats['nb_inactive_tasks'] > 0): ?>
            <li><a href="?controller=project&amp;action=tasks&amp;project_id=<?= $project['id'] ?>"><?= t('%d closed tasks', $stats['nb_inactive_tasks']) ?></a></li>
        <?php endif ?>

        <li><?= t('%d tasks in total', $stats['nb_tasks']) ?></li>

    <?php else: ?>
        <li><?= t('no task for this project') ?></li>
    <?php endif ?>
</ul>

<div class="page-header">
    <h2><?= t('Board') ?></h2>
</div>
<table class="table-stripped">
    <tr>
        <th width="50%"><?= t('Column') ?></th>
        <th><?= t('Task limit') ?></th>
        <th><?= t('Active tasks') ?></th>
    </tr>
    <?php foreach ($stats['columns'] as $column): ?>
    <tr>
        <td><?= Helper\escape($column['title']) ?></td>
        <td><?= $column['task_limit'] ?: '∞' ?></td>
        <td><?= $column['nb_active_tasks'] ?></td>
    </tr>
    <?php endforeach ?>
</table>
