<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<h1>Gerenciador de Conteúdo</h1>
    <fieldset id="edit-title-size" class="edit-title-size">
        <label for="edit-title-size">Edit Title Size</label>
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
    </fieldset>
    <fieldset id="edit-text-area" class="edit-text-area">
        <label for="edit-text-area">Edit Text Area</label>
        <form action="<?= base_url() ?>gerenciador/storeArticle" method="POST">
            <input type="hidden" name="name" value="article" />
            <textarea placeholder="Edite seu artigo aqui" name="content" id="" cols="50" rows="10"></textarea> 
            <input type="submit" value="Editar texto"/>
        </form>
    </fieldset>
    
</main>