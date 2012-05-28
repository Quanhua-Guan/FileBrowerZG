<?php /* Smarty version 2.6.18, created on 2012-05-26 14:52:08
         compiled from parentdir.inc.tpl */ ?>
<?php if ($this->_tpl_vars['fileName'] != $this->_tpl_vars['userRootDir']): ?>
    <a href="<?php echo $this->_tpl_vars['reqUri']; ?>
?file=<?php echo $this->_tpl_vars['parentDir']; ?>
"><div id="parentDir">Parent Directory</div></a>
<?php else: ?>
    <div id="parentDir">Here is The Root</div>
<?php endif; ?>