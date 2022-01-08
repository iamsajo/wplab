<!DOCTYPE html>
<html lang="en">
<head>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
                body {
            background-color: #ffffff;
        }

        .signup {
            width: 50%;
            height: 70%;
            background-color: #320d3e;
            padding: 20px;
            margin-left: 25%;
            margin-top: 10%;
            border-radius: 20px;
        }

        .inner {
            width: 90%;
            height: 90%;
            background-color: #320d3e;
            padding: 20px;
            margin: 2%;
            border-radius: 20px;
            box-shadow: 0px 0px 50px #000000;
            opacity: 0.8;
            color: rgb(255, 255, 255);
        }

        .inner2 {
            width: 90%;
            height: 90%;
            background-color: #ffffff;
            padding: 5%;
            border-radius: 20px;
            box-shadow: 0px 0px 50px #000000;
            opacity: 0.9;
            color: #320d3e;
        }


        .inner2 input,select {
            margin-left: 20px;
            width: 80%;
            height: 2rem;
            border-radius: 10px;
        }
        td{
            display: inline;
        }
    </style>


</head>
<body>

<div class="signup">
        <form action="#">
            <div class="inner">
                <h2 align="center">Appointment Menu</h2>
                <div class="inner2">
                    <table width="100%" cellpadding="5px" cellspacing="5px">
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">EMAIL</label>
                            </th>
                            <td>
                                <input type="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="contact">Contact</label>
                            </th>
                            <td>
                                <input type="tel">
                            </td>
                        </tr>
                        
                        <tr>
                            <th>
                                <label for="gender">Gender</label>
                            </th>
                            <td>
                                <select name="g" id="g">
                                    <option value="male"> Male</option>
                                    <option value="female">Female</option>
                                    <option value="othr">Others</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Age:</th>
                            <td><input type="number" name="age"></td>
                        </tr>
                        <tr>
                            <th>Hospital:</th>
                            <td>
                                <select name="h" id="h">
                                    <option value="amrita"> Amrita</option>
                                    <option value="apollo">Apollo</option>
                                    <option value="kims">KIMS</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>Specilization:</th>
                            <td>
                                <select name="h" id="h">
                                    <option value="amrita"> Amrita</option>
                                    <option value="apollo">Apollo</option>
                                    <option value="kims">KIMS</option>
                                </select>
                            </td>
                        </tr>
                                    
                    </table>

                </div>
                    <div style="margin:10px;">
                    <input type="submit" value="BOOK NOW"
                                            style="width:100px; height:40px;border-radius: 10px;color:#030a2b;background-color: antiquewhite;font-size: 15px;font-weight: bold;">
                    </div>
                </div>

        </form>
    </div>
    
</body>
</html>