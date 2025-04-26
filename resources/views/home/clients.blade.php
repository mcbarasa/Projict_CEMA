<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .clients-page {
  padding: 50px 20px;
  font-family: Arial, sans-serif;
  background-color: #f9fdfc;
}

.clients-page .container {
  max-width: 1100px;
  margin: 0 auto;
}

.clients-page h1 {
  font-size: 36px;
  color: #05386b;
  margin-bottom: 10px;
}

.clients-page p {
  font-size: 16px;
  color: #444;
  margin-bottom: 30px;
  align-items: center;
  display: flex;
}

.clients-table-wrapper {
  overflow-x: auto;
}

.clients-table {
  width: 100%;
  border-collapse: collapse;
  background-color: #ffffff;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}

.clients-table th,
.clients-table th {
  padding: 12px 15px;
  border-bottom: 1px solid #ddd;
  text-align: left;
}

.clients-table th {
  background-color: #e6f2f1;
  color: #05386b;
  font-weight: bold;
}

.clients-table tr:hover {
  background-color: #f0fbf9;
}

.badge {
  background-color: #379683;
  color: white;
  padding: 5px 10px;
  border-radius: 12px;
  font-size: 12px;
  display: inline-block;
  margin: 2px 2px;
}

.view-btn {
  background-color: #5cdb95;
  color: #05386b;
  padding: 6px 12px;
  text-decoration: none;
  font-weight: bold;
  border-radius: 6px;
  transition: background 0.3s ease;
}

.view-btn:hover {
  background-color: #3bb987;
}
#dash{
    margin-bottom: 1.4rem;
    height: 2rem;
    width: 7rem;
    cursor: pointer;
    background: #379683;
    border: none;
    border-radius: 4px;
  }
  #dash:hover{
    background: blue;
  }
  .sec {
    max-width: 700px;
    margin: 60px auto;
    padding: 30px;
    text-align: center;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
}
.sec:hover {
    transform: translateY(-5px); 
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); 
    background-color: #f0f8ff;
}
.sec h1 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #333;
    font-weight: bold;
}

.sec p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 30px;
    color: #555;
}

  </style>
</head>
<body>
<section class="clients-page" id="clients">
  <div class="container">
    <div class="sec">
    <h1>Registered Clients</h1>
    <p>This is the first/initial step in providing personalized healthcare services.
</br>
By capturing essential information such as name, contact details, </br> and medical background, we build a complete profile to better serve each client’s needs.</p>
<a href="{{ url('dash/client') }}"><button id="dash">Register</button></a>
    <a href="{{ url('dash_show/client_show')}}"><button id="dash">Show Clients</button></a>
    </div>    
<div class="clients-table-wrapper">
      <table class="clients-table">
        <thead>
          <tr>
            <th>Id</th>
            <th>Full Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Programs Enrolled</th>
            <th>Actions</th>
          </tr>
        </thead>
        <thead>
          <tr>
            <th>{id}</th>
            <th>Mcdee</th>
            <th>Male</th>
            <th>2000</th>
            <th>3</th>
            <th>waiting</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="sec">
    <h1>Client Enrollment</h1>
    <p>Here we connect registered clients to specific health </br>programs based on their needs.
Through enrollment, clients gain access </br>to targeted care, support services, and continuous monitoring within the programs they choose or are assigned to.</p> 
  </div>
  </div>
</section>
</body>
</html>