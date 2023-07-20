<?php

echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-1▼","<br>";

    $province = array ("สุราษฎราชธานี", "กระบี่", "ชุมพร", "นครศรีธรรมราช");
    print_r ($province); // แสดงขอมูลในอารเรย

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-2▼","<br>";

    $province = array ( );
    $province [ ] = "สุราษฎราชธานี";
    $province [ ] = "กระบี่";
    $province [ ] = "ชุมพร";
    $province [ ] = "นครศรีธรรมราช";
    print_r ($province);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-3▼","<br>";

    $province = array ("Surat" => "สุราษฎราชธานี", "Krabi" => "กระบี่", "Chumphon" =>
"ชุมพร", "Nakhon" => "นครศรีธรรมราช");
    print_r ($province);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-4▼","<br>";

    $province = array ( );                // สรางอารเรยวาง
    $province [0] = "สุราษฎราชธานี";         // กําหนดสมาชิก
    $province [0] = "ยะลา";               // แกไขปรับปรุงคาขอมูลสมาชิกเดิม
    $province [7] = "เชียงใหม่";            // เพิ่มขอมูลสมาชิกใหม
    print_r ($province);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-5▼","<br>";

    foreach (range (0, 12) as $number) echo $number . " ";
    foreach (range (0, 100, 10) as $number) echo $number . " ";
    foreach (range ('a', 'i') as $character) echo $character . " ";
    foreach (range ('i', 'a') as $number) echo $number . " ";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-6▼","<br>";

    $country [1] = "Thailand";
    $country ['A'] = "Japan";
    $country [ ] = "Cambodia";
    print_r ($country);
 
echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-7▼","<br>";

    $txt_file = file ("text.txt");      //เพิ่มไฟล์ text.txt
    $count_arr = count ($txt_file);     //เพิ่มไฟล์ text.txt
    if ($count_arr == 0){
        echo "ไม่มีข้อมูลในไฟล์ <br>";
    } else {
        print_r($txt_file);
    }

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-8▼","<br>";

    $province = array ("สุราษฎราชธานี", "กระบี่", "ชุมพร", "นครศรีธรรมราช");
    $count_province = count ($province);
    for ($loop = 0; $loop < $count_province; $loop++){
        printf ("ลําดับที่ %d คือ %s <br>", $loop+1, $province [$loop]);
    }

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-9▼","<br>";

        $province = array ("Surat" => "สุราษฎราชธานี", "Krabi" => "กระบี่", "Chumphon" =>
    "ชุมพร", "Nakhon" => "นครศรีธรรมราช");
        while ($element = each ($province)) {
            printf ("คีย์ที่ %s มีค่าเท่ากับ %s <br>",$element ["key"],$element ["value"]);
        }

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-10▼","<br>";

    $data_set = array ("&nbsp&nbspA1001",
        "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspปริญญา",
        "น้อยดอนไพร", "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspอาจารย์",
        "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp42000");

    list ($code, $name, $lastname, $occupation, $salary) = $data_set;
    echo "รหัสพนักงาน: $code ";
    echo "<br>","ชื่อ-สกุล: $name $lastname ";
    echo "<br>","อาชีพ: $occupation";
    echo "<br>","เงินเดือน: $salary";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-11▼","<br>";

    $array = array (0 => 100,"color" => "red");
    print_r (array_keys ($array));echo "<br>";
    $array = array ("blue", "red", "green", "blue", "blue");
    print_r (array_keys ($array, "blue"));echo "<br>";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-12▼","<br>";

    $array = array ("size" => "XL", "color" => "gold");
    print_r (array_values ($array));

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-13▼","<br>";

    $input = array ("a" => "green", "red", "b" => "green", "blue", "red");
    $result = array_unique ($input);
    print_r ($result);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-14▼","<br>";

    $stack = array ("orange", "banana");
    array_push ($stack, "apple", "raspberry");
    print_r ($stack);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-15▼","<br>";

    $input = array (12, 10, 9);
    $result = array_pad ($input, 5, 0);
    $result = array_pad ($input, -7, -1);
    $result = array_pad ($input, 2, "noop");
    print_r ( $result);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-16▼","<br>";

    $queue = array ("orange", "banana");
    array_unshift ($queue, "apple", "raspberry");
    print_r ($queue);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-17▼","<br>";

    $input = array ("red", "green", "blue", "yellow");
    array_splice ($input, 2);
    print_r ($input);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-18▼","<br>";

    $stack = array ("orange", "banana");
    unset ($stack [1]);
    print_r ($stack);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-19▼","<br>";

    $stack= array ("orange", "banana", "apple");
    array_pop ($stack);
    print_r ($stack);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-20▼","<br>";

    $stack = array ("orange", "banana", "apple");
    array_shift ($stack);
    print_r ($stack);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-21▼","<br>";

    $a = array ("1","3","6");
    printf("%d<br>", count($a));
    printf("%d<br>", count(null));
    printf("%d<br>", count(false));

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-22▼","<br>";

    $a = array ("1","3","6");
    printf("%d<br>", sizeof ($a));

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-23▼","<br>";

    $array = array(1, "hello", 1, "world", "hello");
    print_r (array_count_values ($array));

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-24▼","<br>";

    $fruits = array ("lemon", "banana", "apple");
    sort ($fruits);
    foreach ($fruits as $key => $val)echo "fruits[" . $key . "] = " . $val . "<br>";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-25▼","<br>";

    $fruits = array ( "Orange1", "orange2", "Orange3", "orange20");
    @sort($fruits, SORT_NATURAL | SORT_FLAG_CASE);
    foreach ($fruits as $key => $val) echo "fruits[" . $key . "] = " . $val . "<br>";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-26▼","<br>";

    $fruits = array ("lemon", "orange", "banana", "apple");
    rsort ($fruits);
    foreach ($fruits as $key => $val) echo "$key = $val";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-27▼","<br>";

    $fruits = array("d" => "lemon", "b" => "banana", "c" => "apple");
    asort ($fruits);
    foreach ($fruits as $key => $val) echo "$key = $val <br>";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-28▼","<br>";

    $fruits = array("d" =>"lemon", "b" => "banana", "c" => "apple");
    arsort ($fruits);
    foreach ($fruits as $key => $val)echo "$key = $val <br>";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-29▼","<br>";

    $fruits = array ("d" => "lemon", "b" => "banana", "c" => "apple");
    ksort ($fruits);
    foreach ($fruits as $key => $val)echo "$key = $val <br>";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-30▼","<br>";

    $fruits = array("d" => "lemon", "b" => "banana", "c" => "apple");
    krsort ($fruits);
    foreach ($fruits as $key => $val)echo "$key = $val <br>";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-31▼","<br>";

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid",4);
    $result = array_merge($array1, $array2);
    print_r ($result);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-32▼","<br>";

    $array1 = array("color" => "red", 2, 4);
    $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid",4);
    $result = array_merge_recursive ($array1, $array2);
    print_r ($result);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-33▼","<br>";

    $a = array ('green', 'red', 'yellow');
    $b = array ('avocado', 'apple', 'banana');
    $c = array_combine($a, $b);
    print_r ($c);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-34▼","<br>";

    $trans = array ("a" => 1, "b" => 1, "c" => 2);
    $trans = array_flip($trans);
    print_r ($trans);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-35▼","<br>";

    $search_array = array('first' => 1, 'second' => 4);
    if (array_key_exists('first', $search_array)) echo "พบข้อมูลในอาร์เรย์";
    else echo "ไม่พบข้อมูลในอาร์เรย์";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-36▼","<br>";

    $os = array ("Mac", "NT", "Irix", "Linux");
    if (in_array ("Irix", $os))echo "Got Irix";
    if (in_array ("mac", $os))echo "Got mac";

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-37▼","<br>";

    $array1 = array ("a" => "green", "red", "blue");
    $array2 = array ("b" => "green", "yellow", "red");
    $result = array_intersect($array1, $array2);
    print_r ($result);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-38▼","<br>";

    $array1 = array ("a" => "green", "red", "blue", "red");
    $array2 = array ("b" => "green", "yellow", "red");
    $result = array_diff ($array1, $array2);
    print_r ($result);

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-39▼","<br>";

//$fileName = mktime (date('H'), date('i'), date('s'),date('m'), date('d'), date('Y')).'.jpg';
//move_uploaded_file ($_FILE["file"] ["tmp_name"], "../image/news/".$fileName);
//copy ($_FILE ["file"] ["tmp_name"], "../image/news/".$fileName);
//

echo    "<br>","<br>";
//จบEx.
echo "-----------------------------------------------------------------------------------------------------------------------<br>"
,"<br>","Ex.6-40▼","<br>";
/*== ?>
<?php  กําหนดชื่อไฟล์เป็นupload.php ?>
<html>
    <head>
        <meta http-equiv="Content-Type"content="text/html; charset=utf-8" />
        <title>Upload File by Mr.Parinya</title>
    </head>
    <body>
        <form name="form1" method="post" action="chk.php" enctype="multipart/form-data">
            <input type="file" name="fileUpload">
            <input name="btnSubmit" type="submit"value="Submit">
        </form>
    </body>
</html>
*/





