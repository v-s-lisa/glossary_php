    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"><?= $view_bag['heading']?></h1>
        </div>
      </div>
      <div class="row">
        <form class="form-inline" action="" method="GET">
          <div class="form-group">
            <input type="text" name="search" id="search">
            <input type="submit" value="Search">
          </div>
        </form>
      </div>
      <div class="row">
        <table class = "table table-striped">
        <?php foreach ($model as $item) : ?>
          <tr>
            <td><a href="detail.php?term=<?= $item->id ?>"> <?= $item->term ?></td>
            <td><?= $item->definition ?></td>
          </tr>
        <?php endforeach; ?>

        <?php
          // foreach ($model as $item) {
          //   $term = $item->term;
          //   $definition = $item->definition;

          //   echo "<tr><td>$term</td><td>$definition</td></tr>";
          // }
        ?>
        </table>
      </div>
    </div>