<h1 class="mt-6 font-bold text-lg">Meus Livros</h1>

<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 flex flex-col gap-4">
        <?php foreach ($livros as $livro): ?>
            <div class="p-2 rounded borde-stone-800 border-2 bg-stone-900">
                <div class="flex">
                    <div class="w-1/3">imagem</div>
                    <div class="space-y-1">
                        <a href="/livro?id=<?= $livro->id ?>" class="font-semibold hover:underline"><?= $livro->titulo ?></a>
                        <div class="text-xs italic"><?= $livro->autor ?></div>
                    </div>
                </div>
                <div class="text-sm mt-2">
                    <?= $livro->descricao ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stoner-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo livro!</h1>
        <form class="p-4 space-y-4" method="POST" action="/livro-criar">

            <?php if ($validacoes = flash()->get('validacoes')): ?>
                <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-md border-2">
                    <ul>
                        <li>Deu ruim!!</li>
                    </ul>
                    <?php foreach ($validacoes as $validacao): ?>
                        <li><?= $validacao ?></li>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>


            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Titulo</label>
                <input type="text" name="titulo" class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Autor</label>
                <input name="autor" class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1" />
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Descricao</label>
                <textarea name="descricao" class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1"></textarea>
            </div>

            <div class="flex flex-col">
                <label class="text-stone-400 mb-1">Ano de Lançamento</label>
                <select name="ano_de_lancamento" class="borde-stone-800 border-2 rounded-md bg-stone-900 text-sm focus:outline-none px-2 py-1">
                    <?php foreach (range(1800, date('Y')) as $ano): ?>
                        <option value="<?= $ano ?>"><?= $ano ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-1 rounded-md border-2 hover:bg-stone-800">
                Salvar
            </button>
        </form>
    </div>
</div>