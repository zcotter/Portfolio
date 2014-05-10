<?php /* Smarty version 2.6.26, created on 2013-08-21 20:52:08
         compiled from MultiSites/templates/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'MultiSites/templates/index.tpl', 13, false),array('modifier', 'replace', 'MultiSites/templates/index.tpl', 13, false),array('modifier', 'translate', 'MultiSites/templates/index.tpl', 22, false),array('function', 'postEvent', 'MultiSites/templates/index.tpl', 28, false),array('function', 'url', 'MultiSites/templates/index.tpl', 91, false),)), $this); ?>
<?php $this->assign('showSitesSelection', false); ?>
<?php if (! $this->_tpl_vars['isWidgetized']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<div id="multisites">
    <div id="main">
        <?php ob_start();
$_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "MultiSites/templates/row.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
$this->assign('row', ob_get_contents()); ob_end_clean();
 ?>
        <script type="text/javascript">
            var allSites = [];
            var params = [];
            <?php $_from = $this->_tpl_vars['sitesData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['i'] => $this->_tpl_vars['site']):
?>
            allSites[<?php echo $this->_tpl_vars['i']; ?>
] = new setRowData(<?php echo $this->_tpl_vars['site']['idsite']; ?>
, <?php echo $this->_tpl_vars['site']['visits']; ?>
, <?php echo $this->_tpl_vars['site']['pageviews']; ?>
, <?php if (empty ( $this->_tpl_vars['site']['revenue'] )): ?>0<?php else: ?><?php echo $this->_tpl_vars['site']['revenue']; ?>
<?php endif; ?>, '<?php echo ((is_array($_tmp=$this->_tpl_vars['site']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['site']['main_url'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
', '<?php if (isset ( $this->_tpl_vars['site']['visits_evolution'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['visits_evolution'])) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
<?php endif; ?>', '<?php if (isset ( $this->_tpl_vars['site']['pageviews_evolution'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['pageviews_evolution'])) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
<?php endif; ?>', '<?php if (isset ( $this->_tpl_vars['site']['revenue_evolution'] )): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site']['revenue_evolution'])) ? $this->_run_mod_handler('replace', true, $_tmp, ",", ".") : smarty_modifier_replace($_tmp, ",", ".")); ?>
<?php endif; ?>');
            <?php endforeach; endif; unset($_from); ?>
            params['period'] = '<?php echo $this->_tpl_vars['period']; ?>
';
            params['date'] = '<?php echo $this->_tpl_vars['date']; ?>
';
            params['evolutionBy'] = '<?php echo $this->_tpl_vars['evolutionBy']; ?>
';
            params['mOrderBy'] = '<?php echo $this->_tpl_vars['orderBy']; ?>
';
            params['order'] = '<?php echo $this->_tpl_vars['order']; ?>
';
            params['limit'] = '<?php echo $this->_tpl_vars['limit']; ?>
';
            params['page'] = 1;
            params['prev'] = "<?php echo ((is_array($_tmp=((is_array($_tmp='General_Previous')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
";
            params['next'] = "<?php echo ((is_array($_tmp=((is_array($_tmp='General_Next')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
";
            params['row'] = '<?php echo ((is_array($_tmp=$this->_tpl_vars['row'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
';
            params['dateSparkline'] = '<?php echo $this->_tpl_vars['dateSparkline']; ?>
';
        </script>

        <?php echo smarty_function_postEvent(array('name' => 'template_headerMultiSites'), $this);?>


        <?php if (! $this->_tpl_vars['isWidgetized']): ?>
            <div class="top_controls_inner">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/period_select.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/header_message.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
        <?php endif; ?>

        <div class="centerLargeDiv">

            <h2><?php echo ((is_array($_tmp='General_AllWebsitesDashboard')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>

                <?php ob_start(); ?><?php echo ((is_array($_tmp='General_NVisits')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['totalVisits']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['totalVisits'])); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('nVisits', ob_get_contents());ob_end_clean(); ?>
                <?php ob_start(); ?><?php echo ((is_array($_tmp='General_NVisits')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['pastTotalVisits']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['pastTotalVisits'])); ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('nVisitsLast', ob_get_contents());ob_end_clean(); ?>
                <span class='smallTitle'
                      <?php if ($this->_tpl_vars['totalVisitsEvolution']): ?>title="<?php echo ((is_array($_tmp='General_EvolutionSummaryGeneric')) ? $this->_run_mod_handler('translate', true, $_tmp, $this->_tpl_vars['nVisits'], $this->_tpl_vars['prettyDate'], $this->_tpl_vars['nVisitsLast'], $this->_tpl_vars['pastPeriodPretty'], $this->_tpl_vars['totalVisitsEvolution']) : smarty_modifier_translate($_tmp, $this->_tpl_vars['nVisits'], $this->_tpl_vars['prettyDate'], $this->_tpl_vars['nVisitsLast'], $this->_tpl_vars['pastPeriodPretty'], $this->_tpl_vars['totalVisitsEvolution'])); ?>
"<?php endif; ?>>
		<?php echo ((is_array($_tmp='General_TotalVisitsPageviewsRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp, "<strong>".($this->_tpl_vars['totalVisits'])."</strong>", "<strong>".($this->_tpl_vars['totalPageviews'])."</strong>", "<strong>".($this->_tpl_vars['totalRevenue'])."</strong>") : smarty_modifier_translate($_tmp, "<strong>".($this->_tpl_vars['totalVisits'])."</strong>", "<strong>".($this->_tpl_vars['totalPageviews'])."</strong>", "<strong>".($this->_tpl_vars['totalRevenue'])."</strong>")); ?>

	</span>
            </h2>

            <table id="mt" class="dataTable" cellspacing="0">
                <thead>
                <tr>
                    <th id="names" class="label" onClick="params = setOrderBy(this,allSites, params, 'names');">
                        <span><?php echo ((is_array($_tmp='General_Website')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
                        <span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'names'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
                    </th>
                    <th id="visits" class="multisites-column" style="width: 100px" onClick="params = setOrderBy(this,allSites, params, 'visits');">
                        <span><?php echo ((is_array($_tmp='General_ColumnNbVisits')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
                        <span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'visits'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
                    </th>
                    <th id="pageviews" class="multisites-column" style="width: 110px" onClick="params = setOrderBy(this,allSites, params, 'pageviews');">
                        <span><?php echo ((is_array($_tmp='General_ColumnPageviews')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
                        <span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'pageviews'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
                    </th>
                    <?php if ($this->_tpl_vars['displayRevenueColumn']): ?>
                        <th id="revenue" class="multisites-column" style="width: 110px" onClick="params = setOrderBy(this,allSites, params, 'revenue');">
                            <span><?php echo ((is_array($_tmp='Goals_ColumnRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
                            <span class="arrow <?php if ($this->_tpl_vars['evolutionBy'] == 'revenue'): ?>multisites_<?php echo $this->_tpl_vars['order']; ?>
<?php endif; ?>"></span>
                        </th>
                    <?php endif; ?>
                    <th id="evolution" style=" width:350px" colspan="<?php if ($this->_tpl_vars['show_sparklines']): ?>2<?php else: ?>1<?php endif; ?>">
                        <span class="arrow "></span>
                        <span class="evolution" style="cursor:pointer;"
                              onClick="params = setOrderBy(this,allSites, params, $('#evolution_selector').val() + 'Summary');"> <?php echo ((is_array($_tmp='MultiSites_Evolution')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</span>
                        <select class="selector" id="evolution_selector"
                                onchange="params['evolutionBy'] = $('#evolution_selector').val(); switchEvolution(params);">
                            <option value="visits" <?php if ($this->_tpl_vars['evolutionBy'] == 'visits'): ?> selected <?php endif; ?>><?php echo ((is_array($_tmp='General_ColumnNbVisits')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</option>
                            <option value="pageviews" <?php if ($this->_tpl_vars['evolutionBy'] == 'pageviews'): ?> selected <?php endif; ?>><?php echo ((is_array($_tmp='General_ColumnPageviews')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</option>
                            <?php if ($this->_tpl_vars['displayRevenueColumn']): ?>
                                <option value="revenue" <?php if ($this->_tpl_vars['evolutionBy'] == 'revenue'): ?> selected <?php endif; ?>><?php echo ((is_array($_tmp='Goals_ColumnRevenue')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</option><?php endif; ?>
                        </select>
                    </th>
                </tr>
                </thead>

                <tbody id="tb">
                </tbody>

                <tfoot>
                <?php if ($this->_tpl_vars['isSuperUser']): ?>
                    <tr>
                        <td colspan="8" class="clean" style="text-align: right; padding-top: 15px;padding-right:10px">
                            <a href="<?php echo smarty_function_url(array(), $this);?>
&module=SitesManager&action=index&showaddsite=1"><img src='plugins/UsersManager/images/add.png' alt=""
                                                                                                style="margin: 0;"/> <?php echo ((is_array($_tmp='SitesManager_AddSite')) ? $this->_run_mod_handler('translate', true, $_tmp) : smarty_modifier_translate($_tmp)); ?>
</a>
                        </td>
                    </tr>
                <?php endif; ?>
                <tr row_id="last">
                    <td colspan="8" class="clean" style="padding: 20px">
                        <span id="prev" class="pager" style="padding-right: 20px;"></span>
		<span class="dataTablePages">
			<span id="counter">
		</span>
		</span>
                        <span id="next" class="clean" style="padding-left: 20px;"></span>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <script type="text/javascript">
            prepareRows(allSites, params, '<?php echo $this->_tpl_vars['orderBy']; ?>
');

            <?php if ($this->_tpl_vars['autoRefreshTodayReport']): ?>
            piwikHelper.refreshAfter(<?php echo $this->_tpl_vars['autoRefreshTodayReport']; ?>
 * 1000
            )
            ;
            <?php endif; ?>
        </script>
    </div>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CoreHome/templates/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>