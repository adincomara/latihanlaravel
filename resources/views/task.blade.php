<html>
    <body>
        <table >
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
            </tr>
            
        @endforeach
        </table>
    </body>
</html>