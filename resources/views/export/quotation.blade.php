<table>
    <thead>
        <tr>
            <th colspan="9" style="border:1px solid black;text-align:center;">教科書採購版本</th>
        </tr>

        <tr>
            <th style="border:1px solid black;text-align:center;">書名</th>
            <th style="border:1px solid black;text-align:center;">冊別</th>
            <th style="border:1px solid black;text-align:center;">出版社</th>

            <th style="border:1px solid black;text-align:center;">作者</th>

            <th style="border:1px solid black;text-align:center;">審定字號</th>

            <th style="border:1px solid black;text-align:center;">數量</th>
            <th style="border:1px solid black;text-align:center;">定價</th>
            <th style="border:1px solid black;text-align:center;">定價小計</th>

            <th style="border:1px solid black;text-align:center;">學生價小計</th>

            <th style="border:1px solid black;text-align:center;">使用班級</th>

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
                <td style="border:1px solid black"></td>
                <td style="border:1px solid black"></td>

            </tr>
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
            <td style="border:1px solid black">=SUM(I6:I8)</td>

        </tr>
        <tr>
            <td  colspan="6" style="text-align:left;">煩請於收到詢價單後一週內回傳報價,謝謝。</td>
            <td  colspan="3" style="text-align:left;">出版社電話：</td>
        </tr>
        <tr>
            <td  colspan="6" style="text-align:left;">若書籍有問題請回電</td>
            <td  colspan="3" style="text-align:left;">出版社傳真：</td>
        </tr>
    </tbody>
    
</table>
