<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Log Out</button>
</form>
