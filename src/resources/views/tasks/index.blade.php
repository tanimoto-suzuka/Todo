<style>
    body {
        background-color: #e6e6fa;
        margin: 0;
    }

    h1 {
        text-align: center;
        color: palevioletred;
        padding: 50px;
    }

    .container {
        width: 80%;
        margin: 0 auto;
        background-color: #ffff;
        border-radius: 12px;
        padding: 20px;
    }

    .task__add {
        text-align: right;
        padding-bottom: 10px;
    }

    table {
        border-spacing: 0;
        border-collapse: collapse;
        border-bottom: 1px solid #aaa;
        color: #555;
        width: 100%;
    }

    th {
        border-top: 1px solid #aaa;
        background-color: ghostwhite;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    td {
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    .td1 {
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        text-align: center;
    }

    .td2 {
        border-top: 1px solid #aaa;
        padding: 10px 0 10px 6px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a {
        margin-right: 20px;
    }


    .td2 a {
        background-color: #d8bfd8;
        padding: 4px;
        color: #ffff;
        font-style: normal;
        text-decoration: none;
        display: block;
    }

    .delete {
        background-color: #d8bfd8;
        padding: 4px;
        color: #ffff;
    }
</style>

<body>
    @include('tasks.parts.header')

    <h1>タスク一覧</h1>

    <div class="container">

        <div class="task__add">
            <a href="{{ route('tasks.add') }}">タスクを追加する</a>
        </div>

        <table>
            <tr>
                <th>タスク</th>
                <th>状況</th>
                <th>アクション</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td class="td1">{{ $task->name }}</td>
                @if ($task->state === 0)
                <td class="td3">未対応</td>
                @elseif($task->state === 1)
                <td class="td3">対応中</td>
                @elseif($task->state === 2)
                <td class="td3">対応済</td>
                @endif
                <td class="td2">
                    <p><a href="{{ route('tasks.show', ['id' => $task->id]) }}">詳細</a></p>
                    <p><a href="{{ route('tasks.edit',['id' => $task->id]) }}">編集</a></p>
                    <form action="{{ route('tasks.delete',['id' => $task->id]) }}" method="POST" name="deleteForm" id="delete">
                        @csrf
                        <button type="submit" form="delete" class="delete">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
</body>