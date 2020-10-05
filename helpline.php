<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="helpline.css" />
  </head>
  <body>
    <div class="container">
      <form  method="GET" id="signup" action="symptons.php">
        <h2>Contact Us</h2> 
        <!-- <a href="logout.php">Logout</a> -->
        <div>
          <label for="name">Name</label>
          <input type="text" id="name" name="name"  />
        </div>
        <div>
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" />
        </div>
        <div>
          <label for="mobile">Contact Number</label>
          <input type="text" id="mobile" name="mobile" />
        </div>
        <br />
        <div clas="Symptoms">
          <label for="sym">Symptoms</label>
          <input type="checkbox" name="sym[]" id="sym" value ="Trouble breathing">
          <label for="breathing">Trouble breathing</label>
          <input type="checkbox" name="sym[]" id="sym" value ="Persistent pain or pressure in the chest">
          <label for="pain">Persistent pain or pressure in the chest</label>
          <input type="checkbox" name="sym[]" id="sym" value ="New confusion">
          <label for="confusion">New confusion</label>
          <input type="checkbox" name="sym[]" id="sym" value ="Inability to wake or stay awake">
          <label for="wake">Inability to wake or stay awake</label>
          <input type="checkbox" name="sym[]" id="sym" value ="Bluish lips or face">
          <label for="Bluish">Bluish lips or face</label>
        <br />
        <div>
          <button type="submit" value="Submit">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>
