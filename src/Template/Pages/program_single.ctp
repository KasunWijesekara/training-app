<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
  <div class="col-md-5 p-lg-5 mx-auto my-5">
    <h1 class="display-4 font-weight-normal">Punny headline</h1>
  </div>
  <div class="product-device box-shadow d-none d-md-block"></div>
  <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="col-12 text-center" style="padding-top: 2rem">
      <div class="btn-group">
        <button type="button" class="btn btn-sm btn-outline-secondary">Download Brochure</button>
        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
          Register
        </button>
        <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#exampleModal2">
          Get Quotation
        </button>
      </div>
    </div>
  </div>
</div>










<!-- Register Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registration Forms</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/add-registration">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" name="address" class="form-control" id="formGroupExampleInput2" placeholder="Address">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" name="email" class="form-control" id="formGroupExampleInput2" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Course Name</label>
            <input type="text" name="course_id" class="form-control" id="formGroupExampleInput2" placeholder="Course Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">DOB</label>
            <input type="text" name="dob" class="form-control" id="formGroupExampleInput2" placeholder="Date of Birth">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Contact Number</label>
            <input type="number" name="phone" class="form-control" id="formGroupExampleInput2" placeholder="Contact Number">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button  type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Register Modal  -->


<!-- Quotation Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">Get a Quotation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="/add-quotation">
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" class="form-control" name="name" id="formGroupExampleInput" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Address</label>
            <input type="text" class="form-control" name="address" id="formGroupExampleInput2" placeholder="Address">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Contact Number</label>
            <input type="number" class="form-control" name="phone" id="formGroupExampleInput2" placeholder="Contact Number">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Course Name</label>
            <input type="text" class="form-control" name="course_id" id="formGroupExampleInput2" placeholder="Course">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Number of People</label>
            <input type="text" class="form-control" name="people" id="formGroupExampleInput2" placeholder="Number of People">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" class="form-control" name="email" id="formGroupExampleInput2" placeholder="Email">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Quotation Modal -->