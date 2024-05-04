<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration Form</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="max-width: 400px; margin: auto; margin-top: 50px">
            <div style="background-color: greenyellow; padding: 5px; margin-bottom: 10px;">
                <h4 style="font-weight: bolder">User Registration Form</h4>
            </div>
            <div>
                <div class="borderRed" style="width: 100%; padding: 10px">
                    <form onsubmit="return validate()">
                        <table cellpadding="5" style="width: 100%">
                            <tr>
                                <td>User Name</td>
                                <td>
                                    <input class="fit-to-parent" type="text" id="userName" oninput="userNameValidate()" onblur="userNameValidate()">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="errorText" id="errorUN"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>
                                    <input class="fit-to-parent" type="password" id="password" oninput="passwordValidation()" onblur="passwordValidation()">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="errorText" id="errorPswd"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>
                                    <input class="fit-to-parent" type="password" id="confirmPwrd" oninput="conPswdValidate()">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="errorText" id="errorConPswd"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>
                                    <textarea id="address" class="borderRed fit-to-parent" oninput="addressValidate()"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="errorText" id="errorAddress"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input class="fit-to-parent" type="email" id="email" oninput="emailValidate()">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="errorText" id="errorEmail"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" id="male" name="gender"><span>Male</span>
                                    <input type="radio" id="female" name="gender"><span>Female</span>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="errorText" id="errorGender"></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>
                                    <select class="borderRed fit-to-parent">
                                        <option>Sri Lanka</option>
                                        <option>India</option>
                                        <option>America</option>
                                        <option>Japan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" id="submit" class="btn btn-primary" value="Submit">
                                    <input type="submit" id="reset" class="btn btn-danger" value="Reset">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <form>

        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
