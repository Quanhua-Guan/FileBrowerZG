<?php /* Smarty version 2.6.18, created on 2012-05-26 14:55:27
         compiled from cr.inc.tpl.tpl */ ?>
<div id="create">
    <form action="<?php echo $this->_tpl_vars['reqUri']; ?>
" method="get">&nbsp;
        <input type="hidden" name="file" value="<?php echo $this->_tpl_vars['fileName']; ?>
" />
        <input type="hidden" name="router" value="create" />
        <input type="hidden" name="model" value="file" />
        Create File&nbsp;&nbsp;
        Name:<input type="text" name="name" />&nbsp;
        Type:
        <select name="type">
            <option value="file" >File</option>
            <option value="dir" >Directory</option>
        </select>
        <input type="submit" name="sub" value="Create" />
    </form>
</div><!--create-->