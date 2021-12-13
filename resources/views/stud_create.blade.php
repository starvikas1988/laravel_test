<html>
   <head>
      <title>Student Management |</title>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <!-- Popper JS -->
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/
     popper.js/1.12.9/umd/popper.min.js">
    </script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="/resources/demos/style.css">
   <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
   <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
   <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );

  </script>
   </head>

   <body>
      <h1>Student Management</h1>
      <form action = "/create" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         <table>
            <tr>
               <td>Name</td>
               <td><input type='text' name='stud_name' class="form-control" required/>
               </td>
            </tr>
            <br>
            <tr>
               <td>Email</td>
               <td><input type='email' name='stud_email' class="form-control" class="@error('email') is-invalid @else is-valid @enderror" required /></td>
            </tr>
            <br>
            <tr>
               <td>Subject</td>
               <td><input type='text' name='stud_subject' class="form-control" required /></td>
            </tr>
            <br>
            <tr>
               <td>Message</td>
               <td>
               <textarea id="stud_message" name="stud_message" rows="4" cols="50" class="form-control" required>
               </textarea>
               </td>
            </tr>
            <br>
            <tr>
            <td>Date</td>
               <td>   <input type="datetime-local" id="datetime" name="datetime"></td>
            </tr>
            <br>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Add student"/>
               </td>
            </tr>
         </table>
      </form>
      @error('title')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
      <a href="/edit-records">View Records</a>
   </body>
</html>