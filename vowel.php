<html>

<head>
    <title>Practical_1</title>
</head>

<body>
    <h1>Program to Check count of Vowels</h1>
    <form method="post">
        Enter a String :
        <input type="text" name="string">
        <br>
        <br>
        <input type="submit" value="Count Vowels" name="submit">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    $str = $_POST["string"];
    function vcount($x)
    {
        $nw = 0;
        for ($i = 0; $i < strlen($x); $i++) {
            switch (substr(strtolower($x), $i, 1)) {
                case 'a':
                case 'e':
                case 'i':
                case 'o':
                case 'u':
                    $nw++;
            }
        }
        echo "Number of vowels in '$x' is " . $nw;
    }
    vcount($str);
}
?>