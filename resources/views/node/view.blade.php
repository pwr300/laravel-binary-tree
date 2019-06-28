<ul>
    @isset($nodes['left'])
        <li>
            @include('node.element', ['data' => $nodes['left']['data']])
            @isset($nodes['left']['nodes'])
                @include('node.view', ['nodes' => $nodes['left']['nodes']])
            @endisset
        </li>
    @endisset

    @isset($nodes['right'])
        <li>
            @include('node.element', ['data' => $nodes['right']['data']])
            @isset($nodes['right']['nodes'])
                @include('node.view', ['nodes' => $nodes['right']['nodes']])
            @endisset
        </li>
    @endisset
</ul>
