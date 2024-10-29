<div class="mt-6 grid grid-cols-2 gap-2">
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stoner-700 text-stone-400 font-bold px-4 py-2">Login</h1>
        <form class="p-4 space-y-4">
            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="email"
                    class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Email"
                    name="email" required>
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Senha"
                    name="senha" required>
            </div>

            <button
                type="submit"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 
                hover:bg-stone-800">Logar
            </button>
        </form>
    </div>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stoner-700 text-stone-400 font-bold px-4 py-2">Registro</h1>
        <form class="p-4 space-y-4" method="POST" action="/registrar">

            <?php if (isset($mensagem) && strlen($mensagem)): ?>
                <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-md border-2">
                    <?= $mensagem ?>
                </div>
            <?php endif; ?>

            <?php if (isset($_SESSION['validacoes']) && sizeof($_SESSION['validacoes'])): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2">
                    <ul>
                        <li>Deu ruim!!</li>
                    </ul>
                    <?php foreach ($_SESSION['validacoes'] as $validacao): ?>
                        <li><?= $validacao ?></li>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Nome</label>
                <input
                    type="text"
                    class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Nome"
                    name="nome">
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Email</label>
                <input
                    type="text"
                    class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Email"
                    name="email">
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Confirme seu Email</label>
                <input
                    type="text"
                    class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Email"
                    name="email_confirmacao">
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Senha</label>
                <input
                    type="password"
                    class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"
                    placeholder="Senha"
                    name="senha">
            </div>

            <button
                type="reset"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 
                hover:bg-stone-800">Cancelar
            </button>

            <button
                type="submit"
                class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 
                hover:bg-stone-800">Registrar
            </button>
        </form>
    </div>
</div>