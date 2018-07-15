<html>
<head>
<script>
function validateForm() {
    var x = document.forms["jobprof"]["jobprofile"].value;
    if (x == "") {
        alert("Job profile must be filled out");
        //x.focus();
        return false;
    }
    
    var x = document.forms["jobprof"]["vacancies"].value;
    if (x == "") {
        alert("Age must be filled out");
        //x.focus();
        return false;
    }
   
    var x = document.forms["jobprof"]["cutoff"].value;
    if (x == "") {
        alert("cutoff must be filled out");
        //x.focus();
        return false;
    }
   
    
    return true;

}
</script>
</head>
<?php
 session_start();
?>
<form name="jobprof" action="update.php" onsubmit="return validateForm()" method="POST"  >
Job Profile:
  <input type="text" name="jobprofile" id="jobprofile" value=" <?php echo $_SESSION['jobprofile']?>">
  <br>
  <br>
Vacancies:
  <input type="text" name="vacancies" id="vacancies" value="<?php echo $_SESSION['vacancies'] ?>">
  <br>
  <br>
  SkillSet:<br>
  <input type="checkbox"  name="skills[]" value="c"/> C <br/>
  <input type="checkbox" name="skills[]" value="java" /> Java<br />
  <input type="checkbox" name="skills[]" value="dotnet" /> DotNet<br/>
  <input type="checkbox" name="skills[]" value="finance" />Finance<br/>
  <input type="checkbox" name="skills[]" value="management" />Management<br/>
  <br>
  <br>
 Disabilities:<br>
  <input type="checkbox"  name="disabilities[]" value="blind" /> Blind <br />
  <input type="checkbox" name="disabilities[]" value="deaf" /> Deaf<br />
  <input type="checkbox" name="disabilities[]" value="dumb" /> Dumb<br/>
  <input type="checkbox" name="disabilities[]" value="handicapped" />Handicapped<br/>
  <br>
  <br>
  Cutoff:
  <input type="text" name="cutoff" id="cutoff" value="<?php echo $_SESSION['cutoff'] ?>">
  <br>
  <br>
  Sectors:<br>
  <input type="checkbox"  name="sectors[]" value="banking" /> Banking <br />
  <input type="checkbox" name="sectors[]" value="retail" /> RETAIL<br />
  <input type="checkbox" name="sectors[]" value="bpo" /> BPO<br/>
  <input type="checkbox" name="sectors[]" value="it" />IT<br/>
  <input type="checkbox" name="sectors[]" value="hospitality" />Hospitality<br/>
  <br>
  <br>
  <input type="submit" value="Update">
  </form>
  </html>