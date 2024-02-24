<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="/update/{{ $user->id }}" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Name</td>
                <td><input type='text' name='stud_name' value="{{ $user->stud_name }}" class="form-control" required/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type='email' name='stud_email' value="{{ $user->stud_email }}" class="form-control" required/></td>
            </tr>
            <tr>
                <td>Subject</td>
                <td><input type='text' name='stud_subject' value="{{ $user->stud_subject }}" class="form-control" required/></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><textarea name="stud_message" rows="4" cols="50" class="form-control" required>{{ $user->stud_message }}</textarea></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="datetime-local" name="datetime" value="{{ date('Y-m-d\TH:i', strtotime($user->datetime)) }}" required></td>
            </tr>
            <tr>
                <td colspan='2'>
                    <input type='submit' value="Update student"/>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
