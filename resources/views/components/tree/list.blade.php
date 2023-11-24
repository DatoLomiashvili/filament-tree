@props([
    'records',
    'containerKey',
    'tree',
    'collapsed' => null,
])
<ol @class([
    'filament-tree-list',
    'dd-list',
    'hidden' => $collapsed,
])>
    @foreach ($records ?? [] as $record)
        @php
            $titles = $this->getTranslatedTreeRecordTitles($record);
            $locale = $this->activeLocale ?? 'en';
            $title = $titles[$locale];
            $icon = $this->getTreeRecordIcon($record);
        @endphp
        <x-filament-tree::tree.item
            :record="$record"
            :containerKey="$containerKey"
            :tree="$tree"
            :title="$title"
            :icon="$icon"
        />
    @endforeach
</ol>
