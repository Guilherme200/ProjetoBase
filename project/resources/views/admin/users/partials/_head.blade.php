<th sortable @click="orderBy('name', $event)">
    @lang('labels.common.name')
</th>
<th>
    @lang('labels.common.email')
</th>
<th sortable @click="orderBy('created_at', $event)">
    @lang('labels.common.created_at')
</th>
<th class="text-center">
    @lang('labels.common.actions')
</th>
