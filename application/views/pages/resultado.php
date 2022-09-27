<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2"><?= $title ?></h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <a href="" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Game</a>
            </div>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Developer</th>
                <th>Realease Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($result as $game): ?>
              <tr>
                <td><?= $game["id"] ?></td>
                <td><?= $game["name"] ?></td>
                <td><?= $game["price"] ?></td>
                <td><?= $game["developer"] ?></td>
                <td><?= $game["release_date"] ?></td>
                <td>xxx</td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </main>


