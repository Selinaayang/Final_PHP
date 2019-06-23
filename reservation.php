<?php
session_start();

$id = $_POST["id"];
$pwd = $_POST["pwd"];

if ( $id == "user" and $pwd == "000"){
}else{
  header("Location:form.php"); 
}

?>

<!DOCTYPE html>
<form action="dbconnect.php" method="post">  <!-- dbconnect.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reservation.css">
    <title>諮商申請表</title>
</head>
<body>
    <div class="header">
        <img src="logo1.jpg" alt="logo">
        <h1>諮商輔導組</h1>
        <div class="link">
            <a href="https://sa.nuk.edu.tw/ezfiles/35/1035/img/499/795905582.jpg">緊急校安專線</a>
            <a href="homepage.php">諮職組首頁</a>
            <a href="https://sa.nuk.edu.tw/bin/home.php">學務處</a>
            <a href="https://www.nuk.edu.tw/bin/home.php">回高大首頁</a>
        </div>
    </div>
    <div class="form">
      <p>線上預約表單</p></br>
      <div class="input">
        <?php
        if ( !isset($_SESSION["n"]) ) {
          $_SESSION["n"] = 1;
        } else {
          $_SESSION["n"]++;
        }

        for($i=1;$i<=$_SESSION["n"];$i++){
          $x=$i;
        }
        $y="F".$x;

        date_default_timezone_set("Asia/Taipei");
        $datetime = date ("Y-m-d H:i:s");
        
        ?>
            <input type="hidden" name="formid" value="<?=$y?>"><input type="hidden" name="dattime" value="<?=$datetime?>">
            姓名：<input type="text" name="name">
            <br/>
            身分證字號：<input type="text" name="idnumber"></br>
            生日：<input type="text" name="birth" placeholder="(西元/月/日)">
            性別：<select name="mygender"  size="1">
              <option value="請選擇" selected="True | False">請選擇</option>
              <option value="male" selected="True | False">男</option>
              <option value="female" selected="True | False">女</option>
              <option value="else" selected="True | False">其他</option></select></br>
            學號：<input type="text" name="school_id">
            系級：<input type="text" name="department" placeholder="(例：資管系-2年級)"></br>

            身分別：<input type="radio" name="status" value="本地生">本地生<input type="radio" name="status" value="交換生">交換生<input type="radio" name="status" value="儒生">儒生<input type="radio" name="status" value="僑生">僑生<input type="radio" name="status" value="身障生">身障生</br>
            
            婚姻狀況：<input type="radio" name="wedding" value="未婚">未婚<input type="radio" name="wedding" value="已婚">已婚<input type="radio" name="wedding" value="離婚">離婚<input type="radio" name="wedding" value="分居">分居<input type="radio" name="wedding" value="其他">其他</br>
            
            身心障礙學生：<input type="radio" name="disability" value="NO">否<input type="radio" name="disability" value="YES">是</br>
            
            住宿情況：<input type="radio" name="stay" value="租屋">租屋<input type="radio" name="stay" value="住校">住校<input type="radio" name="stay" value="住家裡">住家裡<input type="radio" name="stay" value="其他">其他&nbsp;(請說明狀況)<input type="text" name="explain1"></br>
            聯絡電話：<input type="text" name="phone"></br>
            聯絡地址：<input type="text" name="addr"></br>
            常用信箱：<input type="text" name="mail"></br>
            緊急聯絡人(一)：姓名<input type="text" name="contect_name">&nbsp;/&nbsp;關係：<input type="text" name="contect_rel">&nbsp;/&nbsp;電話：<input type="text" name="contect_phone"></br><HR>

            <B>來談原因：</B><input type="radio" name="reason" value="主動來談">主動來談<input type="radio" name="reason" value="同儕告知">同儕告知<input type="radio" name="reason" value="家長告知">家長告知<input type="radio" name="reason" value="他人介紹">他人介紹<input type="radio" name="reason" value="其他">其他<input type="text" name="explain2">(請說明)&nbsp;&nbsp;介紹人：<input type="text" name="introducer"></br>
            <B>來談主題(可複選)：</B><input type="checkbox" value="家庭議題" name="issue[]">家庭議題<input type="checkbox" value="人際關係" name="issue[]">人際關係<input type="checkbox"  value="感情困擾" name="issue[]">感情困擾<input type="checkbox"  value="學習議題" name="issue[]">學習議題<input type="checkbox"  value="生涯議題" name="issue[]">生涯議題<input type="checkbox"  value="自我探索" name="issue[]">自我探索<input type="checkbox"  value="壓力調適" name="issue[]">壓力調適<input type="checkbox"  value="情緒調適" name="issue[]">情緒調適<input type="checkbox"  value="性行為議題" name="issue[]">性行為議題<input type="checkbox"  value="性侵害或性騷擾議題" name="issue[]">性侵害或性騷擾議題<input type="checkbox" value="性別議題" name="issue[]">性別議題<input type="checkbox"  value="自傷與自殺議題" name="issue[]">自傷與自殺議題<input type="checkbox"  value="精神疾病" name="issue[]">精神疾病<input type="checkbox"  value="心理測驗" name="issue[]">心理測驗<input type="checkbox"  value="網路使用" name="issue[]">網路使用<input type="checkbox"  value="其他" name="issue[]">其他<input type="text" name="explain3">(請說明)</br>

            
            <B>最近兩個星期身心狀態(如有符合請勾選)：</B><input type="checkbox" name="health[]" value="常感悲傷、沮喪、或焦慮" >常感悲傷、沮喪、或焦慮<input type="checkbox" name="health[]" value="精神不濟沒活力" >精神不濟沒活力<input type="checkbox"  name="health[]" value="覺得沒價值、內疚、或罪惡感">覺得沒價值、內疚、或罪惡感<input type="checkbox"  name="health[]" value="無法專心注意力渙散">無法專心注意力渙散<input type="checkbox"  name="health[]" value="失眠或嗜睡">失眠或嗜睡<input type="checkbox"  name="health[]" value="對事物失去興趣">對事物失去興趣<input type="checkbox" name="health[]" value="食慾不佳或暴食">食慾不佳或暴食<input type="checkbox"  name="health[]" value="行為動作變遲鈍">行為動作變遲鈍<input type="checkbox"  name="health[]" value="以上皆非">以上皆非&nbsp;備註：<input type="text" name="explain5"></br>
            <B>最近兩個星期的壓力指數：</B>以0-10分來形容，0分為「幾乎沒有」，10分為「壓力很大，幾乎已經無法承受」。大約幾分<input type="text" name="pressure"></br>
            <B>最近兩個星期有無傷害自己的念頭：</B><input type="radio" value="我沒有任何自傷的念頭" name="injury">我沒有任何自傷的念頭<input type="radio" value="有自傷念頭，但我不會真的去做" name="injury">有自傷念頭，但我不會真的去做<input type="radio"  value="我想去自傷" name="injury">我想去自傷<input type="radio"  value="如果有機會，我會真的自傷" name="injury">如果有機會，我會真的自傷</br><HR>

            <B>諮商經驗：</B></br>
            <input type="radio" name="experience" value="NO">無</br><input type="radio" name="experience" value="YES">有1.本校，諮商心理師：<input type="text" name="content"></br>&nbsp;&nbsp;&nbsp;&nbsp;2.其他地方：<input type="text" name="content2"></br>
            <B>晤談安排：</B></br>
            <input type="radio" name="plan" value="希望安排原輔導老師">希望安排原輔導老師</br>
            <input type="radio" name="plan" value="任一輔導老師皆可">任一輔導老師皆可</br>
            <input type="radio" name="plan" value="若原輔導老師不行，可安排其它人">若原輔導老師不行，可安排其它人</br>
            <input type="radio" name="plan" value="其他">其他<input type="text" name="explain6"></br>

            <B>醫療資訊：</B></br>
            1.您是否有特別疾病史？<input type="radio" name="check1" value="NO">否<input type="radio" name="check1" value="YES">是，請說明：<input type="text" name="explain8"></br>
            2.您目前是否服用藥物？<input type="radio" name="check2" value="NO">否<input type="radio" name="check2" value="YES">是，請說明：<input type="text" name="explain9"></br><HR>


            對諮商的期待(1000字以內)：</br>
            1.期望晤談次數(6次為主)：<input type="text" name="timess"></br>
            2.關於問題處理的時效評估(0分可等待-10分緊急)：<input type="text" name="evaluation"></br>
            3.對諮商的期待 <textarea name="message" rows="8" cols="85"></textarea><br/></br>
            
            <H5>希望諮商時段</H5>
            備註：請於下面勾選空堂或可以晤談時段(至少填5個時段),勾愈多時段愈好，輔導老師將能盡速為您安排！

            <table border="1" cellpadding="0" cellspacing="0" width='400'>　<tr>
                　<td colspan="2">時段</td>
                  <td>一</td><td>二</td><td>三</td><td>四</td><td>五</td>
            　</tr>
                        　<tr>
                            　<td>1</td>
                            　<td>08:10-09:00</td>
                              <td></td>
                            　<td></td>
                              <td></td>
                            　<td></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(08:10-09:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>2</td>
                            　<td>09:10-10:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(09:10-10:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(09:10-10:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(09:10-10:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(09:10-10:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(09:10-10:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>3</td>
                            　<td>10:10-11:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(10:10-11:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(10:10-11:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(10:10-11:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]]" value="四(10:10-11:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(10:10-11:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>4</td>
                            　<td>11:10-12:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(11:10-12:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(11:10-12:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(11:10-12:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(11:10-12:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(11:10-12:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>5</td>
                            　<td>12:00-13:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(12:00-13:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(12:00-13:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(12:00-13:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(12:00-13:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(12:00-13:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>6</td>
                            　<td>13:10-14:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(13:10-14:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(13:10-14:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(13:10-14:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(13:10-14:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(13:10-14:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>7</td>
                            　<td>14:10-15:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(14:10-15:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(14:10-15:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(14:10-15:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(14:10-15:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(14:10-15:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>8</td>
                            　<td>15:10-16:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(15:10-16:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(15:10-16:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(15:10-16:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(15:10-16:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(15:10-16:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>9</td>
                            　<td>16:10-17:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(16:10-17:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]"value="二(16:10-17:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(16:10-17:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(16:10-17:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(16:10-17:00)" ></td>
                        　</tr>
                        <tr>
                            　<td>10</td>
                            　<td>17:10-18:00</td>
                              <td><input type="checkbox" name="time_interval[]" value="一(17:10-18:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]"value="二(17:10-18:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(17:10-18:00)" ></td>
                            　<td><input type="checkbox" name="time_interval[]" value="四(17:10-18:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="五(17:10-18:00)" ></td>
                        　</tr>
                        
                        <tr>
                            　<td>11</td>
                            　<td>18:10-18:00</td>
                              <td></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(18:10-18:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(18:10-18:00)" ></td>
                            　<td></td>
                              <td></td>
                        　</tr>
                        <tr>
                            　<td>12</td>
                            　<td>19:10-20:00</td>
                              <td></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(19:10-20:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(19:10-20:00)" ></td>
                            　<td></td>
                              <td></td>
                        　</tr>
                        <tr>
                            　<td>13</td>
                            　<td>20:10-21:00</td>
                              <td></td>
                            　<td><input type="checkbox" name="time_interval[]" value="二(20:10-21:00)" ></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(20:10-21:00)" ></td>
                            　<td></td>
                              <td></td>
                        　</tr>
                        <tr>
                            　<td>14</td>
                            　<td>21:10-22:00</td>
                              <td></td>
                            　<td></td>
                              <td><input type="checkbox" name="time_interval[]" value="三(21:10-22:00)" ></td>
                            　<td></td>
                              <td></td>
                        　</tr> 
            </table>

            <CENTER><H4><input type="submit" value="完成，送出申請表">&nbsp;&nbsp;</br><br/><a href='form.php'>登出<a/></H4></CENTER>
            
       
            </div>    
        </form>
    </div>
    <div class="clear"></div>
    <div class="footer">
        <p>國立高雄大學 學生事務處 Division of Student Affairs, NUK</p>
        <p>81148 高雄市楠梓區高雄大學路700號</p>  
        <p>700, Kaohsiung University Rd., Nanzih District, 811. Kaohsiung, Taiwan, R.O.C</p>   
        <p>[傳真：07-5919079] / [校園安全緊急專線：07-5917885]</p>  
    </div>
</body>
</html>