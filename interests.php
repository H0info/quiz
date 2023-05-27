<?php include "config.php"; ?>
<?php include "header.php"; ?>

<div class="form-section">
    <h2>About You</h2>
    <label>Age:</label>
    <div>
        <input type="number" name="age-years" min="18" max="99" placeholder="Years" required>
        <input type="number" name="age-months" min="0" max="11" placeholder="Months" required>
    </div>
    <label>Profession:</label>
    <select name="profession" required>
        <option value="unemployed">Unemployed</option>
        <option value="employed">Employed</option>
        <option value="retired">Retired</option>
        <option value="student">Student</option>
    </select>
    <label>Annual Income:</label>
    <select name="revenu" required>
        <option value="0-20000">0 - 20,000</option>
        <option value="20000-50000">20,001 - 50,000</option>
        <option value="50000-100000">50,001 - 100,000</option>
        <option value="100000+">100,000+</option>
    </select>
</div>

<div class="interests-section">
    <h2>Preferences</h2>
    <div class="interests-images">
        <h3>Travel</h3>
        <button class="option" data-interest="travel">Travel</button>
        <!-- Add more options for the "Travel" category here -->

        <h3>Gastronomy</h3>
        <button class="option" data-interest="food">Gastronomy</button>
        <!-- Add more options for the "Gastronomy" category here -->

        <h3>Technology</h3>
        <button class="option" data-interest="tech">Technology</button>
        <!-- Add more options for the "Technology" category here -->

        <h3>Business</h3>
        <button class="option" data-interest="business">Business</button>
        <!-- Add more options for the "Business" category here -->
    </div>

    <div class="sub-selection" data-interest="travel">
        <label><input type="checkbox" name="travel[]" value="beach">Beach</label>
        <label><input type="checkbox" name="travel[]" value="mountains">Mountains</label>
        <!-- Add more options for the "Travel" sub-selection here -->
    </div>

    <div class="sub-selection" data-interest="food">
        <label><input type="checkbox" name="food[]" value="wine">Wine</label>
        <label><input type="checkbox" name="food[]" value="chocolate">Chocolate</label>
        <!-- Add more options for the "Gastronomy" sub-selection here -->
    </div>

    <div class="sub-selection" data-interest="tech">
        <label><input type="checkbox" name="tech[]" value="mobile">Mobile</label>
        <label><input type="checkbox" name="tech[]" value="gadgets">Gadgets</label>
        <!-- Add more options for the "Technology" sub-selection here -->
    </div>

    <div class="sub-selection" data-interest="business">
        <label><input type="checkbox" name="business[]" value="marketing">Marketing</label>
        <label><input type="checkbox" name="business[]" value="finance">Finance</label>
        <!-- Add more options for the "Business" sub-selection here -->
    </div>
</div>

<?php include "footer.php"; ?>
