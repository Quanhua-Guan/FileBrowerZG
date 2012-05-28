<{if $hasMsg}>
    <div id="msg">
        <ul>
            <{section loop=$msg name="msg"}>
                <li><{$msg[msg]}></li>
            <{/section}>
        </ul>
    </div>
<{/if}>