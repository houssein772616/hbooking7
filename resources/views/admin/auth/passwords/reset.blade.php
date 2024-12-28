<!DOCTYPE html>
<html>
<head>
    <title>Réinitialiser le Mot de Passe</title>
</head>
<body>
    <h1>Réinitialiser le Mot de Passe</h1>
    <form method="POST" action="{{ route('admin.password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div>
            <label for="email">Adresse Email :</label>
            <input type="email" name="email" id="email" value="{{ $email ?? old('email') }}" required autofocus>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Nouveau Mot de Passe :</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirmer le Mot de Passe :</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Réinitialiser le Mot de Passe</button>
    </form>
</body>
</html>
