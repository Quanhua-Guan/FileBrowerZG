<?php /* Smarty version 2.6.18, created on 2012-05-26 14:52:08
         compiled from info.inc.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'nocache', 'info.inc.tpl', 5, false),)), $this); ?>
<?php $this->_cache_serials['/www/phpcoding/120523/FileBrowserZG/lib/Smarty/template_c//%%F5^F53^F53F416B%%info.inc.tpl.inc'] = 'd146a63569fae31262c8d10b4e21e18e'; ?><div id="info">  
    <form action="<?php echo $this->_tpl_vars['reqUri']; ?>
" method="get">
        <input type="hidden" name="file" value="<?php echo $this->_tpl_vars['fileName']; ?>
" />
        Current Fold:<?php echo $this->_tpl_vars['fileName']; ?>
 |
        State:<?php if ($this->caching && !$this->_cache_including): echo '{nocache:d146a63569fae31262c8d10b4e21e18e#0}'; endif;$this->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['cacheState']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); if ($this->caching && !$this->_cache_including): echo '{/nocache:d146a63569fae31262c8d10b4e21e18e#0}'; endif;?> | 
        Current Time:<span id="time"></span> |
        <script language="javascript" type="text/javascript">
            window.onload=function (){
                setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();", 1000);
            }
        </script>       
        Icon Theme:
        <select name="iconTheme">
            <?php unset($this->_sections['ico']);
$this->_sections['ico']['loop'] = is_array($_loop=$this->_tpl_vars['iconThemes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ico']['name'] = 'ico';
$this->_sections['ico']['show'] = true;
$this->_sections['ico']['max'] = $this->_sections['ico']['loop'];
$this->_sections['ico']['step'] = 1;
$this->_sections['ico']['start'] = $this->_sections['ico']['step'] > 0 ? 0 : $this->_sections['ico']['loop']-1;
if ($this->_sections['ico']['show']) {
    $this->_sections['ico']['total'] = $this->_sections['ico']['loop'];
    if ($this->_sections['ico']['total'] == 0)
        $this->_sections['ico']['show'] = false;
} else
    $this->_sections['ico']['total'] = 0;
if ($this->_sections['ico']['show']):

            for ($this->_sections['ico']['index'] = $this->_sections['ico']['start'], $this->_sections['ico']['iteration'] = 1;
                 $this->_sections['ico']['iteration'] <= $this->_sections['ico']['total'];
                 $this->_sections['ico']['index'] += $this->_sections['ico']['step'], $this->_sections['ico']['iteration']++):
$this->_sections['ico']['rownum'] = $this->_sections['ico']['iteration'];
$this->_sections['ico']['index_prev'] = $this->_sections['ico']['index'] - $this->_sections['ico']['step'];
$this->_sections['ico']['index_next'] = $this->_sections['ico']['index'] + $this->_sections['ico']['step'];
$this->_sections['ico']['first']      = ($this->_sections['ico']['iteration'] == 1);
$this->_sections['ico']['last']       = ($this->_sections['ico']['iteration'] == $this->_sections['ico']['total']);
?>
                <?php if ($this->_tpl_vars['iconThemes'][$this->_sections['ico']['index']] == $this->_tpl_vars['curIconTheme']): ?>    
                    <option value="<?php echo $this->_tpl_vars['iconThemes'][$this->_sections['ico']['index']]; ?>
" selected>
                    <?php else: ?>
                    <option value="<?php echo $this->_tpl_vars['iconThemes'][$this->_sections['ico']['index']]; ?>
">
                    <?php endif; ?>
                    <?php echo $this->_tpl_vars['iconThemes'][$this->_sections['ico']['index']]; ?>

                </option>               
            <?php endfor; endif; ?>
        </select> 
        <input id="chIcoTheme" type="submit" value="Change" />
    </form> 
</div><!--info-->