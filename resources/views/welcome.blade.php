<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ URL::asset('css/tree.css') }}" rel="stylesheet" />

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 64px;
        }
    </style>
</head>
<body>
<div class="flex-center full-height">
    <div class="content">
        <div class="title">
            laravel binary tree
        </div>

        <div class="tree">
            @isset($nodes['data'])
                <ul>
                    <li>
                        @include('node.element', ['data' => $nodes['data']])
                        @isset($nodes['nodes'])
                            @include('node.view', ['nodes' => $nodes['nodes']])
                        @endisset
                    </li>
                </ul>
            @endisset
        </div>
    </div>
</div>
</body>
</html>
