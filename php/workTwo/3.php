<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .thead{
            width: 350px;
            height: 450px;
            background: #fdeadb;
            border-style: solid;
            border: 3px, 3px, 3px, 3px;
            border-color: #ffd2ae;
            margin: 0 auto;
            text-align: center;
        }
        .ttr1{
            text-align: left;
        }
        table{
            width: 350px;
            height: 300px;
        }
        table td{
            width: 125px;
        }
        p{
            color: #fac291;
        }
        .thead div{
                margin-left: 180px;
                margin-top: -80px;
        }
    </style>

</head>
<body>
    <div class="thead">
        <h3>展示学生资料</h3>
        <p>------------------------------------</p>
        <table>
            <tr><td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名:</td><td class="ttr1"><?php echo $_POST['username'] ?></td></tr>
            <tr><td>出生日期:</td><td class="ttr1"><?php echo $_POST['userday'] ?></td></tr>
            <tr><td>年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄:</td><td class="ttr1"><?php echo $_POST['userage'] ?></td></tr>
            <tr><td>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;科:</td><td class="ttr1"><?php echo $_POST['usersubject'] ?></td></tr>
            <tr><td>学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;号:</td><td class="ttr1"><?php echo $_POST['userstudent'] ?></td></tr>
            <tr><td>星&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;座:</td><td class="ttr1"><?php $str1 = $_POST['userclass'];

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

                                                ?></td></tr>
        </table>
         <div>
            <?php
                                        $str1 = $_POST['userclass'];
                                        echo "<br>";
                                        $str2 = '星座/' . $str1 .= '.png';

                                        echo '<img src=' . $str2 .= ' width="50px" height="70px">';
                                        ?>

        </div>

    </div>
</body>