<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Page</title>
</head>

<body style=" padding: 50px">
    @php
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos incidunt eligendi cumque officia autem beatae placeat minus enim, illo saepe eaque delectus eum cupiditate est at dignissimos voluptatum. ipsum officiis.';

        // truncates the text
        $text_shorten = mb_substr($text, 0, mb_strpos($text, ' ', 200));

        // prevents last word truncation
        $text_truncated = trim(mb_substr($text_shorten, 0, mb_strrpos($text_shorten, ' ')));

        // Let's check if it ends in a comma or a dot.
        if (substr($text_truncated, -1) == ',') {
            // If it's a comma, let's remove it and add a ellipsis
            $text_truncated = rtrim($text_truncated, ',');
            $text_truncated .= '...';
        } elseif (substr($text_truncated, -1) == '.') {
            // If it's a dot, let's remove it and add a ellipsis (optional)
            $text_truncated = rtrim($text_truncated, '.');
            $text_truncated .= '...';
        } else {
        // Doesn't end in dot or comma, just adding ellipsis here
            $text_truncated .= '...';
        }

        echo ('<h1>Text</h1>');
        echo ($text);
        echo('<br>');
        echo('<br>');
        echo ('<h1>text_shorten</h1>');
        echo ($text_shorten);
        echo('<br>');
        echo ('<h1>text_truncated</h1>');
        echo $text_truncated;
        echo('<br><br><br>');
    @endphp
</body>

</html>
