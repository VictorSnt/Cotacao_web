<x-layout>

    <h1 class="title">Bem Vindo!</h1> 
    <h3 class="title">Insira suas credenciais.</h3>
    <div class="mx-auto max-w-screen-sm card">
        <form action="{{ route('login') }}" method="post">
            @csrf
            {{-- Email --}}
            <div class="mb-4">
                <label for="email">Email</label>
                <input type="text" name="email" class="input">
            </div>

            {{-- Password --}}
            <div class="mb-4">
                <label for="password">Senha</label>
                <input type="password" name="password" class="input">
            </div>

            <div class="mb-4 inline-flex">
                
                <input 
                    type="checkbox" 
                    name="remember" 
                    id="remember">
                <label for="remember">lembrar de mim</label>
                
            </div>
            <button class="primary-btn">Entrar</button>
        </form>
    </div>


</x-layout>
