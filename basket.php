<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'UTF-8'>
       <title>수강신청 바구니</title> 
       <style>
            a:link, a:visited {
            background-color:#4f63ff;
             color: #fff;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-size: 15px;
            cursor: pointer;   
            }
            a:hover, a:active { 
            background-color: #164795; 
            }
            h1, h3 {
                background : linear-gradient(to right, #164795, white );
                color : white;
                }
            iframe {width: 100%;}
            table {
            width : 95%;
            border-collapse : collapse;
            text-align: center;
            }
            button{
                /* background-color:#4f63ff;
                color : white; */
            }
        </style>
    </head>
    <body>
        <h1>수강바구니</h1>
        <a href = './basket1.html'><b>메인화면</b></a>&nbsp;&nbsp;
        <br>
        <br>
        <iframe name = 'display' src ='./basket1.html'  height="400" ></iframe>

        <h3>내 바구니</h3>
        <!-- CREATE TABLE `my_subject` (
            `id`int primary key DEFAULT NULL,
            `subject_name` char(30) DEFAULT NULL,
            `subject_credit` int DEFAULT NULL,
            `professor_name` char(30) DEFAULT NULL,
            `subject_time` char(40) DEFAULT NULL,
            `class_room` char(40) DEFAULT NULL,
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
            이렇게 데이터파일을 만들어 주실 수 있나요? -->

        <table border = '1'>
            <tr>
                <th>과목코드</th>
                <th>과목명</th>
                <th>학점</th>
                <th>담당교수</th>
                <th>요일/교시</th>
                <th>강의실</th>
                <th>삭제</th>
            </tr>
            <tr>
                <td>과목코드</td>
                <td>과목명</td>
                <td>학점</td>
                <td>담당교수</td>
                <td>요일/교시</td>
                <td>강의실</td>
                <td><button name = subject_romv>삭제</button></td>
                <!-- 여기서 삭제를 누르면 내 바구니에서 삭제해 주시면서 my_subject에서도
                 삭제해 주시면 됩니다. -->
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


    </body>
</html>