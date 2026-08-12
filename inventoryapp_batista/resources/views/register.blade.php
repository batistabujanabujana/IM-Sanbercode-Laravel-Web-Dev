<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>

    <h1>Create to new Account!</h1>

    <h2>Sign Up Form</h2>

    <form action="/welcome" method="POST">
        @csrf

        <label>First name:</label><br>
        <input type="text" name="nama_depan" required>

        <br><br>

        <label>Last name:</label><br>
        <input type="text" name="nama_belakang" required>

        <br><br>

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male<br>
        <input type="radio" name="gender" value="Female"> Female<br>
        <input type="radio" name="gender" value="Other"> Other

        <br><br>

        <label>Nationality:</label><br>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Other">Other</option>
        </select>

        <br><br>

        <label>Language Spoken:</label><br>
        <input type="checkbox" name="language[]" value="Bahasa Indonesia">
        Indonesia Language<br>

        <input type="checkbox" name="language[]" value="English">
        English<br>

        <input type="checkbox" name="language[]" value="Other">
        Other

        <br><br>

        <label>Bio:</label><br>
        <textarea name="bio" rows="7" cols="30"></textarea>

        <br><br>

        <button type="submit">Sign Up</button>

    </form>

</body>
</html>