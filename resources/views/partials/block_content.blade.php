@foreach($content['blocks'] as $block)
    @includeIf('partials.blocks.' . $block['type'], ['data' => $block['data']])
@endforeach
