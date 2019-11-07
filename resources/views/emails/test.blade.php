<!DOCTYPE html>
<html>
    <head>
        <title>Test Email</title>
    </head>
    <body>
        <h4>{{ $details['method'] }}</h4>
        
        
        <p>
            Text field:
            <br>
            {{ $details['title'] }}
        </p>

        <p>
            Area field:
            <br>
            {{ $details['body'] }}
        </p>
    </body>
</html>