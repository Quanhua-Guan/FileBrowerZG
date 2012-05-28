<div id="files">                
    <{section loop=$subFile name="i"}>
        <{if $subFile[i][0] eq 'd'}>
            <div class="dir">
                <a href="<{$reqUri}>?file=<{$fileName}><{$subFile[i][1]}>">
                    <img class="image" src="<{$stylePath}>image/<{$curIconTheme}>/folder.png" alt="<{$subFile[i][1]}>" title="<{$subFile[i][1]}>"/>
                    <div class="name"><{$subFile[i][1]|truncate:8}></div>
                </a>
            </div>
        <{else}>
            <div class="file">
                <a href="<{$reqUri}>?file=<{$fileName}><{$subFile[i][1]}>&router=skimover">
                    <img class="image" src="<{$stylePath}>image/<{$curIconTheme}>/file.png" alt="<{$subFile[i][1]}>" title="<{$subFile[i][1]}>"/>
                    <div class="name" ><{$subFile[i][1]|truncate:8}></div>
                </a>
            </div>
        <{/if}>
    <{sectionelse}>
    <{/section}>
</div><!--files-->