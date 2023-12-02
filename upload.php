<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post" enctype="multipart/form-data">
        <label for="username">Tên người dùng:</label>
        <input type="text" name="username" id="username">
        <br>
        <label for="user_image">Ảnh người dùng:</label>
        <input type="file" name="user_image" id="user_image" onchange="previewImage(event)">
        <br>
        <img id="preview" src="#" alt="Ảnh xem trước" style="display: none; max-width: 200px;">
        <br>
        <input type="submit" value="Gửi thông tin">
        <?php
session_start();
if (isset($_SESSION['uploaded_image']) && $_SESSION['uploaded_image'] !== '') {
    echo '<img src="' . $_SESSION['uploaded_image'] . '" alt="Ảnh người dùng" style="width: 300px;">';

    // Sau khi hiển thị, bạn có thể xoá session để không hiển thị ảnh nữa:
    // unset($_SESSION['uploaded_image']);
}
?>
    </form>
    
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById('preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
  
</body>
</html>