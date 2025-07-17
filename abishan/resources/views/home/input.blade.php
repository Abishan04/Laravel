<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Input Types Demo</title>
    <link rel="stylesheet" href="{{ asset('css/input.css') }}" />
</head>

<body>
    <form action="/output" method="get" autocomplete="off" novalidate>
        <table>
            <tr>
                <td><label for="button">button</label></td>
                <td><input type="button" id="button" name="button" value="Click Me" /></td>
            </tr>
            <tr>
                <td><label for="grade">Grade</label></td>
                <td>
                    <select name="grade" id="grade" multiple size="4">
                        <option value="A" >10A</option>
                        <option value="B">10B</option>
                        <option value="C">10C</option>
                        <option value="D">10D</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="subjects[]">checkbox</label></td>
                <td>
                    <input type="checkbox" id="Java" name="subjects[]" value="Java" />
                    <label for="Java">Java</label>

                    <input type="checkbox" id="csharp" name="subjects[]" value="C#" />
                    <label for="csharp">C#</label>

                    <input type="checkbox" id="php" name="subjects[]" value="PHP" />
                    <label for="php">PHP</label>
                </td>
            </tr>
            <tr>
                <td><label for="color">color</label></td>
                <td><input type="color" id="color" name="color" /></td>
            </tr>
            <tr>
                <td><label for="date">date</label></td>
                <td><input type="date" id="date" name="date" /></td>
            </tr>
            <tr>
                <td><label for="datetime-local">datetime-local</label></td>
                <td><input type="datetime-local" id="datetimelocal" name="datetimelocal"/></td>
            </tr>
            <tr>
                <td><label for="email">email</label></td>
                <td>
                    <input type="email" id="email" name="email" placeholder="Enter your email(s)"  />
                </td>
            </tr>
            <tr>
                <td><label for="file">file</label></td>
                <td><input type="file" id="file" name="file"  /></td>
            </tr>
            <tr>
                <td><label for="hidden">hidden</label></td>
                <td><input type="hidden" id="hidden" name="hidden" value="secret" /></td>
            </tr>
            <tr>
                <td><label for="image">image</label></td>
                <td><input type="image" id="image" name="image" src="{{ asset('images/janan.png') }}" alt="Submit"
                        width="100" height="100" />
                </td>
            </tr>
            <tr>
                <td><label for="month">month</label></td>
                <td><input type="month" id="month" name="month" /></td>
            </tr>
            <tr>
                <td><label for="number">number</label></td>
                <td><input type="number" id="number" name="number" min="1" max="100" step="2" /></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="password" id="password" name="password" placeholder="enter your password" /></td>
            </tr>
            <tr>
                <td><label>radio</label></td>
                <td>
                    <input type="radio" id="male" name="radio" value="male" />
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="radio" value="female" />
                    <label for="female">Female</label>
                </td>
            </tr>
            <tr>
                <td><label for="range">range</label></td>
                <td><input type="range" id="range" name="range" min="0" max="100" step="10" /></td>
            </tr>
            <tr>
                <td><label for="reset">reset</label></td>
                <td><input type="reset" id="reset" name="reset" /></td>
            </tr>
            <tr>
                <td><label for="search">search</label></td>
                <td><input type="search" id="search" name="search" /></td>
            </tr>
            <tr>
                <td><label for="submit">submit</label></td>
                <td><input type="submit" id="submit" name="submit" /></td>
            </tr>
            <tr>
                <td><label for="tel">tel</label></td>
                <td><input type="tel" id="tel" name="tel" placeholder="enter your phone number" /></td>
            </tr>
            <tr>
                <td><label for="text">name</label></td>
                <td><input type="text" id="text" name="text" placeholder="enter your name" />
                </td>
            </tr>
            <tr>
                <td><label for="time">time</label></td>
                <td><input type="time" id="time" name="time" /></td>
            </tr>
            <tr>
                <td><label for="url">url</label></td>
                <td><input type="url" id="url" name="url" placeholder="enter your website URL" /></td>
            </tr>
            <tr>
                <td><label for="week">week</label></td>
                <td><input type="week" id="week" name="week" /></td>
            </tr>
            <tr>
                <td><label for="address">address</label></td>
                <td><textarea name="address" id="add " cols="30" rows="5" placeholder="enter your address"></textarea></td>
            </tr>
        </table>
    </form>
</body>

</html>