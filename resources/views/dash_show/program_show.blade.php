 @include('home.navbar')
 <style>
.program-card {
    max-width: 700px;
    margin: 40px auto;
    background: #ffffff;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.program-card h2 {
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
    color: #2c3e50;
}

.program-card .btn-primary {
    display: inline-block;
    margin-bottom: 20px;
    background-color: #007bff;
    color: #fff;
    padding: 10px 16px;
    border: none;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease-in-out;
}

.program-card .btn-primary:hover {
    background-color: #0056b3;
}

.program-card .list-group-item {
    background-color: #5cdb95;
    border: 1px solid #e3e3e3;
    margin-bottom: 10px;
    border-radius: 6px;
    padding: 12px 18px;
    list-style: none;
    color: #444;
}

.program-card p {
    color: #777;
    text-align: center;
    font-style: italic;
}
#crt{
    margin-left: 30rem;
}
.program-card button {
    width: 4rem;
    height: 1.5rem;
    cursor: pointer;
    border-radius: 4px;
    border: none;
}
.program-card button:hover{
    background-color: blue;
}
 </style>
 <div class="program-card">
            <h2>Health Programs</h2>
            <a href="{{ url('dash/program') }}" class="btn btn-primary mb-3">Create New Program</a>
            @if ($programs->isEmpty())
             <p>No programs found.</p>
             @else
            @foreach ($programs as $program)
            <li class="list-group-item">
            <strong>{{ $program->id }}</strong><br>
                <strong>{{ $program->name }}</strong><br>
                {{ $program->description }}<br>
                <a href="{{ url('dash_show/enrollment_show/' . $program->id) }}"><button id="crt">Enroll</button></a>
            </li>
        @endforeach
        @endif
            </div>