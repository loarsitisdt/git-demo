<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .style_name1 {
            width: 350px;
            height: 400px;
            background: #fdeadb;
            border-style: solid;
            border: 3px, 3px, 3px, 3px;
            border-color: #ffd2ae;
            margin: 0 auto;

        }

        .style_name2 {
            padding: 0px;
            margin-left: 0px;
            position: relative;
            text-align: center;
            list-style-type: none;
        }

        .style_name3 {
            color: #fac291;
        }

        .style_name4 {
            width: 200px;
            margin-top: 12px;
            margin-left: 40px;
        }

        .style_name5 {
            width: 50px;
            padding-left: 30px;
        }

        .style_name6 {
            width: 200px;
            height: 50px;
            margin-top: 25px;
            margin-left: 40px;
        }

        td {
            text-align: left;
        }

        .style_name7 {
            margin-left: 180px;
            margin-top: -90px;
        }
    </style>
</head>

<body>
    <div class="style_name1">
        <ul class="style_name2">
            <li><strong style="font-size:20px;">展示学生资料</strong></li>
            <li class="style_name3">---------------------------</li>

            <li class="style_name4">
                <table>
                    <tr>
                        <td><span class="style_name4">姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</span></td>
                        <td class="style_name5"><?php echo $_POST['username'] ?></td>
                    </tr>
                </table>
            </li>
            <li class="style_name4">
                <table>
                    <tr>
                        <td><span class="style_name4">出生日期:</span></td>
                        <td class="style_name5"><?php echo $_POST['userday'] ?></td>
                    </tr>
                </table>
            </li>
            <li class="style_name4">
                <table>
                    <tr>
                        <td><span class="style_name4">年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄:</span></td>
                        <td class="style_name5"><?php echo $_POST['userage'] ?></td>
                    </tr>
                </table>
            </li>
            <li class="style_name4">
                <table>
                    <tr>
                        <td><span class="style_name4">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;科:</span></td>
                        <td class="style_name5"><?php echo $_POST['usersubject'] ?></td>
                    </tr>
                </table>
            </li>
            <li class="style_name4">
                <table>
                    <tr>
                        <td><span class="style_name4">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号:</span></td>
                        <td class="style_name5"><?php echo $_POST['userstudent'] ?></td>
                    </tr>
                </table>
            </li>
            <li class="style_name6">
                <table>
                    <tr>
                        <td><span class="style_name4">星&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;座:</span></td>
                        <td class="style_name5"><?php
                                                $str1 = $_POST['userclass'];

                                                switch ($str1) {
                                                    case 'shizi':
                                                        echo '狮子座';
                                                        break;
                                                    case 'baiyang':
                                                        echo '白羊座';
                                                        break;
                                                    case 'shuangzi':
                                                        echo '双子座';
                                                        break;
                                                    case 'jinniu':
                                                        echo '金牛座';
                                                        break;
                                                    case 'tianping':
                                                        echo '天枰座';
                                                        break;
                                                    case 'shuiping':
                                                        echo '水瓶座';
                                                        break;
                                                    case 'juxie':
                                                        echo '巨蟹座';
                                                        break;
                                                    case 'shuangyu':
                                                        echo '双鱼座';
                                                        break;
                                                    case 'mojie':
                                                        echo '魔羯座';
                                                        break;
                                                    case 'sheshou':
                                                        echo '射手座';
                                                        break;
                                                    case 'chunv':
                                                        echo '处女座';
                                                        break;
                                                    case 'tianxie':
                                                        echo '天蝎座';
                                                        break;
                                                    default:
                                                        // code...
                                                        break;
                                                }

                                                ?></td>
                    </tr>
                </table>
            </li>
            <div class="style_name7"><?php
                                        $str1 = $_POST['userclass'];
                                        echo "<br>";
                                        $str2 = '星座/' . $str1 .= '.png';

                                        echo '<img src=' . $str2 .= ' width="50px" height="70px">';
                                        ?>

            </div>

</body>

</html>