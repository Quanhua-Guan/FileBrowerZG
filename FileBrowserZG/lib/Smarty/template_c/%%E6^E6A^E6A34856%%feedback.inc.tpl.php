<?php /* Smarty version 2.6.18, created on 2012-05-26 14:52:08
         compiled from feedback.inc.tpl */ ?>
<?php if ($this->_tpl_vars['hasMsg']): ?>
    <div id="msg">
        <ul>
            <?php unset($this->_sections['msg']);
$this->_sections['msg']['loop'] = is_array($_loop=$this->_tpl_vars['msg']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['msg']['name'] = 'msg';
$this->_sections['msg']['show'] = true;
$this->_sections['msg']['max'] = $this->_sections['msg']['loop'];
$this->_sections['msg']['step'] = 1;
$this->_sections['msg']['start'] = $this->_sections['msg']['step'] > 0 ? 0 : $this->_sections['msg']['loop']-1;
if ($this->_sections['msg']['show']) {
    $this->_sections['msg']['total'] = $this->_sections['msg']['loop'];
    if ($this->_sections['msg']['total'] == 0)
        $this->_sections['msg']['show'] = false;
} else
    $this->_sections['msg']['total'] = 0;
if ($this->_sections['msg']['show']):

            for ($this->_sections['msg']['index'] = $this->_sections['msg']['start'], $this->_sections['msg']['iteration'] = 1;
                 $this->_sections['msg']['iteration'] <= $this->_sections['msg']['total'];
                 $this->_sections['msg']['index'] += $this->_sections['msg']['step'], $this->_sections['msg']['iteration']++):
$this->_sections['msg']['rownum'] = $this->_sections['msg']['iteration'];
$this->_sections['msg']['index_prev'] = $this->_sections['msg']['index'] - $this->_sections['msg']['step'];
$this->_sections['msg']['index_next'] = $this->_sections['msg']['index'] + $this->_sections['msg']['step'];
$this->_sections['msg']['first']      = ($this->_sections['msg']['iteration'] == 1);
$this->_sections['msg']['last']       = ($this->_sections['msg']['iteration'] == $this->_sections['msg']['total']);
?>
                <li><?php echo $this->_tpl_vars['msg'][$this->_sections['msg']['index']]; ?>
</li>
            <?php endfor; endif; ?>
        </ul>
    </div>
<?php endif; ?>