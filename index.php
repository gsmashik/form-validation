<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="process.php" method="POST" name="insert_port" id="insert_port">
        <label for="title">Title     :</label>
        <input type="text" name="title" id="title"> <br>
        <label for="snippet">SNIPPET</label>
        <input type="text" name="snippet" id="snippet"> <br>
        <label for="category">Category :</label>
        <input type="radio" name="category" id="category" value="php">PHP  
        <input type="radio" name="category" id="category" value="javascript">Javascript 
        <input type="radio" name="category" id="category" value="c">C 
        <input type="radio" name="category" id="category" value="c+">C+ 
        <input type="radio" name="category" id="category" value="java">JAVA 
        <input type="radio" name="category" id="category" value="sql">SQL <br>
        <select name = 'subject[]' multiple size = 6>   
            <option value = 'english'>ENGLISH</option> 
            <option value = 'maths'>MATHS</option> 
            <option value = 'computer'>COMPUTER</option> 
            <option value = 'physics'>PHYSICS</option> 
            <option value = 'chemistry'>CHEMISTRY</option> 
            <option value = 'hindi'>HINDI</option> 
        </select>  <br>
        <label for="language">LANGUAGE :</label>
        <input type="checkbox" name="language" id="language" value="bangla"> BANGLA
        <input type="checkbox" name="language" id="language" value="english"> ENGLISH
<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>