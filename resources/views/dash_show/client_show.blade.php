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
  </style>
@include('home.navbar')
<section class="clients-page" id="clients">
  <div class="container">
    <h1>Registered Clients</h1>
    <a href="{{ url('dash/client') }}"><button id="dash">Register</button></a>
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
@if ($programs->isEmpty())
             <p>No programs found.</p>
             @else
          @foreach($clients as $clients)
            <tr>
              <th>{{ $clients-> id }}</th>
              <th>{{ $clients->name }}</th>
              <th>{{ $clients->email }}</th>
              <th>{{ $clients->gender }}</th>
              <th>{{ $clients->dob }}</th>
              <th>
                @foreach ($clients->programs as $program)
                  <span class="badge">{{ $program->name }}</span>
                @endforeach
              </th>
              <th><a href="{{ route('dash_show/client_show', $clients->id) }}" class="view-btn">View</a></th>
            </tr>
          @endforeach
          @endif
        </thead>
      </table>
    </div>
  </div>
</section>
