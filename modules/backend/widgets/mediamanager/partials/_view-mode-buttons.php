<button
    type="button"
    class="btn btn-default wn-icon-align-justify empty <?= $viewMode == Backend\Widgets\MediaManager::VIEW_MODE_GRID ? 'on' : '' ?>"
    data-command="change-view"
    data-view="<?= Backend\Widgets\MediaManager::VIEW_MODE_GRID ?>">
</button>
<button
    type="button"
    class="btn btn-default wn-icon-th empty <?= $viewMode == Backend\Widgets\MediaManager::VIEW_MODE_LIST ? 'on' : '' ?>"
    data-command="change-view"
    data-view="<?= Backend\Widgets\MediaManager::VIEW_MODE_LIST ?>">
</button>
<button
    type="button"
    class="btn btn-default wn-icon-th-large empty <?= $viewMode == Backend\Widgets\MediaManager::VIEW_MODE_TILES ? 'on' : '' ?>"
    data-command="change-view"
    data-view="<?= Backend\Widgets\MediaManager::VIEW_MODE_TILES ?>">
</button>