<div class="page-header">
    <h2><?= t('Public access') ?></h2>
</div>

<div class="settings">
    <strong><a href="?controller=board&amp;action=readonly&amp;token=<?= $project['token'] ?>" target="_blank"><?= t('Public link') ?></a></strong><br/>
    <input type="text" readonly="readonly" value="<?= Helper\get_current_base_url() ?>?controller=board&amp;action=readonly&amp;token=<?= $project['token'] ?>"/>
</div>

<a href="#" class="btn btn-red"><?= t('Disable public access') ?></a>
