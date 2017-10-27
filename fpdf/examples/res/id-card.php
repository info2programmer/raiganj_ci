<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <style>
        body {font-family: sans-serif}
        /* Global CSS file */
        .clearfix:after { clear:both; content:"."; display:block; height:0; visibility:hidden; }

        /* ie CSS file */
        .clearfix { zoom:1; }

        table.page {
            /* A4 */
            width: 655px;
            height: 842px;
            border-collapse: collapse;
            text-align: justify;
        }
        table.rounded-corner {
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }
        td.half-width-left, td.half-width-right {
            width: 50%;
            padding: 5px;
            vertical-align: top;
        }
        td.half-width-left {
            padding-right: 2px;
        }
        td.half-width-right {
            padding-left: 2px;
        }

        div.id-card, div.id-card-back {
            display: block;
            border: 1px solid black;
            padding: 3px;
        }

        div.id-card table {width: 100%; border-collapse: collapse}
        div.id-card table > tbody > tr:nth-child(1) > td img {width: 40px; position: absolute; display: block}
        div.id-card table > tbody > tr:nth-child(1) > td h4 {font-size: 13px; text-align: center; padding: 0; margin: 0; display: block; margin-top: 2px}
        div.id-card table > tbody > tr:nth-child(1) > td h5 {font-size: 10px; text-align: center; text-decoration: underline; padding: 0; margin: 0; display: block; margin-top: 2px; margin-bottom: 7px}
        div.id-card table > tbody > tr:nth-child(2) > td > table {border-collapse: collapse}
        div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr > td {font-size: 11px; min-width: 2px}
        div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr > td:first-child {width: 55px; font-weight: 600;}
        div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr > td:nth-child(2) {width: 2px}
        div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr.elective > td:nth-child(2) {width: 90px}
        div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr:nth-child(2) > td:last-child {width: 64px}
        div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr:nth-child(2) > td:last-child > img {width: 64px}
        div.id-card table > tbody > tr:nth-child(2) > td > table > tbody > tr:last-child > td {font-family: monospace; font-weight: 300; height: 23px; vertical-align: bottom}

        div.id-card-back table {border-collapse: collapse;}
        div.id-card-back table > tbody > tr > td {font-size: 11px; height: 14px}
        div.id-card-back table > tbody > tr:nth-child(n+2) > td:first-child {width: 100px; font-weight: 600}
        div.id-card-back table > tbody > tr:nth-child(n+2) > td:nth-child(3) {width: 60px}
        div.id-card-back table > tbody > tr:nth-child(2) > td:nth-child(4) {text-align: center; vertical-align: top}
        div.id-card-back table > tbody > tr:nth-child(2) > td:nth-child(4) h4 {padding: 3px; margin: 0; font-size: 11px}
        div.id-card-back table > tbody > tr:nth-child(6) > td img {height: 42px; width: auto; display: block}
        div.id-card-back table > tbody > tr:nth-child(n+6) > td:nth-child(4) {text-align: right}
        div.id-card-back table > tbody > tr:last-child > td {height: 36px; vertical-align: bottom; font-weight: 300!important;}


    </style>
</head>
<body>
<table class="page">
    <tr>
        <td class="half-width-left">
            <div class="id-card">
                <table>
                    <tr>
                        <td>
                            <img src="../../../res/logo-blue.jpg" alt="">
                            <h4>Gazole Mahavidyalaya</h4>
                            <h5>Identity Card</h5>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td colspan="4">
                                        PRIYANKA PRASAD <!-- NAME -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Class</td>
                                    <td>:</td>
                                    <td colspan="3">
                                        B.A. General <!-- CLASS -->
                                    </td>
                                    <td rowspan="5">
                                        <img src="../../../res/dummy-student.jpg" alt=""> <!-- STUDENT IMAGE -->
                                    </td>
                                </tr>
                                <tr class="elective">
                                    <td colspan="3">&nbsp;</td>
                                    <td>
                                        Sanskrit <!-- ELECTIVE SUBJECT 1 -->
                                    </td>
                                </tr>
                                <tr class="elective">
                                    <td colspan="3">&nbsp;</td>
                                    <td>
                                        Education <!-- ELECTIVE SUBJECT 2 -->
                                    </td>
                                </tr>
                                <tr class="elective">
                                    <td colspan="3">&nbsp;</td>
                                    <td>
                                        Philosophy <!-- ELECTIVE SUBJECT 3 -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Year</td>
                                    <td>:</td>
                                    <td colspan="3">1st Year</td>
                                </tr>
                                <tr>
                                    <td>Roll No.</td>
                                    <td>:</td>
                                    <td colspan="4">1141925</td>
                                </tr>
                                <tr>
                                    <td>Student Id</td>
                                    <td>:</td>
                                    <td colspan="4">B.A/14/1925</td>
                                </tr>
                                <tr>
                                    <td>*B.A/14/1925*</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
        <td class="half-width-right">
            <div class="id-card-back">
                <table>
                    <tr>
                        <td colspan="4"><strong>Father/Guardian Name</strong> : RAJKUMAR PRASAD</td>
                    </tr>
                    <tr>
                        <td>D.O.B</td>
                        <td>:</td>
                        <td>03/09/1995</td>
                        <td rowspan="4">
                            <h4>Address</h4>
                            VILL- VIVEKANANDA PALLY, PO+PS- GAZOLE, DIST- MALDA
                        </td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td>:</td>
                        <td>Female</td>
                    </tr>
                    <tr>
                        <td>Session</td>
                        <td>:</td>
                        <td>2014-15</td>
                    </tr>
                    <tr>
                        <td>Date of Admission</td>
                        <td>:</td>
                        <td>26/07/2014</td>
                    </tr>
                    <tr>
                        <td>Student Signature</td>
                        <td>:</td>
                        <td colspan="2">
                            <img src="../../../res/principal-signature.png" style="float: right" alt="">
                            <img src="http://images.all-free-download.com/images/graphiclarge/dale_earnhardt_signature_123835.jpg" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>:</td>
                        <td>27/08/2015</td>
                        <td>Principal</td>
                    </tr>
                    <tr>
                        <td colspan="4">Every student should bring with him/her this card without fail to the college and present it when required. It is not transferable.</td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
</body>
</html>