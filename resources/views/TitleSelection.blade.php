<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page with Background Image Example</title>
  <link rel="stylesheet" href="{{asset('assets/css/stylets.css')}}">

</head>
<body>

  <div id="bg"></div>

	<div class="sidebar">
		@include('Dashboard')
	</div>
  
<form>
  <div>
    <h1>    Title Selection    </h1>
  </div>
  

  <div class="form-field">
    <input type="Title" placeholder="Title Name" required/>
  </div>
  <div class="form-field">
    <input type="Class Name" placeholder="Class Name" required/></div>
  
  <div class="form-field">
    <input type="Group Member Name 1" placeholder="Group member 1 & Arid No " required/></div>
  <div class="form-field">
      <input type="Group Member Name 2" placeholder="Group member 2 & Arid No" required/></div>
 <div class="form-field">
        <input type="Group Member Name 3" placeholder="Group member 3 & Arid No" required/></div>
      
    
  
  <div class="form-field">
    <button class="btn" type="submit">Submit</button>
  </div>
</form>

</body>
</html>
