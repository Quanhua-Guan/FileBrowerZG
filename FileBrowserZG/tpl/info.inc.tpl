<div id="info">  
    <form action="<{$reqUri}>" method="get">
        <input type="hidden" name="file" value="<{$fileName}>" />
        Current Fold:<{$fileName}> |
        State:<{nocache}><{$cacheState}><{/nocache}> | 
        Current Time:<span id="time"></span> |
        <script language="javascript" type="text/javascript">
            window.onload=function (){
                setInterval("document.getElementById('time').innerHTML=new Date().toLocaleString();", 1000);
            }
        </script>       
        Icon Theme:
        <select name="iconTheme">
            <{section loop=$iconThemes name="ico"}>
                <{if $iconThemes[ico] eq $curIconTheme}>    
                    <option value="<{$iconThemes[ico]}>" selected>
                    <{else}>
                    <option value="<{$iconThemes[ico]}>">
                    <{/if}>
                    <{$iconThemes[ico]}>
                </option>               
            <{/section}>
        </select> 
        <input id="chIcoTheme" type="submit" value="Change" />
    </form> 
</div><!--info-->