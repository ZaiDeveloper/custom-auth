<form action="{{ route('login.attempt') }}" method="post">
    @csrf
    <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    @error('email') {{ $message }} @enderror
    <input type="password" name="password" value="{{ old('password') }}" placeholder="Password">
    @error('password') {{ $message }} @enderror
    <button type="submit">
        Login
    </button>
</form>