
        <?php include 'headermain.php' ?>
        <form method="POST" action="addcustomerprocess.php">
          <div class="container">
          <fieldset>
            <br>
            <legend>Enter Customer Information</legend>
               <div class="form-group">
              <label for="exampleInputPassword1" class="form-label mt-4">Name</label>
              <input type="text" name="cname" class="form-control" placeholder="Enter Name" required>
            </div>
           <div class="form-group">
              <label for="exampleTextarea" class="form-label mt-4">Address</label>
              <textarea class="form-control" name="cadd" id="exampleTextarea" rows="3" required></textarea>
            </div>
           <div class="form-group">
              <label for="exampleTextarea" class="form-label mt-4">Billing Address</label>
              <textarea class="form-control" name="cbadd" id="exampleTextarea" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="exampleSelect1" class="form-label mt-4">Example disabled select</label>
                <select class="form-select" id="exampleDisabledSelect1" disabled="">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
             <div class="form-group">
              <label for="exampleInputPassword1" class="form-label mt-4">Phone Number</label>
              <input type="text" name="cphone" class="form-control" placeholder="Enter Phone Number" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Register</button>
            <button type="reset" class="btn btn-primary">Reset</button>
            <br><br><br>
          </fieldset>
        </div>
        </form>
        <?php include 'footer.php';?>