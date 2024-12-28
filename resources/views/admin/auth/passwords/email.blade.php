<!DOCTYPE html>
<html>
<head>
    <title>Réinitialisation du Mot de Passe</title>
</head>
<body>
    <h1>Réinitialisation du Mot de Passe</h1>
    <form method="POST" action="{{ route('admin.password.email') }}">
        @csrf
        <div>
            <label for="email">Adresse Email :</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Envoyer le Lien de Réinitialisation</button>
    </form>
</body>
</html>
