<style>
.container {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.container h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #333;
}
label {
    font-weight: 600;
    display: block;
    margin-bottom: 5px;
}
input[type="text"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    margin-bottom: 15px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
textarea:focus {
    border-color: #28a745;
    outline: none;
}
.btn-success {
    background-color: #28a745;
    color: white;
    padding: 10px 18px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

.btn-success:hover {
    background-color: #218838;
}

</style>
@include('home.navbar')
<div class="container">
    <h2>Create Program</h2>

    <form method="POST" action="{{ url('program_store') }}">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description:</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save Program</button>
    </form>
</div>
