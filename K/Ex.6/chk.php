<?php /*กําหนดชื่อไฟล chk.php สําหรับเริ่มตนอัพโหลด ไฟล์ไปเก็บไว้ยังเซิร์ฟเวอร์*/ ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title> Upload File by Mr.Parinya</title>
    </head>

    <body>
<?php
    if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],"pictures/".$_FILES["fileU
pload"]["name"])) { // กําหนดให้ pictures/ คือ โฟลเดอรปลายทางสําหรับเก็บไฟล์
        echo "อัพโหลดไฟล์เสร็จเรียบร้อยแล้ว";
    } else {
        echo "ไม่สามารถอัพโหลดไฟล์ได์ กรุณาตรวจสอบใหม่";
    }
?>
    </body>
</html>