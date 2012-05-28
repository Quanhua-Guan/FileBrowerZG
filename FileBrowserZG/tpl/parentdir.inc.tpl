<{if $fileName ne $userRootDir}>
    <a href="<{$reqUri}>?file=<{$parentDir}>"><div id="parentDir">Parent Directory</div></a>
<{else}>
    <div id="parentDir">Here is The Root</div>
<{/if}>