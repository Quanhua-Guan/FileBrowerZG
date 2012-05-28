<div id="create">
    <form action="<{$reqUri}>" method="get">&nbsp;
        <input type="hidden" name="file" value="<{$fileName}>" />
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