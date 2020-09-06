<form method="post">
    <input type="number" name="first" placeholder="First Number"><br>
    <input type="number" name="second" placeholder="Second Number"><br>
    <input type="submit" value="result">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['first'];
    $b = $_POST['second'];
}
function checkNum($number)
{
    if ($number == 0) {
        throw new Exception("Giá trị phải khác 0 ");
    }
    return true;
}

try {                             //kích hoạt ngoại lệ trong khối "try"
    checkNum($b);
    $result = $a + $b;
    echo $result;       // nếu ngoại lệ được ném ra thì lệnh sau không được thực thi
} catch (Exception $e) {                   //catch exception
    echo 'Message: ' . $e->getMessage();
}
echo "<br>";

?>