<html>
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <button><a href="/insert"</a>Add</button>
      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Subject</td>
            <td>Message</td>
            <td>Date Time</td>
            <td>Delete</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->subject }}</td>
            <td>{{ $user->message }}</td>
            <td>{{ date("l jS \of F Y h:i:s A",strtotime($user->datetime)) }}</td>
            <td><a href = 'delete/{{ $user->id }}'>Delete</a></td>
         </tr>
         @endforeach
      </table>
   </body>
</html>