<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {font-size: 12px; font-family: sans-serif}
        div.page * {-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box}
        div.page {width: 660px}
        div.page table {border-collapse: collapse; width: 100%}
        div.border {display: block; border: 1px solid black; overflow: hidden; padding: 20px; -webkit-border-radius: 40px; -moz-border-radius: 40px; border-radius: 40px}
        div.page > table > tbody > tr > td.front {width: 50%; padding: 2px}
        div.page > table > tbody > tr > td.back {width: 50%; padding: 2px}
        div.page > table > tbody > tr > td.front > div.border > img.title {margin: 0 -10px; margin-top: -10px; width: calc(100% + 20px)}
        div.page > table > tbody > tr > td.front > div.border > div.title {display: block; text-align: center}
        div.page > table > tbody > tr > td.front > div.border > div.title > div.box {border: 1px solid black; display: inline-block; padding: 3px 12px; margin-top: 7px; margin-bottom: 12px}
        div.page > table > tbody > tr > td.front > div.border > div.title > div.box > strong {font-size: 18px}
        div.page > table > tbody > tr > td.front > div.border > table {margin: 0 -10px; width: calc(100% + 20px)}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr > td:nth-child(1), div.page > table > tbody > tr > td.front > div.border > table > tbody > tr > td:nth-child(4) {font-style: italic; width: 60px}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr > td:nth-child(2), div.page > table > tbody > tr > td.front > div.border > table > tbody > tr > td:nth-child(5) {width: 2px}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr > td:nth-child(3):not(.wide) {width: 112px}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(5) > td:nth-child(1) {text-align: center}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(5) > td:nth-child(1) img {height: 28px}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(5) > td:nth-child(1) hr {margin: 0}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(5) > td:nth-child(3) {}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(n+6) > td:first-child {border: 1px solid black; font-style: normal}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(6) > td:first-child {font-size: 11px; text-align: center}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(6) > td:nth-child(2) {vertical-align: middle; text-align: right;}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(6) > td:nth-child(2) img {width: 80px; margin-right: 18px; border: 1px solid black}
        div.page > table > tbody > tr > td.front > div.border > table > tbody > tr:nth-child(7) > td {height: 90px}

        div.page > table > tbody > tr > td.back > div.border > div {display: block; margin: 0 -10px; width: calc(100% + 20px)}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(2) > hr {margin: 0}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(2) > img {display: block; height: 40px; margin: 0 auto}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(2) > i {display: block; text-align: center}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(2) {text-align: center; display: block; width: 50%; margin: 0 auto}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(3) {display: block; width: 135px; margin: 0 auto; border: 1px solid black; padding: 3px 12px; font-size: 16px; font-weight: 600; margin-top: 5px}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(4) ol {padding-left: 20px}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(5) table {border-collapse: collapse}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(5) table td {border: 1px solid black}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(5) table > tbody > tr:nth-child(1) {text-align: center}
        div.page > table > tbody > tr > td.back > div.border > div:nth-child(5) table > tbody > tr:nth-child(n+3) {height: 22px}
    </style>
</head>
<body>
<div class="page">
    <table>
        <tr>
            <td class="front">
                <div class="border">
                    <img src="../../../res/gazole-text.png" class="title" alt="">
                    <div class="title">
                        <div class="box">
                            <strong>LIBRARY CARD</strong>
                        </div>
                    </div>
                    <table>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td colspan="4">PRIYANKA PRASAD</td>
                        </tr>
                        <tr>
                            <td>Library ID</td>
                            <td>:</td>
                            <td colspan="4">B.A/14/1925</td>
                        </tr>
                        <tr>
                            <td>Class</td>
                            <td>:</td>
                            <td>B.A General</td>
                            <td>Roll No</td>
                            <td>:</td>
                            <td>1141925</td>
                        </tr>
                        <tr>
                            <td>Session</td>
                            <td>:</td>
                            <td>2014-15</td>
                            <td>Subject</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <img src="../../../res/librarian-signature.png" height="28" alt="">
                                <hr>
                                Signature of Librarian
                            </td>
                            <td colspan="2">&nbsp;</td>
                            <td class="wide">
                                Sanskrit<br>
                                Education<br>
                                Philosophy
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Address with Guardian's Name</td>
                            <td colspan="3" rowspan="2">
                                <img src="../../../res/dummy-student.jpg" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <strong>RAJKUMAR PRASAD</strong><br>
                                VILL- VIVEKANANDA PALLY, PO+PS- GAZOLE, DIST- MALDA<br><br>
                                Contact No : 7501238860

                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td class="back">
                <div class="border">
                    <div style="text-align: justify">I shall be responsible for the books issued against this card</div>
                    <div>
                        <img src="http://images.all-free-download.com/images/graphiclarge/dale_earnhardt_signature_123835.jpg" alt="">
                        <hr>
                        <i>Signature of the Student</i>
                    </div>
                    <div>
                        INSTRUCTION
                    </div>
                    <div>
                        <ol>
                            <li>Only one book can be borrowed on producing this card.</li>
                            <li>The book may be retained for the specified period. only &#x20B9;1/- per day will be	charged on an overdue date.</li>
                            <li>Duplicate card can be replaced on payment of &#x20B9;60/- (sixty).</li>
                            <li>This card is not transferable.</li>
                        </ol>
                    </div>
                    <div>
                        <table>
                            <tr>
                                <td colspan="2"><strong>Renewed Upto :</strong></td>
                            </tr>
                            <tr>
                                <td>CLASS</td>
                                <td>Sign. of the Issuing Authority</td>
                            </tr>
                            <tr>
                                <td>1st Year</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2nd Year</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3rd Year</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</div>
</body>
</html>