<div class="page-header">
    <h2><?= t('Activate this project') ?></h2>
</div>

<div class="confirm">
    <p class="alert alert-info">
        <?= t('Do you really want to enable this project: "%s"?', $project['name']) ?>
    </p>

    <div class="form-actions">
        <a href="?controller=project&amp;action=enable&amp;project_id=<?= $project['id'].Helper\param_csrf() ?>" class="btn btn-red"><?= t('Yes') ?></a>
        <?= t('or') ?> <a href="?controller=project&amp;action=show&amp;project_id=<?= $project['id'] ?>"><?= t('cancel') ?></a>
    </div>
</div>