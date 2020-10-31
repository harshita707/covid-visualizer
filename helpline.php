<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="helpline.css" />
</head>

<body>
  <div class="container">
    <form method="GET" id="signup" action="symptons.php">
      <h2>Contact Us</h2>
      <h4>A.1 PERSON DETAILS</h4>
      <div>
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" />
      </div>
      <div>
        <label for="age">Age:</label>
        <input type="text" id="age" name="age" />
      </div>
      <div clas="gender" style="margin-bottom: 15px;">
        <label for="gen">Gender:</label>
        <input type="checkbox" name="gen[]" id="gen" value="Male">
        <label for="male">Male</label>
        <input type="checkbox" name="gen[]" id="gen" value="female">
        <label for="female">Female</label>
        <hr>
      </div>
      <div>
        <label for="mobile">Contact Number:</label>
        <input type="text" id="mobile" name="mobile" />
      </div>
      <div>
        <label for="district">District of current residence:</label>
        <input type="text" id="district" name="district" />
      </div>
      <div>
        <label for="state">State of current residence:</label>
        <input type="text" id="state" name="state" />
      </div>
      <h4>A.2  PATIENT CATEGORY (PLEASE SELECT ONLY ONE)</h4>
      <div class="cat" style="margin-bottom: 15px;">
        <input type="radio" name="cat[]" id="cat" value="cat1">
        <label for="cat1"> Symptomatic international traveller in last 14 days</label></br>
        <input type="radio" name="cat[]" id="cat" value="cat2">
        <label for="cat2">Symptomatic contact of lab confirmed case</label></br>
        <input type="radio" name="cat[]" id="cat" value="cat3">
        <label for="cat3"> Symptomatic healthcare worker</label></br>
        <input type="radio" name="cat[]" id="cat" value="cat4">
        <label for="cat4"> Hospitalized SARI (Severe Acute Respiratory Illness) patient</label></br>
        <input type="radio" name="cat[]" id="cat" value="cat5a">
        <label for="cat5a">Asymptomatic direct and high risk contact of confirmed case – family member</label></br>
        <input type="radio" name="cat[]" id="cat" value="cat5b">
        <label for="cat5b"> Asymptomatic healthcare worker in contact with confirmed case without adequate protection</label></br>
      </div>
      <hr></br>
      <h4>B.1 PERSON DETAILS</h4>
      <div>
        <label for="address">Present patient address: </label>
        <input type="text" id="address" name="address" />
      </div>
      <div>
        <label for="pin">Pin code: </label>
        <input type="text" id="pin" name="pin" />
      </div>
      <div style="margin-bottom: 15px;">
        <label for="dob" >Date of Birth: </label>
        <input type="date" id="dob" name="dob" /> <hr>
      </div>
      <div>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" />
      </div>
      <div>
        <label for="aadhar">Patient Aadhar No. (For Indians) :</label>
        <input type="text" id="aadhar" name="aadhar" />
      </div>
</br>
      <h4 >B.2 EXPOSURE HISTORY(2 WEEKS BEFORE THE ONSET OF SYMPTOMS)</h4>
      <div clas="travel" style="margin-bottom: 15px;">
        <label for="trav"> Did you travel to foreign country in last 14 days: </label>
        <input type="radio" name="trav[]" id="trav" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" name="trav[]" id="trav" value="no">
        <label for="no">No</label> </br> 
        <label for="fcountry">If yes, place(s) of travel: </label>
        <input type="text" id="fcountry" name="fcountry" />
      </div>
      <div clas="cpatient" style="margin-bottom: 15px;">
        <label for="pat"> Have you been in contact with lab confirmed COVID-19 patient: </label>
        <input type="radio" name="pat[]" id="pat" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" name="pat[]" id="pat" value="no">
        <label for="no">No</label> </br> 
        <label for="pname">If yes, name of confirmed patient:  </label>
        <input type="text" id="pname" name="pname" />
      </div>
      <div clas="quar" style="margin-bottom: 15px;">
        <label for="quar"> Were you Quarantined?: </label>
        <input type="radio" name="quar[]" id="quar" value="yes">
        <label for="yes">Yes</label>
        <input type="radio" name="quar[]" id="quar" value="no">
        <label for="no">No</label> </br> 
      </div><hr>
      <br />
      <h4>B.3 CLINICAL SYMPTOMS AND SIGNS </h4>
      <div style="margin-bottom: 15px;">
        <label for="sdate" >Date of onset of symptoms:</label>
        <input type="date" id="sdate" name="sdate" />
      </div>
      <div clas="Symptoms">
        <label for="sym">Symptoms:</label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Cough">
        <label for="Cough">Cough </label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Diarrhoea">
        <label for="Diarrhoea">Diarrhoea </label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Vomiting">
        <label for="Vomiting">Vomiting </label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Fever at evaluation">
        <label for="Fever">Fever at evaluation </label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Trouble breathing">
        <label for="breathing">Trouble breathing</label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Nasal discharge">
        <label for="Nasal discharge">Nasal discharge </label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Abdominal pain ">
        <label for="Abdominal pain ">Abdominal pain  </label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Persistent pain or pressure in the chest">
        <label for="pain">Persistent pain or pressure in the chest</label></br>
        <input type="checkbox" name="sym[]" id="sym" value="New confusion">
        <label for="confusion">New confusion</label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Inability to wake or stay awake">
        <label for="wake">Inability to wake or stay awake</label></br>
        <input type="checkbox" name="sym[]" id="sym" value="Bluish lips or face">
        <label for="Bluish">Bluish lips or face</label></br>
        <br />
      </div><hr></br>
      <h4>B.4 UNDERLYING MEDICAL CONDITIONS</h4>
      <div clas="condition">
        <label for="cond">Symptoms:</label></br>
        <input type="checkbox" name="cond[]" id="cond" value="COPD ">
        <label for="COPD ">COPD  </label></br>
        <input type="checkbox" name="cond[]" id="cond" value="Bronchitis">
        <label for="Bronchitis">Bronchitis </label></br>
        <input type="checkbox" name="cond[]" id="cond" value="Diabetes">
        <label for="Diabetes">Diabetes </label></br>
        <input type="checkbox" name="cond[]" id="cond" value="Hypertension">
        <label for="Hypertension">Hypertension</label></br>
        <input type="checkbox" name="cond[]" id="cond" value="Chronic renal disease">
        <label for="Chronic renal disease">Chronic renal disease</label></br>
        <input type="checkbox" name="cond[]" id="cond" value="Malignancy">
        <label for="Malignancy">Malignancy</label></br>
        <input type="checkbox" name="cond[]" id="cond" value="Heart disease ">
        <label for="Heart disease ">Heart disease </label></br>
        <input type="checkbox" name="cond[]" id="cond" value="Asthma">
        <label for="Asthma">Asthma</label></br>
        <br />
      </div><hr></br>
      <div>
        <button type="submit" value="Submit">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>