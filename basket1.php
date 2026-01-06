<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'>
       <title>course_registration_basket</title> 
       <style>
        h1 {
            background-color : #164795;
            color : white;
             background : linear-gradient(to right, #164795, white );
             }
        table {
            width : 100%;
            border-collapse : collapse;
            text-align: center;
        }
        </style>
    </head>
    <body>
        <h1>수강과목목록</h1>

                    <!-- CREATE TABLE `subject` (
            `id`int primary key DEFAULT NULL,
            `subject_name` char(30) DEFAULT NULL,
            `subject_credit` int DEFAULT NULL,
            `professor_name` char(30) DEFAULT NULL,
            `subject_time` char(40) DEFAULT NULL,
            `class_room` char(40) DEFAULT NULL,
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
            이렇게 데이터파일을 만들어 주실 수 있나요? -->

    <form action = 'basket.php' method = 'post' enctype="multipart/form-data" target="_parent">
        <table border = '1'>
            <!-- 아래쪽은 예시입니다. 이런 모양으로 만들어주시면 됩니다. -->
            <tr>
                
                <th>과목코드</th>
                <th>과목명</th>
                <th>학점</th>
                <th>담당교수</th>
                <th>요일/교시</th>
                <th>강의실</th>
                <th>담기</th>
             </tr>
             <tr>
                
                <td name = "s_code">0154701</td>
                <td name = "s_name">이산수학</td>
                <td name = "s_credit">3</td>
                <td name = "s_professor">최미영</td>
                <td name = "s_time">목2,3</td>
                <td name = "s_room">본부516</td>
                <td><input type="hidden" name = 's_code' value="0154701">
                    <input type="hidden" name = 's_name' value="이산수학">
                    <input type="hidden" name = 's_credit' value="3">
                    <input type="hidden" name = 's_professor' value="최미영">
                    <input type="hidden" name = 's_time' value="목2,3">
                    <input type="hidden" name = 's_room' value="본부516">
                    <input type="submit" name = 'subject_add' value="담기">
                </td>

                <!-- 여기서 담기를 누르면 ./basket.html로 가서 내 바구니에 담아주시면서 my_subject라는
                 DB에 넣어주시면 됩니다. -->
             </tr>
                <?php
                 // $s_code = $_POST['s_code'];            
                ?>
        </table>
    </form>
        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>

        <p>aaa</p>


    </body>
</html>