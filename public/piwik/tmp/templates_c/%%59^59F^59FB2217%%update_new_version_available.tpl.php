<?php /* Smarty version 2.6.26, created on 2013-12-17 17:41:01
         compiled from CoreUpdater/templates/update_new_version_available.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'translate', 'CoreUpdater/templates/update_new_version_available.tpl', 4, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreUpdater/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<br/>
<p><b><?php echo ((is_array($_tmp='CoreUpdater_ThereIsNewVersionAvailableForUpdate')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</b></p>

<?php if ($this->_tpl_vars['can_auto_update']): ?>
    <p><?php echo ((is_array($_tmp='CoreUpdater_YouCanUpgradeAutomaticallyOrDownloadPackage')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['piwik_new_version']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['piwik_new_version'])); ?>
</p>
<?php else: ?>
    <p><?php echo ((is_array($_tmp='Installation_SystemCheckAutoUpdateHelp')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</p>
    <p><?php echo ((is_array($_tmp='CoreUpdater_YouMustDownloadPackageOrFixPermissions')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['piwik_new_version']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['piwik_new_version'])); ?>

        <?php echo $this->_tpl_vars['makeWritableCommands']; ?>

    </p>
<?php endif; ?>

<?php if ($this->_tpl_vars['can_auto_update']): ?>
<form action="index.php">
    <input type="hidden" name="module" value="CoreUpdater"/>
    <input type="hidden" name="action" value="oneClickUpdate"/>
    <input type="submit" class="submit" value="<?php echo ((is_array($_tmp='CoreUpdater_UpdateAutomatically')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
"/>
    <?php endif; ?>
    <a style="margin-left:50px" class="submit button"
       href="<?php echo $this->_tpl_vars['piwik_latest_version_url']; ?>
?cb=<?php echo $this->_tpl_vars['piwik_new_version']; ?>
"><?php echo ((is_array($_tmp='CoreUpdater_DownloadX')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['piwik_new_version']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['piwik_new_version'])); ?>
</a><br/>
    <?php if ($this->_tpl_vars['can_auto_update']): ?>
</form>
<?php endif; ?>
<br/>
<a href='index.php'>&laquo; <?php echo ((is_array($_tmp='General_BackToPiwik')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreUpdater/templates/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
