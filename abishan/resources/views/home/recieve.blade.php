<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Input Types Demo</title>
    <link rel="stylesheet" href="{{ asset('css/input.css') }}" />
</head>

<body>
    <form>
        <table>
            <tr>
                <td><label for="button">button</label></td>
                <td><input type="button" id="button" name="button" value="Click Me" /></td>
            </tr>
            <tr>
                
                        <option value="C" {{ $grade=='C' ? 'selected' : '' }}>10C</option>
                        <option value="D" {{ $grade=='D' ? 'selected' : '' }}>10D</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="subjects">Subjects</label></td>
                <td>
                    <input type="checkbox" id="Java" name="subjects[]" value="Java"  {{
                        in_array('Java', $subjects) ? 'checked' : '' }}>
                    <label class="form-check-label" for="Java">Java</label>


                    <input type="checkbox" id="csharp" name="subjects[]" value="C#" class="form-check-input" {{
                        in_array('C#', $subjects) ? 'checked' : '' }}>
                    <label class="form-check-label" for="csharp">C#</label>

                    <input type="checkbox" id="php" name="subjects[]" value="PHP" class="form-check-input" {{
                        in_array('PHP', $subjects) ? 'checked' : '' }}>
                    <label class="form-check-label" for="php">PHP</label>

                </td>
            </tr>
            <tr>
                <td><label for="color">color</label></td>
                <td><input type="color" id="color" name="color" value="{{ $color }}" /></td>
            </tr>
            <tr>
                <td><label for="date">date</label></td>
                <td><input type="date" id="date" name="date" value="{{ $date }}" /></td>
            </tr>
            <tr>
                <td><label for="datetime-local">datetime-local</label></td>
                <td><input type="datetime-local" id="datetime-local" name="datetimelocal" value="{{ $datetimelocal }}" /></td>
            </tr>
            <tr>
                <td><label for="email">email</label></td>
                <td>
                    <input type="email" id="email" name="email" placeholder="Enter your email(s)" multiple value="{{ $email }}" />
                </td>
            </tr>
            <tr>
                <td><label for="file">file</label></td>
                <td><input type="file" id="file" name="file" value="{{ $file }}" /></td>
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
                <td><input type="month" id="month" name="month" value="{{ $month }}" /></td>
            </tr>
            <tr>
                <td><label for="number">number</label></td>
                <td><input type="number" id="number" name="number" min="1" max="100" step="2" value="{{ $number }}" /></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td><input type="password" id="password" name="password" value="{{ $password }}" /></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td>
                    <input type="radio" id="male" name="gender" value="male" {{ $radio=='male' ? 'checked' : '' }} />
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female" {{ $radio=='female' ? 'checked' : '' }} />
                    <label for="female">Female</label>
                </td>
            </tr>

            <tr>
                <td><label for="range">range</label></td>
                <td><input type="range" id="range" name="range" min="0" max="100" step="10" value="{{ $range }}" /></td>
            </tr>
            <tr>
                <td><label for="reset">reset</label></td>
                <td><input type="reset" id="reset" name="reset" /></td>
            </tr>
            <tr>
                <td><label for="search">search</label></td>
                <td><input type="search" id="search" name="search" value="{{ $search }}" /></td>
            </tr>
            <tr>
                <td><label for="submit">submit</label></td>
                <td><input type="submit" id="submit" name="submit" /></td>
            </tr>
            <tr>
                <td><label for="tel">tel</label></td>
                <td><input type="tel" id="tel" name="tel" value="{{ $tel }}" /></td>
            </tr>
            <tr>
                <td><label for="text">name</label></td>
                <td><input type="text" id="text" name="text" value="{{ $text }}" />
                </td>
            </tr>
            <tr>
                <td><label for="time">time</label></td>
                <td><input type="time" id="time" name="time" value="{{ $time }}" /></td>
            </tr>
            <tr>
                <td><label for="url">url</label></td>
                <td><input type="url" id="url" name="url" value="{{ $url }}" /></td>
            </tr>
            <tr>
                <td><label for="week">week</label></td>
                <td><input type="week" id="week" name="week" value="{{ $week }}" /></td>
            </tr>
            <tr>
                <td><label for="address">address</label></td>
                <td><textarea name="address" id="add " cols="30" rows="5" >{{ $address }}</textarea>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>