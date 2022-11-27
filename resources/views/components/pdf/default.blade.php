<table>
    <thead>
    <tr>
        <th class="text-red-500">Column 1</th>
        <th style="color: red">Column 2</th>
        <th>Column 3</th>
    </tr>
    </thead>
    <tbody>
        @foreach($script->scenes as $scene)
            <tr>
                <td colspan="3">
                    {{$scene->number}}
                    <br>
                    {{$scene->sceneType->short}}
                    <br>
                    {{$scene->location}}
                    <br>
                    @foreach($scene->characters as $character)
                        {{$character->first_name}},&nbsp;
                    @endforeach
                    <br>
                    {{$scene->description}}
                </td>
            </tr>
            @foreach($scene->shots as $shot)
                <tr>
                    <td> {{$scene->number}}</td>
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
                            {{$script->characters->find($monolog->character_id)->first_name}}:
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
                        @foreach($shot->comments as $comment)
                            {{$comment->text}}
                            <br>
                        @endforeach
                    </td>
                </tr>

            @endforeach
        @endforeach
    </tbody>

</table>
