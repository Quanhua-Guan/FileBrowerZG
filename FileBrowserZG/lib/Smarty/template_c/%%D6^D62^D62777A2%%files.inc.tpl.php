<?php /* Smarty version 2.6.18, created on 2012-05-26 14:52:08
         compiled from files.inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'files.inc.tpl', 7, false),)), $this); ?>
<div id="files">                
    <?php unset($this->_sections['i']);
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['subFile']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
        <?php if ($this->_tpl_vars['subFile'][$this->_sections['i']['index']][0] == 'd'): ?>
            <div class="dir">
                <a href="<?php echo $this->_tpl_vars['reqUri']; ?>
?file=<?php echo $this->_tpl_vars['fileName']; ?>
<?php echo $this->_tpl_vars['subFile'][$this->_sections['i']['index']][1]; ?>
">
                    <img class="image" src="<?php echo $this->_tpl_vars['stylePath']; ?>
image/<?php echo $this->_tpl_vars['curIconTheme']; ?>
/folder.png" alt="<?php echo $this->_tpl_vars['subFile'][$this->_sections['i']['index']][1]; ?>
" title="<?php echo $this->_tpl_vars['subFile'][$this->_sections['i']['index']][1]; ?>
"/>
                    <div class="name"><?php echo ((is_array($_tmp=$this->_tpl_vars['subFile'][$this->_sections['i']['index']][1])) ? $this->_run_mod_handler('truncate', true, $_tmp, 8) : smarty_modifier_truncate($_tmp, 8)); ?>
</div>
                </a>
            </div>
        <?php else: ?>
            <div class="file">
                <a href="<?php echo $this->_tpl_vars['reqUri']; ?>
?file=<?php echo $this->_tpl_vars['fileName']; ?>
<?php echo $this->_tpl_vars['subFile'][$this->_sections['i']['index']][1]; ?>
&router=skimover">
                    <img class="image" src="<?php echo $this->_tpl_vars['stylePath']; ?>
image/<?php echo $this->_tpl_vars['curIconTheme']; ?>
/file.png" alt="<?php echo $this->_tpl_vars['subFile'][$this->_sections['i']['index']][1]; ?>
" title="<?php echo $this->_tpl_vars['subFile'][$this->_sections['i']['index']][1]; ?>
"/>
                    <div class="name" ><?php echo ((is_array($_tmp=$this->_tpl_vars['subFile'][$this->_sections['i']['index']][1])) ? $this->_run_mod_handler('truncate', true, $_tmp, 8) : smarty_modifier_truncate($_tmp, 8)); ?>
</div>
                </a>
            </div>
        <?php endif; ?>
    <?php endfor; else: ?>
    <?php endif; ?>
</div><!--files-->