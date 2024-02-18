<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
</head>
<body>
<h1>BMI Calculator</h1>
<form action="{{ route('calculate') }}" method="post">
    @csrf
    <label for="weight">Weight (kg):</label>
    <input type="text" name="weight" required>
    <br>
    <label for="height">Height (m):</label>
    <input type="text" name="height" required>
    <br>
    <button type="submit">Calculate BMI</button>
</form>
</body>
</html>
