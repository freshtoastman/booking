<table>
    <thead>
        <tr>
            <th colspan="7" style="border:1px solid black;text-align:center;color:red;">採購單</th>
        </tr>
        <tr>
            <th colspan="7" style="border:1px solid black;text-align:center;">
                聯絡人：
                電話：
                傳真：
                Ｅ-Mail：
            </th>
        </tr>
        <tr>
            <th colspan="7">

            </th>
        </tr>
        <tr>
            <th style="border:1px solid black;text-align:center;">書名</th>
            <th style="border:1px solid black;text-align:center;">冊別</th>
            <th style="border:1px solid black;text-align:center;">出版社</th>
            <th style="border:1px solid black;text-align:center;">使用班級</th>
            <th style="border:1px solid black;text-align:center;">數量</th>
            <th style="border:1px solid black;text-align:center;">備用冊數</th>
            <th style="border:1px solid black;text-align:center;">總計冊數</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black"></td>
            </tr>

        @endforeach
        <tr>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>
            <td style="border:1px solid black"></td>

        </tr>

        <tr>
            <th colspan="7" style="border:1px solid black;text-align:center;">
                注意事項
            </th>
        </tr>
        <tr>
            <th colspan="7" style="border:1px solid black;text-align:left;">
                1、教務處存查書籍、零購用書，請另行包裝註明。
            </th>
        </tr>

        <tr>
            <th colspan="7" style="border:1px solid black;text-align:left;">
                2、教師用書如非業務人緣親自送達，請另行裝箱註明。
            </th>
        </tr>

        <tr>
            <th colspan="7" style="border:1px solid black;text-align:left;">
                3、到貨時間務必於週一至週五中午12:00前，以免無人代收

            </th>
        </tr>
        <tr>
            <th colspan="7" style="border:1px solid black;text-align:left;">
             4、寄貨地點及收貨人：                
            </th>
        </tr>
        <tr>
            <th colspan="4" style="border:1px solid black;text-align:left;">
            煩請於指定時間內到貨               
            </th>
            <th colspan="3" style="border:1px solid black;text-align:left;">
                出版社電話               
                </th>
        </tr>
        <tr>
            <th colspan="4" style="border:1px solid black;text-align:left;">
            若書籍有問題請回電               
            </th>
            <th colspan="3" style="border:1px solid black;text-align:left;">
                出版社傳真               
                </th>
        </tr>
    </tbody>

</table>
