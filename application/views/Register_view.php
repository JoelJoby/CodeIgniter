<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register Form</h1>

    <?php echo validation_errors(); ?> 

    <form action="" method="post">
        <table>

            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" placeholder="Name" name="uname">
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td>
                    <input type="text" placeholder="Email" name="email">
                </td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender"> Male
                    <input type="radio" name="gender"> Female
                    <input type="radio" name="gender"> Other
                </td>
            </tr>

            <tr>
                <td>Mobile:</td>
                <td>
                    <select>
                        <option value="+91">+91</option>
                        <option value="+92">+92</option>
                        <option value="+93">+93</option>
                        <option value="+94">+94</option>
                        <option value="+95">+95</option>
                    </select>
                    <input type="phone" placeholder="Enter the mobile" name="mobile">
                </td>
            </tr>

            <tr>
                <td>Password:</td>
                <td>
                    <input type="password" placeholder="Password" name="pwd">
                </td>
            </tr>

            <tr>
                <td>Confirm Password:</td>
                <td>
                    <input type="password" placeholder="Confirm Password" name="cpwd">
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" value="Registration"></td>
            </tr>

        </table>
    </form>
    
</body>
</html>