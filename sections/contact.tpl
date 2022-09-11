 <div class="container-fluid pt-5 pb-5" id="contact">
      <div class="section_header text-center mb-5 mt-4">
        <h1>Contact Us</h1>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-12">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              <div class="form-group">
                <label for="exampleFormControlInput1">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
              </div>
              <div class="form-group">
                <label>Select Symptoms</label><br>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                  <label for="customcheckbox1" class="custom-control-label">Cold</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="fever">
                  <label for="customcheckbox2" class="custom-control-label">fever</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="breath">
                  <label for="customcheckbox3" class="custom-control-label">Difficulty in breath</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="tired">
                  <label for="customcheckbox4" class="custom-control-label">Feeling weak</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" name="message" rows="3" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>