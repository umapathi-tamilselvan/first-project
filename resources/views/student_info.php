<!DOCTYPE html>
<html>
<head>
    <title>Simple Input Form</title>
</head>
<body>
    <form action="/create" method="post">
        <input type="hidden" name="_token" value="<?=csrf_token()?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
