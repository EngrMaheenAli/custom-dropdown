<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Select</title>
</head>
<body>
<h2>Select your favorite programming languages:</h2>
<form action="submit.php" method="post">
    <select name="languages[]" id="languages" multiple size="8">
        <option value="python">Python</option>
        <option value="javascript">JavaScript</option>
        <option value="java">Java</option>
        <option value="csharp">C#</option>
        <option value="cpp">C++</option>
        <option value="ruby">Ruby</option>
        <option value="go">Go</option>
        <option value="swift">Swift</option>
    </select>
    <br><br>
    <input type="submit" value="Submit">
</form>
</body> -->
<!-- </html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Dropdown with Checkboxes</title>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content label {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content label:hover {
            background-color: #f1f1f1;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<h2>Select your favorite programming languages:</h2>

<div class="dropdown">
    <button>Select Languages</button>
    <div class="dropdown-content">
        <form id="languagesForm" action="submit.php" method="post">
            <label><input type="checkbox" name="languages[]" value="python"> Python</label>
            <label><input type="checkbox" name="languages[]" value="javascript"> JavaScript</label>
            <label><input type="checkbox" name="languages[]" value="java"> Java</label>
            <label><input type="checkbox" name="languages[]" value="csharp"> C#</label>
            <label><input type="checkbox" name="languages[]" value="cpp"> C++</label>
            <label><input type="checkbox" name="languages[]" value="ruby"> Ruby</label>
            <label><input type="checkbox" name="languages[]" value="go"> Go</label>
            <label><input type="checkbox" name="languages[]" value="swift"> Swift</label>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>
