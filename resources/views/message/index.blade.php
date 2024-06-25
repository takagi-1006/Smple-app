<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Message Sample</title>
</head>
<body>
    <main>
        <h1>メッセージ </h1>
        <form action="/messages" method="POST"></form>
            @csrf
            <input type="text" name="body">
            <input type="submit" value="登録">
        <ul>
            @foreach($messages as $message)
                <li>{{ $messages->body }}</li>
            @endforeach
        </ul>
    </mail>
</body>
</html>