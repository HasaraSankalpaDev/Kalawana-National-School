<form class="row g-3 ">
  <div class="col-md-6">
    <label for="firstName" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstName" name="firstName">
  </div>
  <div class="col-md-6">
    <label for="lastName" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastName" name="lastName">
  </div>
  <div class="col-12">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
   <div class="col-md-6">
    <label for="gender" class="form-label">Gender</label>
    <select id="gender" class="form-select" name="gender">
      <option value="m"selected>Male</option>
      <option value="f">Female</option>
      <option value="o">Other</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="bday" class="form-label">Birth Date</label>
    <select id="bday" class="form-select" name="bday">
      <option value="1" selected>1</option>
        <?php
        for ($i=2; $i<=31; $i++) {
            echo "<option value=$i>$i</option>";
        }
        ?>
    </select>
  </div>
  <div class="col-md-2">
    <label for="bmonth" class="form-label">Month</label>
    <select id="byear" class="form-select" name="bmonth">
        <?php
            $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
            for ($i=0; $i<=11; $i++){
                echo "<option value=$i>$months[$i]</option>";
            }
        ?>
    </select>
  </div>
  <div class="col-md-2">
    <label for="byear" class="form-label">Birth Year</label>
    <select id="byear" class="form-select" name="byear">
      <option value="2013" selected>2013</option>
      <?php
        for ($i=2012; $i>=1960; $i--) {
            echo "<option value=$i>$i</option>";
        }
        ?>
      </select>
  </div>
<div class="row">
<div class="col-md-8">
    <label for="bmonth" class="form-label">Month</label>
    <select id="byear" class="form-select" name="bmonth">
        <?php
            $months = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua &amp; Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia &amp; Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Cape Verde","Cayman Islands","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cruise Ship","Cuba","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kuwait","Kyrgyz Republic","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Mauritania","Mauritius","Mexico","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Namibia","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","Norway","Oman","Pakistan","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre &amp; Miquelon","Samoa","San Marino","Satellite","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","South Africa","South Korea","Spain","Sri Lanka","St Kitts &amp; Nevis","St Lucia","St Vincent","St. Lucia","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad &amp; Tobago","Tunisia","Turkey","Turkmenistan","Turks &amp; Caicos","Uganda","Ukraine","United Arab Emirates","United Kingdom","Uruguay","Uzbekistan","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];
            for ($i=0; $i<=200; $i++){
                echo "<option value=$i>$months[$i]</option>";
            }
        ?>
    </select>
  </div>
</div>
   <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>