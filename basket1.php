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

        <div name = 'search1'>
            <input type="text" placeholder="강의명 검색" name = 'search_subject'>
            <button>검색</button>
            <?php

            ?>
            <!-- 여기 검색기능 있는데 만들어 주세요. 안될 것 같으면 그냥 지워주시면 됩니다 -->
        </div>

                    <!-- CREATE TABLE `subject` (
            `id`int primary key DEFAULT NULL,
            `subject_name` char(30) DEFAULT NULL,
            `subject_credit` int DEFAULT NULL,
            `professor_name` char(30) DEFAULT NULL,
            `subject_time` char(40) DEFAULT NULL,
            `class_room` char(40) DEFAULT NULL,
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
            이렇게 데이터파일을 만들어 주실 수 있나요? -->

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
                
                <td>과목코드</td>
                <td>과목명</td>
                <td>학점</td>
                <td>담당교수</td>
                <td>요일/교시</td>
                <td>강의실</td>
                <td><button name = 'subject_add'>담기</button></td>
                <!-- 여기서 담기를 누르면 ./basket.html로 가서 내 바구니에 담아주시면서 my_subject라는
                 DB에 넣어주시면 됩니다. -->
             </tr>
        </table>
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