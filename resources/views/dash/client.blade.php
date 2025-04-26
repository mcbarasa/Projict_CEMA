<style>
/* General container styling */
.container {
    max-width: 700px;
    margin: 50px auto;
    padding: 30px;
    background: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Form heading */
.container h2 {
    text-align: center;
    margin-bottom: 25px;
    color: #343a40;
}

/* Input group styling */
.mb-3 {
    margin-bottom: 20px;
}

/* Label styling */
label {
    display: block;
    margin-bottom: 6px;
    font-weight: 600;
    color: #333;
}

/* Input fields */
input.form-control,
select.form-control {
    width: 100%;
    padding: 10px 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    transition: border-color 0.3s ease-in-out;
}

/* Input focus effect */
input.form-control:focus,
select.form-control:focus {
    border-color: #28a745;
    outline: none;
}

/* Submit button */
.btn-success {
    background-color: #28a745;
    border: none;
    padding: 10px 20px;
    border-radius: 6px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.2s ease-in-out;
}

.btn-success:hover {
    background-color: #218838;
}

</style>
@include('home.navbar')
<div class="container">
    <h2>Register Client</h2>

    <form method="POST" action="{{ url('client_store') }}">
        @csrf
        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Phone:</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label>Gender:</label>
            <select name="gender" class="form-control">
                <option value="">Select</option>
                <option>male</option>
                <option>female</option>
                <option>other</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Date of Birth:</label>
            <input type="date" name="dob" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>
