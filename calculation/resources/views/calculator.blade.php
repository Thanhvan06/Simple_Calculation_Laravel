<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <link rel="stylesheet" href="/calculation/resources/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Calculator</h2>
        <form method="POST" action="{{'calculator'}}">    
            @csrf
            <input type="text" name="num1" id="">
            <select name="calculator" id="">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">%</option>
            </select>
            <input type="text" name="num2" id="">
            <input type="submit" name="calculator" value="calculator" >
        </form>
     <div class="result"> 
            <p>Result: {{ $result }}</p>      
     </div>
    </div>
</body>
</html>