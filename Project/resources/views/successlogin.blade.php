<!DOCTYPE html>
<html>
 <head>
  <title>Socio Ladder</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Socio Ladder</h3><br />


    <div>
      @foreach($checklogin as $key)

     <strong>Welcome {{$key->name}} </strong> <a href="{{ url('/main/logout') }}" class="btn btn-danger">Logout</a>
     <br /> <br />

<form action="/employee" method="post">
{{csrf_field()}}
<input name="id" type="hidden" value="{{$key->id}}">
      @endforeach
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Company Name">Company Name</label>
      <input class="form-control" id="Company Name" name="CompanyName" placeholder="Company Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="Designation">Designation</label>
      <input class="form-control" id="Designation" name="Designation" placeholder="Designation" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="From">From</label>
      <input type="date" class="form-control" id="From" name="From" placeholder="Month and Year" required>
    </div>
    <div class="form-group col-md-6">
      <label for="To">To</label>
      <input type="date" class="form-control" id="To" name="To" placeholder="Month and Year" required>
    </div>
  </div>

   <div class="form-group col-md-12">
      <label for="Job Type">Job Type</label>
      <select id="Job Type" name="JobType" class="form-control" required>
        <option value="Full Time">Full Time</option>
        <option value="Part Time">Part Time</option>
        <option value="Consultant">Consultant</option>
      </select>
    </div>

      <div class="form-group col-md-12">
      <label >Experience Details</label>
      <div class="col-sm-10">
        <textarea class="form-control" rows="5" id="area" placeholder="Summery" name="ExperienceDetails" required></textarea>
      </div>
    </div>
  <div class="form-group col-md-12">
    <label for="Skill Name">Skill Name</label>
    <input type="text" class="form-control" id="Skill Name"  name="SkillName" placeholder="Skill Name" required>
  </div>

   <div class="form-group col-md-12">
      <label for="Job Type">Proficiency</label>
      <select id="Job Type" name="Proficiency" class="form-control" required>
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
        <option value="Expert">Expert</option>
      </select>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
   
   <br />
  </div>
 </body>
</html>
