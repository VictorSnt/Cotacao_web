<x-layout>

    <h1 class="title">Registro de Representante</h1> 

    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('register') }}" method="post">
            @csrf
            {{-- Username --}}
            <div class="mb-4">
                <label for="name">Nome</label>
                <input type="text" name="name"
                value="{{ old('name') }}" class="input
                @error('name') ring-red-500 @enderror">
                @error('name')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            

            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" 
                value="{{ old('email') }}" class="input
                @error('email') ring-red-500 @enderror">
                @error('email')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            

            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Senha</label>
                <input type="password" name="password" class="input
                @error('password') ring-red-500 @enderror">
                @error('password')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            

            {{-- Password-Confirmation --}}
            <div class="mb-4">
                <label for="password_confirmation">Confrimação de senha</label>
                <input type="password" name="password_confirmation" class="input
                @error('password_confirmation') ring-red-500 @enderror">
                @error('password_confirmation')
                    <p class="error">{{ $message }}</p>
                @enderror
            </div>
            

            <button class="primary-btn">Registrar</button>
        </form>
    </div>

</x-layout>