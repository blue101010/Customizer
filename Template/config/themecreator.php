<form name="themecreator" id="themecreator" class="url-links" method="post" action="<?= $this->url->href('CustomizerConfigController', 'create_theme', array('plugin' => 'customizer', 'redirect' => 'application')) ?>" autocomplete="off">
<?= $this->form->csrf() ?>
  <div class="column-100">
    <?= t('Theme Name: ') ?><input type="text" name="theme_name" placeholder="<?= t('Theme Name') ?>" pattern="[a-zA-Z0-9]+" title="<?= t('it should only contain alphanumeric without spaces') ?>">
    <br>
    <br>
    <table>
      <tr>
        <th colspan="2">
          <?= t('Header') ?>
        </th>
      <tr>
        <th>
          <strong><?= t('Header Background') ?></strong>
        </th>
        <th>
          <input class="color" name="header_background" value="#FFFFFF">
        </th>
      </tr>
    </table>  
  </div>
  <div class="form-actions" style="margin-bottom: 50px">
    <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
  </div>
</form>
