<style>
    /* public/css/styles.css */

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .card {
        width: 100%;
        max-width: 400px;
        border: 1px solid #ccc;
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-header {
        background-color: #007bff;
        color: #fff;
        font-weight: bold;
        padding: 15px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        text-align: center;
        border-radius: 15px 15px 0 0;
    }

    .card-body {
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        display: block;
        margin-bottom: 5px;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
        border: 1px solid #007bff;
        border-radius: 4px;
        padding: 10px 20px;
        cursor: pointer;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }
</style>
<title>Login || Admin</title>
<div class="card">
    <div class="card-header">Login</div>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-body">
        <form action="{{ route('APL') }}" method="post" >
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" required autocomplete="email"
                    value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control" name="password" required
                    autocomplete="new-password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>
