<style>
    .search-results {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: 8px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.search-results h2 {
    font-size: 24px;
    color: #343a40;
    margin-bottom: 20px;
    border-bottom: 2px solid #ced4da;
    padding-bottom: 10px;
}

.search-results p {
    font-size: 16px;
    padding: 8px 0;
    color: #495057;
    border-bottom: 1px dashed #dee2e6;
}

.search-results p:last-child {
    border-bottom: none;
}
.drive{
    display: flex;
    column-gap: 15rem;
}
.drive button{
    height: 2.5rem;
    width: 4rem;
    cursor: pointer;
    border-radius: 4px;
    border: none;
    color: white;
    background-color: #343a40;
}
.drive button:hover{
    background-color: #379683;
}
</style>
@include('home.navbar')
<div class="search-results">
    <h2>Search Results for "{{ $query }}"</h2>

    @forelse ($users as $user)
    <div class="drive">
        <p>{{ $user->name }} - {{ $user->email }}</p>
        <a href="{{ url('dash_show/client_show') }}"><button>Visit</button></a>
        </div>
    @empty
        <p>No results found.</p>
    @endforelse
</div>

<div class="search-results">
    <h2>Search Results for "{{ $query }}"</h2>

    @forelse ($clients as $clients)
    <div class="drive">
    <p><strong>{{ $clients->name }}</strong><br>{{ Str::limit($clients->body, 100) }}</p>
    <a href="{{ url('dash_show/client_show') }}"><button>Visit</button></a>
    </div>
@empty
    <p>No clients found.</p>
@endforelse
</div>

<div class="search-results">
    <h2>Search Results for "{{ $query }}"</h2>

    @forelse ($programs as $program)
    <div class="drive">
        <div class="dv">
    <p>{{ $program->name }}</p>
    <p>{{ $program->description }}</p>
</div>
    <a href="{{ url('dash_show/enrollment_show/') }}"><button>Enroll</button></a>
    </div>
@empty
    <p>No programs found.</p>
@endforelse
</div>



