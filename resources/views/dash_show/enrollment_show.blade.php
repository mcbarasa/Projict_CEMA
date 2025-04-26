<style>
.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
    font-weight: bold;
}

form {
    width: 100%;
}

label {
    font-weight: bold;
    margin-bottom: 8px;
    display: block;
    color: #555;
}

select.form-control {
    width: 100%;
    height: 200px;
    padding: 10px;
    font-size: 16px;
    border-radius: 8px;
    border: 1px solid #ced4da;
    background-color: #fff;
    transition: all 0.3s ease;
}

select.form-control:focus {
    border-color: #80bdff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    outline: none;
}

button.btn-success {
    width: 100%;
    padding: 12px;
    font-size: 18px;
    border-radius: 8px;
    border: none;
    background-color: #28a745;
    color: white;
    transition: background-color 0.3s ease;
    margin-top: 15px;
}

button.btn-success:hover {
    background-color: #218838;
}
</style>

@include('home.navbar')
<div class="container">
    <h2>Enroll Client to Programs</h2>
@foreach ($programs as $program)
    <form method="POST" action="{{ url('dash_show/enrollment_show/' . $program->id) }}">
        @csrf
@endforeach
        <div class="mb-3">
            <label for="programs">Select Programs:</label>
            <select name="program_ids[]" id="programs" class="form-control" multiple required>
                @foreach ($programs as $program)
                    <option value="{{ $program->id }}">{{ $program->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Enroll</button>
    </form>
</div>

