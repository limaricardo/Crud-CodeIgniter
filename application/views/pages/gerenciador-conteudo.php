<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<h1>Gerenciador de Conteúdo</h1>
    <form action="<?= base_url() ?>gerenciador/storeFontSize" method="POST">
        <input type="hidden" name="name" value="title_size" />
        <label for="title-size">Selecione o tamanho da fonte do título:</label>
        <select id="title-size" name="size">
            <option value="8">8</option>
            <option value="12">12</option>
            <option value="16">16</option>
            <option value="20">20</option>
            <option value="24">24</option>
            <option value="26">26</option>
        </select>
        <input type="submit"></input>
    </form>
</main>