<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $script->name }}</title>

    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        .bordered table,
        .bordered th,
        .bordered td {
            border: 1px solid black;
            text-align: left;
        }

        table td {
            font-size: 12px;
        }

        td,
        th {
            padding: 3mm;
        }
    </style>
</head>
<body>
<table class="bordered">
    <tr>
        <th style="text-align: center">Číslo scény</th>
        <th style="text-align: center">Číslo záběru</th>
        <th style="text-align: center" colspan="2">Druh záběru</th>
        <th style="text-align: center">Parametry záběru</th>
        <th style="text-align: center">Dialogy</th>
        <th style="text-align: center">Zvuk</th>
        <th style="text-align: center">Poznámky</th>
    </tr>
    <tbody>
    @foreach($script->scenes as $scene)
        <tr>
            <td colspan="8">
                {{$scene->number}}
                <br>
                {{$scene->sceneType->short}}
                <br>
                @lang($scene->location)
                <br>
                @foreach($scene->characters as $character)
                    {{$character->first_name}}
                    @unless($loop->last)
                        ,&nbsp;
                    @endif
                @endforeach
                <br>
                {{$scene->description}}
            </td>
        </tr>
        @foreach($scene->shots as $shot)
            <tr>
                <td>{{$scene->number}}</td>
                <td>{{$shot->number}}</td>
                <td>{{$shot->shotTypeFrom->short}}</td>
                <td>{{$shot->shotTypeTo->short}}</td>
                <td>
                    @foreach($shot->shotParams as $param)
                        {{$param->text}}
                        <br>
                    @endforeach
                </td>
                <td>
                    @foreach($shot->monologs as $monolog)
                        <span style="font-weight: bold">
                            {{$script->characters->find($monolog->character_id)->first_name}}:
                        </span>
                        {{$monolog->text}}
                        <br>
                    @endforeach
                </td>
                <td>
                    @foreach($shot->sounds as $sound)
                        {{$sound->text}}
                        <br>
                    @endforeach
                </td>
                <td>
                    {{$shot->comment}}
                </td>
            </tr>

        @endforeach
    @endforeach
    </tbody>

</table>

</body>
</html>
