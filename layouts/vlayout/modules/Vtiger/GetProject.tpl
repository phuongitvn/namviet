{strip}
{if $data}
<select name="cf_841">
{foreach item=item_value key=key from=$data}
<option value="{$item_value}">{$item_value}</option>
{/foreach}
</select>
{else}
Chưa có dự án nào.
{/if}
{/strip}