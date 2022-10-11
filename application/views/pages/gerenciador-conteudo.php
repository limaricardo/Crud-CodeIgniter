<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<h1 style="text-align: center">Gerenciador de Conteúdo</h1>
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
    <fieldset id="vote" class="vote">
        <label for="vote">Edit your voting box</label>
        <form action="<?= base_url() ?>gerenciador/storeVote" method="POST">
            <label for="title_vote">
                Title
                <input type="text" name="title_vote" id="title_vote" value="" />
            </label>

            <label for="subtitle_vote">
                Subtitle
                <input type="text" name="subtitle_vote" id="subtitle_vote" value="" />
            </label>
            

            <label for="option1">
                Option 1
                <input id="option1" type="text" name="option_1" value="" />             
            </label>

            <label for="option2">
                 Option 2
                <input id="option2" type="text" name="option_2" value="" />
            </label>
            
            <input type="submit" />
        </form>
    </fieldset>
    
</main>