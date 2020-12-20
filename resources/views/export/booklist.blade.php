<table>
    <thead>
        <tr>
            <th colspan="9" style="border:1px solid black;text-align:center;">訂購統計表</th>
        </tr>
        <tr>
            <th colspan="9" style="border:1px solid black;text-align:center;">教科書名稱、冊別、版本</th>
        </tr>


        <tr>
            <th style="border:1px solid black;text-align:center;">名稱</th>
            <th style="border:1px solid black;text-align:center;color:red">書名</th>

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
                <td style="border:1px solid black">1</td>

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
                <td style="border:1px solid black">1</td>

            </tr>
        @endforeach
        <tr>
            <td style="border:1px solid black">數量小計</td>
        </tr>
        <tr>
            <td style="border:1px solid black">減免數量</td>
        </tr>
        <tr>
            <td style="border:1px solid black">實際數量</td>
        </tr>
        <tr>
            <td style="border:1px solid black">優惠價小計</td>
        </tr>
        <tr>
            <td ></td>
        </tr>
        <tr>
            <td >減免名單</td>
        </tr>
        <tr>
            <td style="border:1px solid black"></td>
        </tr>
        <tr>
            <td style="border:1px solid black">總計</td>
        </tr>
    </tbody>
    
</table>
